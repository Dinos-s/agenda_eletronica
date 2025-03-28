<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>VAGGON - Agenda Eletrônica</title>
</head>
<body>
    <h1>Agenda Eletrônica</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <span id="msg"></span>

    <form action="Login.php" method="post">
        <h1>Login</h1>
        
        <label for="nome">Email:</label>
        <input type="email" name="email" id="email" placeholder="Informe seu email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Sua Senha" required>

        <button type="submit" name="SendLogin" id="btnEnviar">Entrar</button>

        <p class="erro">Caso não tenha, faça o cadastro, clique <a href="./CadUsers.php">aqui</a> e faça sua consulta!</p>
    </form>
</body>
</html>