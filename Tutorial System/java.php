<html>
    <?php
include "student_homepage.php";
?>

    <body>
       



    <div class="container">
	<h2 align="center"> Java Tutorial</h2>

	<?php
	$con=mysqli_connect("localhost","root","","tutorial");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
?>


	
    
   
   <div class="container">
            <table class="table table-striped" id="example">
		   <tr>
                    <th>Sr No</th>
                
					 <th>tutorial</th>

                </tr>
                <?php
                    $i=0;
					$query = mysqli_query($con, "SELECT * FROM vid_entry where tech_name='java'");
			while($row = mysqli_fetch_array($query)){
                        $i=$i+1;
						 ?>
						<tr>
												

                        <td style='padding: 6px; align-content: center'><?php echo $i ?></td>
                        
						<td style='padding: 6px; align-content: center'><a href="view_video.php?video=<?php echo $row['url']; ?>"><?php echo $row['name']; ?></a></td>
						
                        </tr>
						
                  <?php      
                    }
                ?>
            </table>
		
    </div>

            </div>
        
    </body>
</html>
