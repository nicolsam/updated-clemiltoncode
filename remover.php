<!doctype html>
<html lang="pt-br">
    <head>
        <title>Remoção de Usuário</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <fieldset>
            <legend>Remoção de Usuário</legend>
            <form action="remUser.php" method="post">
                <label for="id">ID</label>
                <input type="number" name="id" id="id" required />
                <button>Buscar</button>
                <br/>
                <br />
                <span>Usuário:  </span>
                <input type="submit" value="Remover" />
            </form>
        </fieldset>
    </body>
</html>
