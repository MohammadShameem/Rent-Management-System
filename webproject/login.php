<?php
include('config.php');
if(isset($_POST['form1'])) {

	try {
	
		if(empty($_POST['messname'])) {
			throw new Exception('Mess name can not be empty');
		}
		
		if(empty($_POST['password'])) {
			throw new Exception('Password can not be empty');
		}
		
	    $num=0;
		$result = mysql_query("select * from tbl_login where username='$_POST[messname]' and password='$_POST[password]'");
		$num = mysql_num_rows($result);
		
		if($num>0) 
		{
			session_start();
			$_SESSION['name'] = "coderhousebd";
			header("location: single_mess_information.php");
		}
		else
		{
			throw new Exception('Invalid Username and/or password');
		}
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

?>



<!DOCTYPE html>
<head>
	<title>Login One</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">
		     
			<h1 class="margin-bottom-15">Please Login</h1>

			<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="#" method="post">				
		        <div class="form-group">
					<?php
if(isset($error_message))
{
	echo $error_message;
}
?>
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
							
		            	<label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
		            	<input type="text" class="form-control" id="username" name="messname" placeholder="Enter your mess name">
		            </div>		            	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		            	<label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
		            	<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		            </div>
		          </div>
		        </div>
		   
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		          		<input type="submit" value="Log in" name="form1" class="btn btn-info">
		          	</div>
		          </div>
		        </div>
		        <hr>
		      </form>
		      <div class="text-center">
		      	<a href="sign_up.php" class="templatemo-create-new">Create new account <i class="fa fa-arrow-circle-o-right"></i></a>	
		      </div>
		</div>
	</div>
</body>
</html>