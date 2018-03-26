<?php
    session_start();
    $email = "";
    $password_1 = "";
    $password_2 = "";
    $errors = array();
    // connect to the database

    $db = mysqli_connect('localhost' , 'root' , '' , 'degokkers');

    // if the register button is clicked
    if(isset($_POST['register'])){
       $email = mysqli_real_escape_string($db, $_POST['email']);
       $password_1 =  mysqli_real_escape_string($db, $_POST['password_1']);
       $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        // ensure that form fields are filled properly
        if (empty($email)){
            array_push($errors, "Email is required");
        }
        if (empty($password_1)){
            array_push($errors, "Password is required");
        }

        if ($password_1 != $password_2){
            array_push($errors, "The two passwords do not match");
        }

        // if there are no errors save user to database
        if (count($errors) == 0){
            $password = md5($password_1); // encrypt password before storing in database
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['email'] = $email;
            $_SESSION['succes'] = "You are now logged in";
            header('location: main.php');

        }

    }

    // log user in from login

   if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password =  mysqli_real_escape_string($db, $_POST['password1']);

        if (empty($email)){
            array_push($errors, "Email is required");
        }
        if (empty($password)){
            array_push($errors, "Password is required");
        }

       if(count($errors) == 0){

           $password = md5($password); //encrypt password before comparing with that from database
           $query = "SELECT * from users WHERE email ='$email' AND password ='$password'";
           $result = mysqli_query($db , $query);
           if (mysqli_num_rows($result)== 1){
               // log user in
               $_SESSION['email'] = $email;
               $_SESSION['succes'] = "You are now logged in";
               header('location: main.php');
           }else{
               array_push($errors, "Wrong email/password combination");
               // header('location: index.php');
           }
       }
    }
//
//    if(count($errors) == 0){
//
//        $passwordT = md5($password); //encrypt password before comparing with that from database
//        $query = "SELECT * from users WHERE email ='$email' AND password ='$passwordT'";
//        $result = mysqli_query($db , $query);
//        if (mysqli_num_rows($result)== 1){
//            // log user in
//            $_SESSION['email'] = $email;
//            $_SESSION['succes'] = "You are now logged in";
//            header('location: main.php');
//        }else{
//            array_push($errors, "Wrong email/password combination");
//           // header('location: index.php');
//        }
//    }



    // logout

    if(isset ($_GET['logout'])){
        session_destroy();
        unset($_SESSION['email']);
        header('location: index.php');
    }
?>