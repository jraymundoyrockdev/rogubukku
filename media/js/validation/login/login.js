$(document).ready(function() {
    
    FormValidation.Validator.securePassword = {
        validate: function(validator, $field, options) {
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
                        message: 'Userame is required.'
                    },
                }   
            },
            signin_password: {
                row: '.signin-password-error',
                validators: {
                    notEmpty: {
                        message: 'Password is required.'
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
                    unique: {
                        enabled: false,
                        message: 'Username is not available'
                    }
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
	})
    .on('success.form.fv', function(e) {

        e.preventDefault();

        var $form = $(e.target);    
        var $that = $(this);
        var $thatSignin = $('#signin_form');

        $.post($form.attr('action'), $form.serialize(), function(result) {
            if(result.isSuccess){

                $('b.newlySignedUpUser').text(result.signupUser);
                $('.the_login_page').hide();
                $('#signUpSuccessfullModal').modal('show');

                //ifModalClose
                $('.signUpSuccessfullModalClose').click(function() {
                    $('.the_login_page').show();
                    $that.formValidation('resetForm', true);
                    $thatSignin.formValidation('resetForm',true);
                });
            }
            else{
                $.each(result.errorFields, function(fieldName, fieldMessage) {
                    $that.formValidation('updateStatus', fieldName, 'INVALID', 'notEmpty');
                    $('small[data-fv-for=' + fieldName + ']').text(fieldMessage).addClass('removableFromAjax');
                });
            }
            
        }, 'json');
    });

});