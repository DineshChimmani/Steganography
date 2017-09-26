<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tutorial system</title>
        <meta charset="utf-8">
        <style>
            #myCarousel {
                padding-top: 45px;
            }
            .carousel-inner > .item > img   {
                width: 100%;
                margin: auto;
                height: 50%;
            }
        </style>
    </head>
    <body>
        <?php
            include "header.php";
        ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/7.jpg" style="width: 50%; height: 50%">
                </div>
                <div class="item">
                    <img src="images/8.jpg" style="width: 50%; height: 50%">
                </div>
            </div>
        </div>
    </body>
</html>
