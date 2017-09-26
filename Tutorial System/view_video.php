<!DOCTYPE html>
<html>
<style type="text/css">
</style>
<body>
<?php
	$conn=mysqli_connect("localhost","root","","tutorial");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
?>
 <?php
include "student_homepage.php";

    ?>
	<div id='box'>
    	<?php
			$video= $_GET['video'];
		?>
        <video id="my_video_1" class="video-js vjs-default-skin" controls data-setup="{}" preload="auto" width="100%" height="450">
        
  		<source src="videos/<?php echo $video; ?>" type='video/mp4'>
		</video>

		<script type="text/javascript">
          function myScript() {
            console.log;
          }
        </script>
        <div id='back'>
        <a href="student_header.php">Back</a>
        </div>
	</div>
<?php
mysqli_close($conn);
?>
    </div>
</body>
</html>