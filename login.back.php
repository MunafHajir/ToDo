<?php
session_start();
$uname = $password ="";
$uname  = !empty($_POST['username']) ? trim($_POST['username']) : null;
$passwordAttempt= !empty($_POST['password']) ? trim($_POST['password']) : null;

require_once 'database/db.php';
require_once 'database/library.php';
$pdo = Connection::make();

$sql = "select Username, Password from register where Username = :uname";

$statement = $pdo->prepare($sql);

//Bind value
$statement->bindValue(':uname', $uname);

//Statement execute
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);
// echo $user['Password'];
// echo $passwordAttempt;
//If $row is FALSE.
    if($user === false){

        die('Incorrect username and combination!');
    } else{

        // $validPassword = password_verify($passwordAttempt, $user['Password']);
        // echo $validPassword;
        //If $validPassword is TRUE, the login has been successful.
        if($passwordAttempt == $user['Password']){

            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['Username'];
            $_SESSION['logged_in'] = time();

            //Redirect to our protected page, which we called home.php
            header('Location: diary.php');
            exit;

        } else{
            //$validPassword was FALSE. Passwords do not match.
            die('Incorrect username / password combination!');
        }
    }


?>
