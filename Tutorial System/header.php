<?php
    session_start();
    if(isset($_SESSION['admin']))
        {}
    else
        {
            header("location:index.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        .dropdown-menu li a, .dropdown-toggle, .nav li a, .logout a, .navbar-header a  {
            color:black !important;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid" style="background-color:#4682B4">
        <div class="navbar-header">
            <a class="navbar-brand" href="homepage.php">Online Knowledge Centre (OKC)</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="homepage.php">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Class Lectures
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="add_lectures.php">Add Lectures</a></li>
                    <li><a href="Delete_lectures.php">Delete Lectures</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student accounts
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="student_account_create.php">Create student account</a></li>
                    <li><a href="delete_student_account.php">Delete student account</a></li>
                    <li><a href="student_accounts_view.php">View student accounts</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin accounts
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="admin_create.php">Create admin account</a></li>
                    <li><a href="admin_delete.php">Delete admin account</a></li>
                    <li><a href="admin_view.php">View admin accounts</a></li>

                </ul>
            </li>
            <li class="logout"><a href="admin_logout.php">
                    <span class="glyphicon glyphicon-off"></span>
                    Logout</a>
            </li>
        </ul>
    </div>
</nav>
</body>
</html>