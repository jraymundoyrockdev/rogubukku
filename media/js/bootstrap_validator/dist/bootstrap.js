(function ($) {
    FormValidation.Framework.Bootstrap = function (element, options, namespace) {
        options = $.extend(true, {
            button: {
                selector: '[type="submit"]',
                disabled: 'disabled'
            },
            err: {

                clazz: 'help-block',
                parent: '^(.*)col-(xs|sm|md|lg)-(offset-){0,1}[0-9]+(.*)$'
            },
            icon: {
                valid: null,
                invalid: null,
                validating: null,
                feedback: 'form-control-feedback'
            },
            row: {
                selector: '.form-group',
                valid: 'has-success',
                invalid: 'has-error',
                feedback: 'has-feedback'
            }
        }, options);

        FormValidation.Base.apply(this, [element, options, namespace]);
    };

    FormValidation.Framework.Bootstrap.prototype = $.extend({}, FormValidation.Base.prototype, {
        _fixIcon: function ($field, $icon) {
            var ns = this._namespace,
                type = $field.attr('type'),
                field = $field.attr('data-' + ns + '-field'),
                row = this.options.fields[field].row || this.options.row.selector,
                $parent = $field.closest(row);

            if ('checkbox' === type || 'radio' === type) {
                var $fieldParent = $field.parent();
                if ($fieldParent.hasClass(type)) {
                    $icon.insertAfter($fieldParent);
                } else if ($fieldParent.parent().hasClass(type)) {
                    $icon.insertAfter($fieldParent.parent());
                }
            }

            if ($parent.find('label').length === 0) {
                $icon.addClass('fv-icon-no-label');
            }
            if ($parent.find('.input-group').length !== 0) {
                $icon.addClass('fv-bootstrap-icon-input-group')
                    .insertAfter($parent.find('.input-group').eq(0));
            }
        },

        _createTooltip: function ($field, message, type) {
            var ns = this._namespace,
                $icon = $field.data(ns + '.icon');
            if ($icon) {
                switch (type) {
                    case 'popover':
                        $icon
                            .css({
                                'cursor': 'pointer',
                                'pointer-events': 'auto'
                            })
                            .popover('destroy')
                            .popover({
                                container: 'body',
                                content: message,
                                html: true,
                                placement: 'auto top',
                                trigger: 'hover click'
                            });
                        break;

                    case 'tooltip':
                    default:
                        $icon
                            .css({
                                'cursor': 'pointer',
                                'pointer-events': 'auto'
                            })
                            .tooltip('destroy')
                            .tooltip({
                                container: 'body',
                                html: true,
                                placement: 'auto top',
                                title: message
                            });
                        break;
                }
            }
        },

        _destroyTooltip: function ($field, type) {
            var ns = this._namespace,
                $icon = $field.data(ns + '.icon');
            if ($icon) {
                switch (type) {
                    case 'popover':
                        $icon
                            .css({
                                'cursor': '',
                                'pointer-events': 'none'
                            })
                            .popover('destroy');
                        break;

                    case 'tooltip':
                    default:
                        $icon
                            .css({
                                'cursor': '',
                                'pointer-events': 'none'
                            })
                            .tooltip('destroy');
                        break;
                }
            }
        },

        _hideTooltip: function ($field, type) {
            var ns = this._namespace,
                $icon = $field.data(ns + '.icon');
            if ($icon) {
                switch (type) {
                    case 'popover':
                        $icon.popover('hide');
                        break;

                    case 'tooltip':

                    default:
                        $icon.tooltip('hide');
                        break;
                }
            }
        },

        _showTooltip: function ($field, type) {
            var ns = this._namespace,
                $icon = $field.data(ns + '.icon');
            if ($icon) {
                switch (type) {
                    case 'popover':
                        $icon.popover('show');
                        break;

                    case 'tooltip':

                    default:
                        $icon.tooltip('show');
                        break;
                }
            }
        }
    });

    $.fn.bootstrapValidator = function (option) {
        var params = arguments;
        return this.each(function () {
            var $this = $(this),
                data = $this.data('formValidation') || $this.data('bootstrapValidator'),
                options = 'object' === typeof option && option;
            if (!data) {
                data = new FormValidation.Framework.Bootstrap(this, $.extend({}, {
                    events: {

                        formInit: 'init.form.bv',
                        formError: 'error.form.bv',
                        formSuccess: 'success.form.bv',
                        fieldAdded: 'added.field.bv',
                        fieldRemoved: 'removed.field.bv',
                        fieldInit: 'init.field.bv',
                        fieldError: 'error.field.bv',
                        fieldSuccess: 'success.field.bv',
                        fieldStatus: 'status.field.bv',
                        localeChanged: 'changed.locale.bv',
                        validatorError: 'error.validator.bv',
                        validatorSuccess: 'success.validator.bv'
                    }
                }, options), 'bv');

                $this.addClass('fv-form-bootstrap')
                    .data('formValidation', data)
                    .data('bootstrapValidator', data);
            }
            if ('string' === typeof option) {
                data[option].apply(data, Array.prototype.slice.call(params, 1));
            }
        });
    };

    $.fn.bootstrapValidator.Constructor = FormValidation.Framework.Bootstrap;
}(jQuery));
