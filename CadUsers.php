<?php 
    session_start();
?>
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
    <form action="session.php" method="post">
        <h1>Cadastro de Usuário</h1>
        
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Informe seu Nome" required>

        <label>Email:</label>
        <input type="email" name="email" id="email" placeholder="Informe seu email" required>

        <label>Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Sua Senha" required>

        <button type="submit" name="SendNewUser" id="btnEnviar">Entrar</button>
    </form>
</body>
</html>