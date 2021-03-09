<?php
require_once("controle/ControleLogin.php");
$login = new Login();
$login->setNome($_POST['nomeUser']);
$login->setSenha(sha1($_POST['senha']));
$controle = new ControleLogin();
if($controle->cadastrarLogin($login)){
    header("Location: home.php");
}else{
    echo "[-] Erro ao inserir usuário.";
}

?>
