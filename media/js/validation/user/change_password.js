$(document).ready(function () {
    FormValidation.Validator.securePassword = {
        validate: function (validator, $field, options) {
            var value = $field.val();
            if (value === '') {
                return true;
            }

            if (value.length < 8) {
                return {
                    valid: false,
                    message: 'The password must be more than 8 characters long'
                };
            }

            if (value === value.toLowerCase()) {
                return {
                    valid: false,
                    message: 'The password must contain at least one upper case character'
                }
            }

            if (value === value.toUpperCase()) {
                return {
                    valid: false,
                    message: 'The password must contain at least one lower case character'
                }
            }

            if (value.search(/[0-9]/) < 0) {
                return {
                    valid: false,
                    message: 'The password must contain at least one digit'
                }
            }

            return true;
        }
    };

    /*
     * Validate change password form
     */

    $('#change_password_form').formValidation({
        message: 'This value is not valid',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },

        fields: {
            old_password: {
                row: '.old-password-error',
                validators: {
                    notEmpty: {
                        message: 'Old password is required.'
                    },
                    securePassword: {
                        message: 'Old password is not valid.'
                    }

                }
            },

            password: {
                row: '.new-password-error',
                validators: {
                    notEmpty: {
                        message: 'New password is required.'
                    },
                    securePassword: {
                        message: 'New password is not valid.'
                    }

                }
            },

            confirm_new_password: {
                row: '.confirm-new-password-error',
                validators: {
                    notEmpty: {
                        message: 'Confirm new password is required.'
                    },
                    identical: {
                        field: 'password',
                        message: 'Confirm new password did not match.'
                    }
                }
            }
        }
    })
        .on('success.form.fv', function (e) {

            e.preventDefault();

            var $form = $(e.target);
            var $that = $(this);

            $.post($form.attr('action'), $form.serialize(), function (result) {
                if (result.isSuccess) {
                    $that.formValidation('resetForm', true);
                    $("#password_updated_status").show().delay(1000).fadeOut(2000);
                }
                else {
                    $that.formValidation('resetForm', true);
                    $("#password_not_updated_status").show().delay(1000).fadeOut(2000);
                }

            }, 'json');
        });
});