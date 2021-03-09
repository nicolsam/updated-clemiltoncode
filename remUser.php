<?php
require_once("controle/ControleLogin.php");
$controle = new ControleLogin();
if($controle->removerLogin($_POST['id'])){
    header("Location: home.php");
}else{
    echo "[-] Erro ao remover o usuário";
}

?>
