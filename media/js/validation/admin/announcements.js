$('#announcements_form').formValidation({
    message: 'This value is not valid',

    icon: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },

    fields: {
        message: {
            row: '.message-error',
            validators: {
                notEmpty: {
                    message: 'Message is required.'
                },
                stringLength: {
                    min: 5,
                    max: 500,
                    message: 'The message must be more than 5 and less than 500 characters long'
                }
            }
        },
        type: {
            row: '.type-error',
            validators: {
                notEmpty: {
                    message: 'Type is required.'
                }
            }
        },
        from_date: {
            row: '.from-date-error',
            validators: {
                notEmpty: {
                    message: 'From is required.'
                },
                date: {
                    format: 'MM/DD/YYYY',
                    message: 'The value is not a valid date'
                }
            }
        },
        to_date: {
            row: '.to-date-error',
            validators: {
                notEmpty: {
                    message: 'To is required.'
                },
                date: {
                    format: 'MM/DD/YYYY',
                    message: 'The value is not a valid date'
                }
            }
        }
    }
})
    .on('success.form.fv', function (e) {

        e.preventDefault();

        var $form = $(e.target);
        var $that = $(this);

        $.post($form.attr('action'), convertDateTime($form.serializeArray()), function (result) {

            if (result.isSuccess) {
                $that.formValidation('resetForm', true);
                $("#announcement_created").fadeIn().hide(2000);

                if($('#saveType').val() == 'updateAnnouncement')
                    window.location = "/admin/announcements";
            }
            else {
                $.each(result.errorFields, function (fieldName, fieldMessage) {
                    $that.formValidation('updateStatus', fieldName, 'INVALID', 'notEmpty');
                    $('small[data-fv-for=' + fieldName + ']').text(fieldMessage).addClass('removableFromAjax');
                });
            }

        }, 'json');
    });