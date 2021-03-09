<?php
require_once("controle/ControleLogin.php");
$controle = new ControleLogin();
$login = new Login();
$login->setId($_POST['id']);
$login->setNome($_POST['nomeUser']);
$login->setSenha(sha1($_POST['senha']));
if($controle->editarLogin($login->getId(),$login)){
    header("Location: home.php");
}else{
    echo "[-] Erro ao atualizar usuário";
}

?>
