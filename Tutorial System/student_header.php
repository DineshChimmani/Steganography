<?php
session_start();
if(isset($_SESSION['username']))
{}
else
{
    header("location:index.php");
}
include "connection.php";
$tech="select * from technology";
$result_tech=mysqli_query($conn,$tech);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Windsor University's Tutorial System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid" style="background-color:#4682B4" >
        <div class="navbar-header">
            <a class="navbar-brand" href="#" style="color: black">Tutorial System</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="" style="color: black">Home</a></li>

        </ul>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#" style="color: black">Class Lectures</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="student_logout.php" style="color: black">
                    <span class="glyphicon glyphicon-off" style="color: black"></span>
                    Logout</a></li>
        </ul>
    </div>
    <div>
        <div class="container">

           <table class="table table-striped" >
		   <tr>
                    <th>Sr No</th>
                
                    <th>Available Technologies</th>
                </tr>
                <?php
                    $i=1;
                    while ($rec=mysqli_fetch_array($result_tech))    {
                        $abc=$rec['tech_name'];
                        $abc=strtolower($abc);
						
						echo "<tr>";
                        echo "<td >" .$i."</td>";
                        
                        echo "<td ><a href='$abc.php'>".$rec['tech_name']."</a></td>";
                        echo "</tr>";
                        $i=$i+1;
                    }
                ?>
            </table>
        </div>
    </div>
</nav>
</body>
</html>