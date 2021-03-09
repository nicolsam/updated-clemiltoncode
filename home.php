<!doctype html>
<html lang="pt-br">
    <head>
        <title>Home do Sistema</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Senha</th>
                <th>Editar</th>
                <th>Remover</th>
            </tr>
            <?php
                require_once("controle/ControleLogin.php");
                $controle = new ControleLogin();
                $lista = $controle->selecionarTodos();
                for($i = 0; $i < sizeof($lista); $i++){
                    echo "<tr>";
                    echo "<td>{$lista[$i]->getId()}</td>";
                    echo "<td>{$lista[$i]->getNome()}</td>";
                    echo "<td>{$lista[$i]->getSenha()}</td>";
                    echo "<td><a href='editar.php&id={$lista[$i]->getId()}'>Editar</a></td>";
                    echo "<td><a href='remover.php&id={$lista[$i]->getId()}'>Remover</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <button><a href="cadastrar.php">Novo Usuário</a></button> 
        <button><a href="editar.php">Editar</a></button>
        <button><a href="remover.php">Remover</a></button>
        <button><a href="sair.php">Sair</a></button>
    </body>
</html>
