
<div class="container">
	<div class="page-header" align="center">
	    <h1>test</h1>
	    <small>Shrimp fried rice! Shrimp fried rice! Shrimp fried rice!</small>
	</div>
    <div class="row">

        <div id="contentdiv" class="contcustom">

        	<?=Form::open('login', array('class'=>'search_form','id'=>'signin_form'));?>

        	<div class="inputs">
                <div class="form-group">
                    <div class="signin-user-name-error">      
            	       <?=Form::input('signin_username', '', ['placeholder'=>'Username', 'class'=>'login-input', 'id'=>'signin_username']);?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="signin-password-error">
            	       <?=Form::password('sign_password', '', ['placeholder'=>'Password', 'class'=>'login-input']);?>
                    </div>
                </div>
				<?=Form::button('sign_in', 'Sign In', array('type' => 'submit', 'class'=>'btn btn-default wide fa medhidden redborder'));?>
            </div>

            <?=Form::close();?>

            <div class="form_hover">
	         	<div class="header">
	            	<div class="blur"></div>
		            <div class="header-text">
		                <div class="panel">
                            <h3>
                                <i class="fa fa-arrows-v"></i> Signup Form <i class="fa fa-arrows-v"></i>
                            </h3>
		                    <div class="panel-body">
		                    <?=Form::open('login/signup', array('class'=>'search_form', 'id'=>'signup_form'));?>
                                <div class="form-group">
    		                    	<div class="signup-full-name-error">
    		                    		<?=Form::input('sign_up_full_name', '', ['placeholder'=>'Full Name', 'class'=>'login-input']);?>
    		                    	</div>
                                </div>
                                <div class="form-group">
    		                    	<div class="signup-user-name-error">
    				            		<?=Form::input('sign_up_user_name', '', ['placeholder'=>'Username', 'class'=>'login-input']);?>
    					          	</div>
                                </div>
                                <div class="form-group">
                                    <div class="signup-password-error">
					          	        <?=Form::password('sign_up_password', '', ['placeholder'=>'Password', 'class'=>'login-input']);?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="signup-password-confirm-error">
					                   <?=Form::password('sign_up_password_confirm', '', ['placeholder'=>'Confirm Password', 'class'=>'login-input']);?>
                                    </div>
                                </div>
					            <?=Form::button('sign_up', 'Sign Up', array('type' => 'submit', 'class'=>'btn btn-default wide fa medhidden redborder'));?>
					        <?=Form::close();?>
		                    </div>
		                </div>
		            </div>
		        </div>
        	</div><!--end of form_hover-->
    	</div><!--end of contcustom-->

    </div><!--end of row-->
</div><!--end of container-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!--for test only-->
<script type="text/javascript">
    
    $(".form_hover").hover(function(){
        $(".login-input").attr("autocomplete", "off");
        }, function(){
        $(".login-input").attr("autocomplete", "on");
    });

	$(document).ready(function() {
        //validate password
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
                            message: 'The username must be more than 5 and less than 40 characters long'
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
</script>