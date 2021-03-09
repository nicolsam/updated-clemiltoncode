<?php
session_start();
require_once("controle/ControleLogin.php");
if(isset($_SESSION['user'])){
    // requisitar a home
    require_once("home.php");
}else{
    require_once("login.php");
}
?>
