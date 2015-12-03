<?php
ob_start();
session_start();
if($_SESSION['name']!='coderhousebd')
{
	header('location: login.php');
}

include('config.php');
if(isset($_POST['form'])) {

	try {
	
		if(empty($_POST['messname'])) {
			throw new Exception('Mess_name can not be empty');
		}
		
		if(empty($_POST['contactnumber'])) {
			throw new Exception('Contact number can not be empty');
		}
		
		
		
		if(empty($_POST['rent_room'])) {
			throw new Exception('Rent of a room can not be empty');
		}
		
		
		if(empty($_POST['rent_seat'])) {
			throw new Exception('Rent of a seat can not be empty');
		}
		
		if(empty($_POST['rent_block'])) {
			throw new Exception('Rent of a block can not be empty');
		}
		
		if(empty($_POST['rent_floor'])) {
			throw new Exception('Rent of a floor can not be empty');
		}
		
		
		if(empty($_POST['select_place'])) {
			throw new Exception('Select your mess place');
		} 
		
		//first image upload
		
	
		$uploaded_file = $_FILES['file1']['name'];
		
		$file_basename = substr($uploaded_file, 0, strripos($uploaded_file, '.'));
		$file_ext = substr($uploaded_file, strripos($uploaded_file, '.'));
		/*
		$filesize = filesize($_FILES['file1']['tmp_name']) * .0009765625; // bytes to KB
		if($filesize > 100) {
			throw new Exception('file size exceeds (100KB is maximum)');
			
		}
		
		list($width, $height, $type, $attr) = getimagesize($_FILES['file1']['tmp_name']);
		
		if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.JPG')) {
			throw new Exception('file must be png or jpg');
		}*/
		
		move_uploaded_file($_FILES['file1']['tmp_name'], 'upload/'.$uploaded_file);

       
	   //second image
	   
	   $uploaded_file2 = $_FILES['file2']['name'];
		
		$file_basename2 = substr($uploaded_file2, 0, strripos($uploaded_file2, '.'));
		$file_ext2 = substr($uploaded_file2, strripos($uploaded_file2, '.'));
	/*	$filesize = filesize($_FILES['file2']['tmp_name']) * .0009765625; // bytes to KB
		if($filesize > 100) {
			throw new Exception('file size exceeds (100KB is maximum)');
			
		}
		*/
		if(($file_ext2!='.png')&&($file_ext2!='.jpg')&&($file_ext!='.JPG')) {
			throw new Exception('file must be png or jpg');
		}
		move_uploaded_file($_FILES['file2']['tmp_name'], 'upload/'.$uploaded_file2);
 
		$result =mysql_query("insert into mess_information (mess_name,contact_number,empty_seat,empty_block,empty_floor,empty_room,rent_room,rent_seat,rent_block,rent_floor,first_image,second_image,place) values('$_POST[messname]','$_POST[contactnumber]','$_POST[empty_seat]','$_POST[empty_block]','$_POST[empty_floor]','$_POST[empty_room]','$_POST[rent_room]','$_POST[rent_seat]','$_POST[rent_block]','$_POST[rent_floor]','$uploaded_file','$uploaded_file2','$_POST[select_place]')");
	
		if(($_POST['select_place'])=='Palbari'){
		
			$result =mysql_query("insert into palbari (mess_name,contact_number,empty_seat,empty_block,empty_floor,empty_room,rent_room,rent_seat,rent_block,rent_floor,first_image,second_image) values('$_POST[messname]','$_POST[contactnumber]','$_POST[empty_seat]','$_POST[empty_block]','$_POST[empty_floor]','$_POST[empty_room]','$_POST[rent_room]','$_POST[rent_seat]','$_POST[rent_block]','$_POST[rent_floor]','$uploaded_file','$uploaded_file2')");
		
		
		}
		if(($_POST['select_place'])=='Churamonkati'){
		
			$result =mysql_query("insert into Churamonkati (mess_name,contact_number,empty_seat,empty_block,empty_floor,empty_room,rent_room,rent_seat,rent_block,rent_floor,first_image,second_image) values('$_POST[messname]','$_POST[contactnumber]','$_POST[empty_seat]','$_POST[empty_block]','$_POST[empty_floor]','$_POST[empty_room]','$_POST[rent_room]','$_POST[rent_seat]','$_POST[rent_block]','$_POST[rent_floor]','$uploaded_file','$uploaded_file2')");
		
		}
		if(($_POST['select_place'])=='Arobpur'){
		
			$result =mysql_query("insert into arobpur (mess_name,contact_number,empty_seat,empty_block,empty_floor,empty_room,rent_room,rent_seat,rent_block,rent_floor,first_image,second_image) values('$_POST[messname]','$_POST[contactnumber]','$_POST[empty_seat]','$_POST[empty_block]','$_POST[empty_floor]','$_POST[empty_room]','$_POST[rent_room]','$_POST[rent_seat]','$_POST[rent_block]','$_POST[rent_floor]','$uploaded_file','$uploaded_file2')");
		
		}
		if(($_POST['select_place'])=='Ambottola'){
		
			$result =mysql_query("insert into Ambottola (mess_name,contact_number,empty_seat,empty_block,empty_floor,empty_room,rent_room,rent_seat,rent_block,rent_floor,first_image,second_image) values('$_POST[messname]','$_POST[contactnumber]','$_POST[empty_seat]','$_POST[empty_block]','$_POST[empty_floor]','$_POST[empty_room]','$_POST[rent_room]','$_POST[rent_seat]','$_POST[rent_block]','$_POST[rent_floor]','$uploaded_file','$uploaded_file2')");
		
		
		}
		if(($_POST['select_place'])=='Dharmotola'){
		
			$result =mysql_query("insert into Dharmotola (mess_name,contact_number,empty_seat,empty_block,empty_floor,empty_room,rent_room,rent_seat,rent_block,rent_floor,first_image,second_image) values('$_POST[messname]','$_POST[contactnumber]','$_POST[empty_seat]','$_POST[empty_block]','$_POST[empty_floor]','$_POST[empty_room]','$_POST[rent_room]','$_POST[rent_seat]','$_POST[rent_block]','$_POST[rent_floor]','$uploaded_file','$uploaded_file2')");;
		
		
		}
		$success_message = 'Data has been inserted successfully.';
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

?>

<!DOCTYPE html>
<head>
	<title>Mess information</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/main.css"/>  
</head>
<body> 

<form action="" method="post" enctype="multipart/form-data">
	<div class="heading_information">
	   <div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="heading">
						<h1>Please Give Your Mess Information</h1>
					    <?php  
                          
							if(isset($error_message)) {echo $error_message;}
							if(isset($success_message)) {echo $success_message;}
?>
					</div>
				</div>
			</div>
	   </div>
	</div>		 
	<div class="mess_name_area">
	   <div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
				    <div class="mess_name">
						<div class="form-group">
							<label>Mess Name</label>
							<input type="text" class="form-control" name="messname" placeholder="">
					    </div>
					    <div class="form-group">
							<label>Contact Number</label>
						     <input type="text" class="form-control" name="contactnumber" placeholder="">
					    </div>
				    </div>
				</div>
			</div>
	   </div>
	</div>		 
	<div class="main_content_area">
	   <div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="main_content">
						<div class="empty">
							 <div class="form-group">
								<label>Empty seat or seats</label>
								<input type="text" class="form-control" name="empty_seat"  placeholder="">
							  </div>
							
							 <div class="form-group">
								<label>Empty block or blocks</label>
								<input type="text" class="form-control" name="empty_block"  placeholder="">
							  </div>
							 <div class="form-group">
								<label>Empty floor or floors</label>
								<input type="text" class="form-control" name="empty_floor"  placeholder="">
							  </div>
							 <div class="form-group">
								<label>Empty room or rooms</label>
								<input type="text" class="form-control" name="empty_room"  placeholder="">
							  </div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="main_content">
						<div class="rent">
								 <div class="form-group">
									<label>Rent of a Room</label>
									<input type="text" class="form-control" name="rent_room" placeholder="">
								  </div>
								 <div class="form-group">
									<label>Rent of a Seat</label>
									<input type="text" class="form-control" name="rent_seat" placeholder="">
								  </div>
								 <div class="form-group">
									<label>Rent of a Block</label>
									<input type="text" class="form-control" name="rent_block"  placeholder="">
								  </div>
								 <div class="form-group">
									<label>Rent of a Floor</label>
									<input type="text" class="form-control" name="rent_floor"  placeholder="">
								  </div>
							
						
				
				        </div>	
					</div>
				</div>
					
			</div>
			
	    </div>
	</div>	

	<div class="slider-area">
	   <div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="slider">
				
						     <div class="form-group">
							    <label>Upload first Image</label>
							    <input type="file" name="file1" />
							
						     </div>
				
						     <div class="form-group">
							    <label>Upload 2nd Image</label>
							    <input type="file" name="file2"/>
							
						     </div>
						
					
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="place">
						<label>Select Place</label>
				        <select class="form-control" name="select_place">
							
							<option>Select your mess place</option>
							<option>Churamonkati</option>
							<option>Arobpur</option>
                            <option>Ambottola</option>
							<option>Dharmotola</option>
							<option>Palbari</option>
						</select>
				
					</div>
				</div>
				
			
			</div>
	   </div>
	</div>	
   <div class="submit_area">
	   <div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="submit">
							<button type="submit" class="btn btn-primary" name="form">Add New Post</button><a href="index.php" class="btn btn-primary">Visit Site</a>

					</div>
				</div>
			</div>
	   </div>
	</div>	
		
</form>
</body>
</html>