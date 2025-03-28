<?php 
    session_start();
    require "conexao.php";

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
    <h2>Edição de Atividades</h2>
    <h2><a href="dashboard.php" class="btn btn-danger">Voltar</a></h2>
    <?php 
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM atividades WHERE id = '$id'";

            $result = $conexao->query($query);

            if ($result->num_rows > 0) {
                $userData = mysqli_fetch_assoc($result);
    ?>
    <form action="atividade.php" method="post"> 
        <input type="hidden" name="id" value="<?= $userData['id'] ?>">
    
        <label>Nome da Atividade:</label>
        <input type="text" name="nome" id="nome" placeholder="Informe o Nome da Atividade" value="<?= $userData['nome'] ?>" required>

        <label>Descrição:</label>
        <input type="text" name="descricao" id="descricao" placeholder="Descreva a atividade" value="<?= $userData['descricao'] ?>" required>

        <label>Status:</label>
        <select class="form-select" id="status" name="status">
            <option value="pendente" <?= $atividade->status == 'pendente' ? 'selected' : '' ?>>Pendente</option>
            <option value="concluída" <?= $atividade->status == 'concluída' ? 'selected' : '' ?>>Concluída</option>
            <option value="cancelada" <?= $atividade->status == 'cancelada' ? 'selected' : '' ?>>Cancelada</option>
        </select>

        <button type="submit" name="EditAtivity" id="btnEnviar">Editar Atividade</button>
    </form>
    <?php
            } else {
                echo "<h5>Tarefa não encontrada!</h5>";
            }
        }
    ?>
</body>
</html>