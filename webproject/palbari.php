
			
		<?php
		include('header.php');
		include('config.php');
				$i=0;
				$result = mysql_query("select * from palbari order by info_id desc");
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
										                 <td>Rent of a Block:&nbsp<?php echo $row['rent_block']; ?></td>							
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
						                    <p class="btn btn-primary">Contact :<?php echo $row['contact_number']; ?></p>
						                   
					
						                 </div>
					                </div>	
		
	                            	<?php
									
										
                                }
	
	                    ?>
								
					
						
				                 </div>
			                </div>
		                </div>

 <?php 
	 	include('footer.php');
	 ?>
