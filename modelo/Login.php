<?php
class Login{
    private $id;
    private $nome;
    private $senha;

    public function getId(){
        return $this->id;
    }
    public function setId($i){
        $this->id = $i;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($s){
        $this->senha = $s;
    }
}
?>
