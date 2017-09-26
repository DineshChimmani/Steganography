<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        .modal.modal-wide{
            overflow: hidden;
        }
        .modal.modal-wide .modal-dialog {
            width: 30%;
        }
        .modal-wide .modal-body {
            overflow-y: auto;
        }

        @-webkit-keyframes ezCustTrans {
            0% {
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-transform:  perspective(90px) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                -moz-transform: perspective(90px) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                -ms-transform: perspective(90px) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                transform: perspective(90px) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                opacity: 0;
            }
            68% {
                -webkit-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                -moz-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                -ms-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                opacity: 0.8;
            }
            100% {
                -webkit-transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                -moz-transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                -ms-transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                opacity: 1;
            }
        }
        @keyframes ezCustTrans {
            0% {
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-transform: perspective(90px) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                -moz-transform: perspective(90px) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                -ms-transform: perspective(90px) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                transform: perspective(90px) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                opacity: 0;
            }
            68% {
                -webkit-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                -moz-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                -ms-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                opacity: 0.8;
            }
            100% {
                -webkit-transform: rotateY(0deg) rotateX(0deg) translateZ(0px);
                -moz-transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                -ms-transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                opacity: 1;
            }
        }
        .ezCusTrans {
            -webkit-animation-duration: 0.75s;
            animation-duration: 0.75s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: ezCustTrans;
            animation-name: ezCustTrans;
        }


        .menu > ul {
            margin-right: 0%;
            display: inline-block;
            list-style-type: none;
            padding: 0px;
            margin-top: 15%;
            margin-left: 10%;
        }
        .menu > ul > li {
            display:inline-block;
            margin: 0%;
            padding: 0%;
            border-style: hidden;
            font-size: 400%;
        }
        #admin  {
            padding-right: 0%;
            padding-left: 400px;
        }
        .modal-header, h4, .close {
            background-color: lightgray;
            color:black !important;
            text-align: center;
            font-size: 30px;
        }

        p.lucida{
            font-family: "Source Code Pro";
            font-size: x-large;
            font-weight: bold;
            padding-top: 10px;
        }

    </style>
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
        $(document).ready(function(){
            $("#myBtn2").click(function(){
                $("#myModal2").modal();
            });
        });
    </script>
    </head>
    <body style="background-image: url('images/3x.jpg')">

        <nav class="navbar navbar-default" style="background-color:#4682B4;">
        <div class="container-fluid">
            <div class="navbar-header">
                <p class="lucida">Online Knowledge Center (OKC)</p>
            </div>
        </div>
        </nav>

        <?php
            if(isset($_REQUEST['q'])) {
        ?>
        <div style="text-align:right">
            <label>
                <?php
                    if (isset($_REQUEST['q']) && $_REQUEST['q'] == 1) {
                    echo "<span style='color:red;'>Incorrect Email Id or Password</span>";
                    }
                    if (isset($_REQUEST['q']) && $_REQUEST['q'] == 2) {
                    echo "<span style='color:red;'>Incorrect Username or Password</span>";
                    }
                ?>
            </label>
        </div>
        <?php
            }
        ?>
        <div class="menu">
            <ul>
                <li id="student"><a href="#" id="myBtn2"><span class="glyphicon glyphicon-user"></span> Student login</a></li>
                <li id="admin"><a href="#" id="myBtn"><span class="glyphicon glyphicon-user"></span> Admin login</a></li>
            </ul>
        </div>
        <div class="modal modal-wide" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog ezCusTrans">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4><span class="glyphicon glyphicon-lock"></span>Admin login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="admin_validate.php" method="get">
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="password" class="form-control" id="psw" name="password" placeholder="Enter password" required>
                        </div>
                        <br>
                        <button type="submit"class="btn btn-block btn-primary" style="background-color: lightgray; color: black">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-wide" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog ezCusTrans">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4><span class="glyphicon glyphicon-lock"></span>Student login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="student_validate.php" method="get">
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="password" class="form-control" id="psw" name="password" placeholder="Enter password" required>
                        </div>
                        <br>
                        <button type="submit"class="btn  btn-primary btn-block" style="color: black; background-color: lightgray">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
