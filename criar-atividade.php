<?php 
    session_start();

    // Verificar se o usuário está logado
    if(!isset($_SESSION['user_id'])) {
        $_SESSION['msg'] = "<div class='alert alert-danger'>Você precisa estar logado para acessar esta página!</div>";
        header("Location: login.php");
        exit();
    }
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
    <form action="atividade.php" method="post">
        <h1>Cadastro de Atividades</h1>
        
        <label>Nome da Atividade:</label>
        <input type="text" name="nome" id="nome" placeholder="Informe o Nome da Atividade" required>

        <label>Descrição:</label>
        <input type="text" name="descricao" id="descricao" placeholder="Descreva a atividade" required>

        <button type="submit" name="SendNewAtivity" id="btnEnviar">Criar Atividade</button>
    </form>
</body>
</html>