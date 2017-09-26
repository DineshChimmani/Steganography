<!DOCTYPE html>
<html>
<head>
@Scripts.Render("~/bundles/jquery")
@Scripts.Render("~/bundles/jquery")

    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
	   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


</head>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
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
include "header.php";

    ?>
 <div class="container">
            <table class="table table-striped" id="example" class="display">
		   <tr>
                    <th>Sr No</th>
                
                    <th>Technology</th>
					 <th>tutorial</th>
										 <th>Action</th>

                </tr>
                <?php
                    $i=0;
					$query = mysqli_query($conn, "SELECT * FROM vid_entry");
					while($row = mysqli_fetch_array($query)){
                        $i=$i+1;
						 ?>
						<tr>
												

                        <td style='padding: 6px; align-content: center'><?php echo $i ?></td>
                        
                        <td style='padding: 6px; align-content: center'><?php echo $row['tech_name']; ?></td>
						<td style='padding: 6px; align-content: center'><?php echo $row['name']; ?></td>
										<td><a href="delete_lect.php?id=<?php echo $row['id']; ?>"> delete </a></td>
						
                        </tr>
						
                  <?php      
                    }
                ?>
            </table>
		
    </div>

    </div>
</body>
</html>