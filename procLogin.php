<?php
require_once("modelo/Login.php");
$login = new Login();
$login->setNome($_POST['nomeUser']);
$login->setSenha($_POST['senha']);
header("Location: home.php");
?>
