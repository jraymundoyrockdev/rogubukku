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
            signin_password: {
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
	        full_name: {
                row: '.signup-full-name-error',
                validators: {
                    notEmpty: {
                        message: 'Fullame is required.'
                    },
                    stringLength: {
                        min: 5,
                        max: 40,
                        message: 'The full name must be more than 5 and less than 40 characters long'
                    },
                }
        	},
        	username: {
                row: '.signup-user-name-error',
                validators: {
                    notEmpty: {
                        message: 'Userame is required.'
                    },
                    stringLength: {
                        min: 5,
                        max: 30,
                        message: 'The username must be more than 5 and less than 30 characters long'
                    },
                }
        	},
            password: {
                row: '.signup-password-error',
                validators: {
                    notEmpty: {
                        message: 'Password is required.'
                    },
                    securePassword: {
                        message: 'Password is not valid.'
                    }

                }
            },
            password_confirm: {
                row: '.signup-password-confirm-error',
                validators: {
                    notEmpty: {
                        message: 'Password confirm is required.'
                    },
                    identical: {
                        field: 'password',
                        message: 'Password fields did not match.'
                    }
                }
            }
        }
	});
});