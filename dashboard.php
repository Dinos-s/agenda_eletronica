<?php 
    session_start();
    require "conexao.php";

    // Verificar se o usuário está logado
    if(!isset($_SESSION['user_id'])) {
        $_SESSION['msg'] = "<div class='alert alert-danger'>Você precisa estar logado para acessar esta página!</div>";
        header("Location: index.php");
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
    <h1>Dashboard</h1>
    <a href="Logout.php">Sair</a>

    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <span id="msg"></span>

    <a href="criar-atividade.php" class="btn btn-primary float-end">Criar Atividade</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Atividade</th>
                <th>Descrição</th>
                <th>Data de Ínicio</th>
                <th>Data de Finalização</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $listTasks = "SELECT * FROM atividades WHERE user_id = '{$_SESSION['user_id']}'";
                $atividades = mysqli_query($conexao, $listTasks);

                if (mysqli_num_rows($atividades) > 0){
                    foreach ($atividades as $atividade){
                        extract($atividade);
            ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $nome ?></td>
                <td><?= $descricao ?></td>
                <td><?= date('d/m/Y H:i:s', strtotime($createdAt)) ?></td>
                <td>
                    <?php 
                    if (!empty($updatedAt) && $updatedAt != '0000-00-00 00:00:00') {
                        echo date('d/m/Y H:i:s', strtotime($updatedAt));
                    } else {
                        echo '<span class="text-muted">Não atualizado</span>';
                    }
                    ?>
                </td>
                <td><?= $status ?></td>
                <td>
                    <a href="view-atividade.php?id=<?= $atividade['id'] ?>" class="btn btn-primary btn-sm">Visualizar</a>
                    <a href="edit-atividade.php?id=<?= $atividade['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <form action="atividade.php" method="post" class="d-inline">
                        <button type="submit" value="<?= $atividade['id'] ?>" name="DeleteAtivity" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</button>
                    </form>
                </td>
            </tr>
            <?php 
                    }
                } else {
                    echo '<h5>Numnha Tarefa Encontrada!</h5>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>