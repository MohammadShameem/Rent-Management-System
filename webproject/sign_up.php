<?php
include('config.php');
if(isset($_POST['form2'])) {

	try {
	
		if(empty($_POST['m_name'])) {
			throw new Exception('Mess name can not be empty');
		}
		
		if(empty($_POST['password'])) {
			throw new Exception('Password can not be empty');
		}
		
		$result = mysql_query("insert into tbl_login (username,password) values('$_POST[m_name]','$_POST[password]') ");
		
		
		
	    header("location:login.php");
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

?>

<!DOCTYPE html>
<head>

	<title>Create Account</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
	<h1 class="margin-bottom-15">Create Account</h1>
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="" method="post">
			<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>	
				<div class="form-inner">
					<div class="form-group">
			            <div class="col-md-12">	
							<i class="fa fa-user fa-medium"></i>
			               <label for="first_name" class="control-label">Name</label>
			                <input type="text" class="form-control" id="first_name" name="m_name" placeholder="Enter your mess name">		            		            		            
			             </div>  
			                     
			        </div>			     					     
			        <div class="form-group">
						  <div class="col-md-12">
						  <i class="fa fa-lock fa-medium"></i>
							<label for="password" class="control-label">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
						</div>
				    </div>
			        <div class="form-group">
			          <div class="col-md-12">
			             <input type="submit" value="Create account" name="form2" class="btn btn-info">
			            
			          </div>
			        </div>	
				</div>				    	
		      </form>		      
		</div>
	</div>
	
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>