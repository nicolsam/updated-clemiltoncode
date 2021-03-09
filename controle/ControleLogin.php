<?php
require_once("Conexao.php");
require_once("modelo/Login.php");
class ControleLogin{
	// Tratamento de Excessões
	// try ... catch ... finally
	public function cadastrarLogin($usuario){
		$conexao = new Conexao("controle/banco.ini");
		$sql = "INSERT INTO usuarios(nome,senha) VALUES(:n, :s);";
		$comando = $conexao->getPDO()->prepare($sql);
		$nome = $usuario->getNome();
		$senha = $usuario->getSenha();
		$comando->bindParam("n",$nome);
		$comando->bindParam("s", $senha);
		if($comando->execute()){
			$conexao->fecharConexao();
			return true;
		}else{
			$conexao->fecharConexao();
			return false;
		}
	}
	public function selecionarTodos(){
		$conexao = new Conexao("controle/banco.ini");
		$comando = $conexao->getPDO()->prepare("SELECT * FROM usuarios;");
		if($comando->execute()){
			$lista = $comando->fetchAll(PDO::FETCH_CLASS, "Login");
			$conexao->fecharConexao();
			return $lista;
		}else{
			$conexao->fecharConexao();
			return null;
		}
	}
	public function selecionarUm($id){
		$conexao = new Conexao("controle/banco.ini");
		$comando = $conexao->getPDO()->prepare("SELECT * FROM usuarios WHERE id=:i;");
		$comando->bindParam("i", $id);
		if($comando->execute()){
			$login = $comando->fetchAll(PDO::FETCH_CLASS, "Login");
			$conexao->fecharConexao();
			$retorno = new Login();
			$retorno->setId($login[0]->getid());
			$retorno->setNome($login[0]->getNome());
			$retorno->setSenha($login[0]->getSenha());
			return $retorno;
		}else{
			$conexao->fecharConexao();
			return null;
		}
	}
	public function removerLogin($id){
		$conexao = new Conexao("controle/banco.ini");
		if($conexao->getPDO()->exec("DELETE FROM usuarios WHERE id={$id};") > 0){
			$conexao->fecharConexao();
			return true;
		}else{
			$conexao->fecharConexao();
			return false;
		}
	}
	public function editarLogin($id,$usuario){
		$conexao = new Conexao("controle/banco.ini");
		$comando = $conexao->getPDO()->prepare("UPDATE usuarios SET nome=:n,senha=:s WHERE id=:i");
		$nome = $usuario->getNome();
		$senha = $usuario->getSenha();
		$comando->bindParam("n", $nome);
		$comando->bindParam("s", $senha);
		$comando->bindParam("i", $id);
		if($comando->execute()){
			$conexao->fecharConexao();
			return true;
		}else{
			$conexao->fecharConexao();
			return false;
		}
	}
}
?>
