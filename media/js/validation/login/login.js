$(document).ready(function() {
    
    /*
     *Set-up of password validation
     */

    FormValidation.Validator.securePassword = {
        validate: function(validator, $field, options) {
            var value = $field.val();
            if (value === '') {
                return true;
            }

            // Check the password strength
            if (value.length < 8) {
                return {
                    valid: false,
                    message: 'The password must be more than 8 characters long'
                };
            }

            // The password doesn't contain any uppercase character
            if (value === value.toLowerCase()) {
                return {
                    valid: false,
                    message: 'The password must contain at least one upper case character'
                }
            }

            // The password doesn't contain any uppercase character
            if (value === value.toUpperCase()) {
                return {
                    valid: false,
                    message: 'The password must contain at least one lower case character'
                }
            }

            // The password doesn't contain any digit
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
     * Validate signin form
     */

    $('#signin_form').formValidation({
        message: 'This value is not valid',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },

        fields: {
            signin_username: {
                row: '.signin-user-name-error',
                validators: {
                    notEmpty: {
                        message: 'The user name is required'
                    },
                }   
            },
            sign_password: {
                row: '.signin-password-error',
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
    });

    /*
     * Validate signup form
     */

	$('#signup_form').formValidation({
		message: 'This value is not valid',

		icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
       
        fields: {
	        sign_up_full_name: {
                row: '.signup-full-name-error',
                validators: {
                    notEmpty: {
                        message: 'The full name is required'
                    },
                    stringLength: {
                        min: 5,
                        max: 40,
                        message: 'The full name must be more than 5 and less than 40 characters long'
                    },
                }
        	},
        	sign_up_user_name: {
                row: '.signup-user-name-error',
                validators: {
                    notEmpty: {
                        message: 'The user name is required'
                    },
                    stringLength: {
                        min: 5,
                        max: 30,
                        message: 'The username must be more than 5 and less than 30 characters long'
                    },
                }
        	},
            sign_up_password: {
                row: '.signup-password-error',
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    securePassword: {
                        message: 'The password is not valid'
                    }

                }
            },
            sign_up_password_confirm: {
                row: '.signup-password-confirm-error',
                validators: {
                    notEmpty: {
                        message: 'The password confirm is required'
                    },
                    identical: {
                        field: 'sign_up_password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
	});
});