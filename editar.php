<!doctype html>
<html lang="pt-br">
    <head>
        <title>Edição de Usuário</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <fieldset>
            <legend>Editar Usuário</legend>
            <form action="editUser.php" method="post">
                <label for="id">ID:</label>
                <input type="text" name="id" id="id" />
                <button> Buscar ID</button>
                <br />
                <br />
                <label for="nomeUser">Usuário</label>
                <br />
                <input type="text" name="nomeUser" id="nomeUser" required />
                <br />
                <br />
                <label for="senha">Nova Senha</label>
                <br />
                <input type="password" name='senha' id="senha" required />
                <br />
                <br />
                <label for="csenha">Repita a Senha</label>
                <br />
                <input type="password" name="csenha" id="csenha" required />
                <br />
                <br />
                <input type="submit" value="Editar" />
            </form>
        </fieldset>
    </body>
</html>
