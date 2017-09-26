<html>
    <?php
        include "header.php";

    ?>

    <body>
       



    <div class="container">
	<?php
	$con=mysqli_connect("localhost","root",null,"tutorial");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
?>


	<div id='box'>
    	<form method="post" enctype="multipart/form-data" >
         <?php
			//print_r ($_FILES['file']);
			if(isset($_FILES['file'])){
			
				$name = $_FILES['file']['name'];
				$extension = explode('.', $name);
				$extension = end($extension);
				$type = $_FILES['file']['type'];
				$size = $_FILES['file']['size']/ 1000 ;
				$random_name = rand();
				$tmp = $_FILES['file']['tmp_name'];
				$tech_name = $_POST['tech_name'];
				
				if ((strtolower($type) != "video/mp4") && (strtolower($type) != "video/mpeg") && (strtolower($type) != "video/mpeg1") && (strtolower($type) != "video/mpeg4") && (strtolower($type) != "video/avi") && (strtolower($type) != "video/flv") && (strtolower($type) != "video/wmv") && (strtolower($type) != "video/mov"))
				{
					$message= "Video Format is not supported !";
					
    			}else
				{
					move_uploaded_file($tmp, 'videos/'.$name);	
					mysqli_query($con, "INSERT INTO vid_entry VALUES('', '$name' , '$name' , '$tech_name')");
					$message="Video has been successfully uploaded !";
				}
				echo "$message <br/> <br/>";
				echo "size: $size kb<br/>";
				echo "name: $name <br/>";
				echo "type: $type <br/><br/>";
			}
	
		?>
		  <div class="row">
                            <div class="form-group col-md-12">
                                <label>Technology </label>
                                <input type="text"class="form-control"name="tech_name" required>
                            </div>
                        </div>
        	Select Video : <br/>
            <input name="UPLOAD_MAX_FILESIZE" value="20971520000000"  type="hidden"/>
            <input type="file" name="file" id="file" />
            <br/><br/>
            <input type="submit" value="Upload" />
			
			
        </form>
	</div>
    
   
   
            </div>
        
    </body>
</html>