
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
