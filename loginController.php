<?php
/**
 * Created by PhpStorm.
 * User: Bas
 * Date: 27-8-2019
 * Time: 16:16
 */

require 'config.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST' ) {
    header('location: index.php');
    exit;
}



if ( $_POST['type'] == 'register' ) {


    //variabelen met email, password
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


//password hashen
    $passwordhashed = password_hash($password, PASSWORD_DEFAULT);



    //checken of het een echt email is.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "This is no valid email";
        header("location: register.php?msg=$message");
        exit;
    }


    $count=$db->prepare("select * from users where email=:email");

    $count->bindParam(":email",$email);

    $count->execute();

    $no=$count->rowCount();
    //als de email bestaad krijg je deze bericht
    if($no >0 ){
        $message = "Email bestaat al!";
        echo "<script type='text/javascript'>alert('$message');</script>";

        header("location: register.php?msg=$message");
        exit;
    }

    //checken of passwords overeen komen met elkaar
    if ($_POST['password'] != $_POST['passwordconfirm']) {

        $message = "Wachtwoord komt niet overeen!";
        echo "<script type='text/javascript'>alert('$message');</script>";

    }
    // hier check die of de wachtwoord niet leeg is
    if($_POST['password'] == ""){
        $msg = "Wachtwoord mag niet leeg zijn!";
        header("location: register.php?msg=$msg");

    }
    else {
        //Checkt of password met elkaar overeenkomen, zoja dan gaat hij door.
        if ($_POST['password'] == $_POST['passwordconfirm']) {

            $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
            $prepare = $db->prepare($sql);
            $prepare->execute([
                ':username' => $username,
                ':password' => $passwordhashed,
                ':email' => $email
            ]);

            $msg = "Account is succesvol aangemaakt!";
            header("location: login.php?msg=$msg");
            exit;
        } else {
            $messagefail = "wachtwoorden komen niet overeen!";
            header("location: register.php?msg=$messagefail");
        }
    }
}