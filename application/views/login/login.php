<div class="container">
	<div class="page-header" align="center">
	    <h1>test</h1>
	    <small>Shrimp fried rice! Shrimp fried rice! Shrimp fried rice!</small>
	</div>
    <div class="row">

        <div id="contentdiv" class="contcustom">

        	<?=Form::open('login/signin', array('class'=>'search_form'));?>

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
		                        <input id="full_name" type="text" placeholder="Full Name" onkeypress="check_values();">
					            <input id="username" type="text" placeholder="Username" onkeypress="check_values();">
					          	<input id="password" type="password" placeholder="Password" onkeypress="check_values();">
					            <input id="confirm_password" type="password" placeholder="Confirm Password" onkeypress="check_values();">
					            <button id="button1" class="btn btn-default wide fa medhidden redborder">Sign Up</button>
		                    </div>
		                </div>
		            </div>
		        </div>
        	</div><!--end of form_hover-->
    	</div><!--end of contcustom-->

    </div><!--end of row-->
</div><!--end of container-->