
<div class="container">
	<div class="page-header" align="center">
	    <h1>test</h1>
	    <small>Shrimp fried rice! Shrimp fried rice! Shrimp fried rice!</small>
	</div>
    <div class="row">

        <div id="contentdiv" class="contcustom">

        	<?=Form::open('login', array('class'=>'search_form'));?>

        	<div class="inputs">      
            	<?=Form::input('username', '', ['placeholder'=>'Username', 'required']);?>
            	<?=Form::password('password', '', ['placeholder'=>'Password', 'required']);?>
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
		                    	<div class="full-name-error">
		                    		<?=Form::input('full_name', '', ['placeholder'=>'Full Name', 'name'=>'full_name', 'class'=>'redborder']);?>
		                    	</div>
		                    	<div class="user-name-error">
				            		<?=Form::input('username', '', ['placeholder'=>'Username', 'name'=>'username', 'class'=>'redborder']);?>
					          	</div>
					          	<?=Form::password('password', '', ['placeholder'=>'Password', 'name'=>'password']);?>
					            <?=Form::password('password_confirm', '', ['placeholder'=>'Password', 'name'=>'password_confirm']);?>
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
	$(document).ready(function() {
	$('#signup_form').formValidation({
		message: 'This value is not valid',
		icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
	        full_name: {
                row: '.full-name-error',
                validators: {
                    notEmpty: {
                        message: 'The full name is required'
                    }
                }
        	},

        	username: {
                row: '.user-name-error',
                validators: {
                    notEmpty: {
                        message: 'The user name is required'
                    }
                }
        	}
        }
	});
	});
</script>