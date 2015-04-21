<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login | GFCCM Logbook System</title>
</head>
<body>
<div class="container">
	<div class="page-header" align="center">
	    <h1>GFCCM Logbook System </h1>
	    <small>Shrimp fried rice! Shrimp fried rice! Shrimp fried rice!</small>
	</div>
    <div class="row">
        <div id="contentdiv" class="contcustom">
        	<div class="inputs">      
            	<input id="username" type="text" placeholder="Username" onkeypress="check_values();">
            	<input id="password" type="password" placeholder="Password" onkeypress="check_values();">        
            	<button id="button1" class="btn btn-default wide fa medhidden redborder">Sign In</button>
            </div>

            <div class="form_hover">
	         	<div class="header">
	            	<div class="blur"></div>
		            <div class="header-text">
		                <div class="panel">
                            <h3 style="background-color:#428BCA; color:white; padding:10px;">
                                <i class="fa fa-arrows-v"></i>    Signup Form    <i class="fa fa-arrows-v"></i>
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
<footer class="footer">
    <div class="container">
	    <p class="lead">
	    	If He goes to the left then we'll go to the left, 
			If He goes to the right then we'll go to the right...
		</p>
	</div>
</footer>
</body>
</html>