
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>De Gokkers</title>
</head>
<body>
<?php include('server.php'); ?>
<header>
    <h1>De Gokkers</h1>


</header>
<div class="download">
    <a href="./program/DeGokkers.exe">--> Download here <--</a>
</div>

<h2>Home Page</h2>

<div class="content">

    <?php if(isset($_SESSION['succes'])) : ?>
    <div class="error succes">
        <h3>
            <?php
            echo $_SESSION['succes'];
            unset ($_SESSION['succes']);
            ?>
        </h3>
    </div>
    <?php  endif ?>

    <?php if(isset($_SESSION['email'])) : ?>
    <p>welcome <?php echo $_SESSION['email'] ;?></p>
    <p><a href="main.php?logout='1'">logout</a></p>
    <?php  endif ?>

</div>


<div class="video">

    <p>click on the video for more info about this game </p>

    <video
            width="700" height="400" controls
            src="./video/DeGokkersVideo.mp4">
    </video>

    <p>Screenshots</p>
</div>


<div class="instructions">


    <div class="instructions1">

        <img src="img/program.png" alt="#">



    </div>



    <div class="instructions2">

        <img src="img/settings.png" alt="#">

    </div>



</div>


</body>
</html>