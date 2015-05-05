
<div class="container the_login_page">
	<div class="page-header" align="center">
	    <h1>test</h1>
    </div>

    <div class="row">

        <div id="contentdiv" class="contcustom">

        	<?=Form::open('login', array('class'=>'search_form','id'=>'signin_form'));?>

        	<div class="inputs">

                <?php if ($message): ?>

                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong><h4><i class="fa fa-exclamation-triangle"></i> </strong> <?=$message?></h4>
                </div>
                 
                <?php endif;?>

                <div class="form-group">
                    <div class="signin-user-name-error <?=$has_error?>">      
            	       <?=Form::input('signin_username', $signin_username, ['placeholder'=>'Username', 'class'=>'login-input', 'id'=>'signin_username']);?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="signin-password-error <?=$has_error?>">
            	       <?=Form::password('signin_password', '', ['placeholder'=>'Password', 'class'=>'login-input']);?>
                    </div>
                </div>
				<?=Form::button('sign_in', 'Sign In', array('type' => 'submit', 'class'=>'btn btn-default wide fa medhidden redborder','id'=>'signin_button', $disable_button));?>
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
    		                    		<?=Form::input('full_name', '', ['placeholder'=>'Full Name', 'class'=>'login-input']);?>
    		                    	</div>
                                </div>
                                <div class="form-group">
    		                    	<div class="signup-user-name-error">
    				            		<?=Form::input('username', '', ['placeholder'=>'Username', 'class'=>'login-input']);?>
    					          	</div>
                                </div>
                                <div class="form-group">
                                    <div class="signup-password-error">
					          	        <?=Form::password('password', '', ['placeholder'=>'Password', 'class'=>'login-input']);?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="signup-password-confirm-error">
					                   <?=Form::password('password_confirm', '', ['placeholder'=>'Confirm Password', 'class'=>'login-input']);?>
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


<!-- MODAL FOR SUCCESFULLY REGISTERED -->
<div class="modal fade" id="signUpSuccessfullModal" tabindex="-1" role="dialog" aria-labelledby="signUpSuccessfullModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="close signUpSuccessfullModalClose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="signUpSuccessfullModal"> Sign Up - Rogubukku</h4>
            </div>

            <div class="modal-body">
                <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <h4>Hi <b class="newlySignedUpUser"></b> <a class="anchorjs-link" href="#oh-snap!-you-got-an-error!"><span class="anchorjs-icon"></span></a></h4>
                    <p>You have successfully created your account. <br />
                    You may only access the system for the next 24 hours. <br>
                    Please contact your <strong>ADMINISTRATOR</strong> to activate <br />your account for unlimited access.</p>
                </div>
            </div>
           
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">Login Now</button>
                <button type="button" class="btn btn-default signUpSuccessfullModalClose" data-dismiss="modal">Login Later</button>
            </div>
    </div>
</div>