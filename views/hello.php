<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hello!</title>
    </head>
    <body>
        <h1>Hello!</h1>
        <form action="/pessoas" method="post">
            <label for="pessoa">Nome</label>
            <input type="text" name="nome">

            <button type="submit">Cadastrar pessoa</button>
        </form>

        <hr>
        <?php foreach ($pessoas as  $pessoa): ?>
            <ul>
                <li><?php echo $pessoa->nome; ?></li>
            </ul>
        <?php endforeach; ?>
    </body>
</html>
