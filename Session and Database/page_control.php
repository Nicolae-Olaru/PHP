<?php

if( isset($_POST["home_button"]) )
{
    header("Location: home.php");
}
if( isset($_POST["register_button"]) )
{
    header("Location: register.php");
}
if( isset($_POST["login_button"]) )
{
    header("Location: login.php");
}


?>