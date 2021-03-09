<!doctype html>
<html lang='pt-br'>
    <head>
        <title>Meu sistema</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <fieldset>
            <legend>Login do usuário</legend>
            <form action="procLogin.php" method="post">
                <label for="nomeUser">Usuário</label>
                <br />
                <input type="text" name="nomeUser" id="nomeUser" required />
                <br />
                <br />
                <label for="senha">Senha</label>
                <br />
                <input type="password" name="senha" id="senha" required />
                <br />
                <br />
                <input type="submit" value="Entrar" />
            </form>
        </fieldset>
    </body>
</html>
