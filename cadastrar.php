<!doctype html>
<html lang="pt-br">
    <head>
        <title>Cadastro de novo usuário</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <fieldset>
            <legend>Cadastro de Novo Usuário</legend>
            <form action="cadUser.php" method="post">
                <label for="nomeUser">Usuário</label>
                <br />
                <input type="text" name="nomeUser" id="nomeUser" required />
                <br />
                <br />
                <label for="senha">Senha</label>
                <br />
                <input type="password" name='senha' id="senha" required />
                <br />
                <br />
                <label for="csenha">Repita a Senha</label>
                <br />
                <input type="password" name="csenha" id="csenha" required />
                <br />
                <br />
                <input type="submit" value="Cadastrar" />
            </form>
        </fieldset>
    </body>
</html>
