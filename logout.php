<?php
 session_start();

 require "includes/functions.php";


 //make sure the user is logged in
 if(isLoggedIn()){
    //delete the user's session data
    logout();
    //redirect user back to login page
    header('Location: /login.php');
    exit;
 } else {
    //redirect back to login page
    header('Location: /login.php');
    exit;
 }
?>