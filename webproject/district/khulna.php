<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/uikit.min.css"/>
		 <link rel="stylesheet" href="../css/slideshow.min.css"/>
        <link rel="stylesheet" href="../css/font-awesome.min.css"/>
        <link rel="stylesheet" href="../css/normalize.css"/>
        <link rel="stylesheet" href="../css/main.css"/>
        <link rel="stylesheet" href="../css/responsivemobilemenu.css"/>
		  <script src="../js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="../js/jquery.js"></script> 
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
	
	

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

			
		<div class="header_area">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">	
					  <div class="header">
						<div class="logotitle">
						      <div class="header_image floatleft">
							
							       <img src="images/logo.jpg"  alt="" />
							
						        </div>	
						       <div class="header_text">
							
							        <h1>Accomodation Management System </h1>
							
						         </div>	
						</div>
						<div class="re_login_logout">
						        
								<div class="login">
									<a href="login.php" class="btn btn-primary floatright">Login</a>
								   
								</div>
								<div class="logout">
								    
									<a href="logout.php"><button class="btn btn-primary floatright" type="submit">Logout</button></a>
								   
								</div>
						</div>
					   </div>
								
						
					</div>
				
				</div>
			</div>
		</div>
			
			<div class="main_menue_area">
				<div class="container">
			        <div class="row">
					    <div class="col-sm-12">	
							<div class="mainmenu">
								<ul id="nav">		
									<li><a href="index.php">Home</a></li>
									<li><a href="palbari.php">Palbari</a></li>
						            <li><a href="Churamonkati.php">Churamonkati</a></li>						
									<li><a href="Arobpur.php">Arobpur</a></li>
									<li><a href="ambottola.php">Ambottola</a></li>
									<li><a href="Dharmotola.php">Dharmotola</a></li>	
									<li><a href="">More</a>	
                                         <ul>
											<li><a href="">Dhaka</a></li>
											<li><a href="">Khulna</a></li>
											<li><a href="">Rajsahi</a></li>
										</ul>
									
									</li>	
									<li><a href="contact.php">Contact Us</a></li>
									<li><a href="sign_up.php">Registration</a></li>
									<li><a href="single_mess_information.php">View Post</a>
									
									    <ul>
											<li><a href="">Finder</a></li>
											<li><a href="">Owner</a></li>
											
										</ul>
									
									
									
									</li>
									<li><a href="addpost.php">Add Post</a></li>
						
								</ul>
							
							</div>
						</div>
			    	</div>
						
				</div>		
			</div>
					<!--content area -->
			
		<?php
		include('config.php');
				$i=0;
				$result = mysql_query("select * from mess_information order by info_id desc");
					while($row=mysql_fetch_array($result)) 
					{
					  $i++;
						?>
		                <div class="main_content_area">
			                <div class="container">
				                <div class="row">	
			
		
									<div  class="col-sm-4 col-md-4">
						                <div data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}" class="mess_short_information">
						                     <h4><?php echo $row['mess_name']; ?></h4>
											 <div class="min">
							                     <div data-uk-slideshow="{autoplay:true, animation: 'scroll'}">
								                    <ul class="uk-slideshow">
									
									                     <li><img src="upload/<?php echo $row['first_image'];  ?>" width="333px" height="175px" class="img-responsive" alt="" /></li>
									                     <li><img src="upload/<?php echo $row['second_image'];    ?>" width="333px" height="175px" class="img-responsive" alt="" /></li>
							                         </ul>
								              </div>
									
							                 </div>
                                            <div class="table_empty_rent">
						                         <table  class="table table-hover  table table-bordered">
									                <tr class="info">
										                <td>Empty Seat:&nbsp<?php echo $row['empty_seat']; ?></td>
										                <td>Rent of a Seat:&nbsp<?php echo $row['rent_seat']; ?></td>
									                </tr>
									                <tr>
										                 <td>Empty Block:&nbsp<?php echo $row['empty_block']; ?></td>
										                 <td>Rent of a Block:&nbsp <?php echo $row['rent_block']; ?></td>							
									                </tr>
									               <tr class="info">
										                <td>Empty Floor:&nbsp<?php echo $row['empty_floor']; ?></td>
										                 <td>Rent of a Floor:&nbsp<?php echo $row['rent_floor']; ?></td>						
									                </tr>
									                 <tr>
										                 <td>Empty Room:&nbsp<?php echo $row['empty_room']; ?></td>
										                  <td>Rent of a Room:&nbsp<?php echo $row['rent_room']; ?></td>					
					 				                  </tr>	
						
						                          </table>
					
						   
						   
						                     </div>
								                <p class="btn btn-primary">Contact:<?php echo $row['contact_number']; ?></p>
								                <p class="btn btn-primary">Place:<?php echo $row['place']; ?></p>
						                   
					
						                 </div>
					                </div>	
		
	                            	<?php
									
										
                                }
	
	                    ?>
								
					
						
				                 </div>
			                </div>
		                </div>

	

	
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/uikit.min.js"></script>
		<script src="js/slideshow.min.js"></script>
		<script src="js/slideshow-fx.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        

     
    </body>
</html>
