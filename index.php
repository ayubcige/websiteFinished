<?php include('server.php') ?>
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


<header>

<div class="title">

    <h1>De Gokkers</h1>
</div>

<div class="login">



</div>

</header>

<div class="login1">

    <span><p>Login</p></span>

    <form method="post" action="index.php">
        <?php include('errors.php')?>
        <div class="input-group1">
            <label for="">Email</label>
            <input type="email" name="email">
        </div>

        <div class="input-group1">
            <label for="">Password</label>
            <input type="password" name="password1">
        </div>

        <div class="input-group1">
            <button type="submit" name="login" class="btn1">login</button>
        </div>

    </form>
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

<div class="sign-up">
    <span><p>Register</p></span>


    <form method="post" action="index.php">

        <?php include('errors.php')?>
        <div class="input-group1">
            <label for="">Email</label>
            <input type="email" name="email" value="<?php echo $email;?>">

        </div>

        <div class="input-group1">
            <label for="">Password</label>
            <input type="password" name="password_1">

        </div>

        <div class="input-group1">
            <label for="">confirm password</label>
            <input type="password" name="password_2">

        </div>

        <div class="input-group1">

            <button type="submit" name="register" class="btn1">Register</button>

        </div>





    </form>

</div>


</body>
</html>