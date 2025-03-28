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
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <h3 class="text-light"><?= $_SESSION['user_nome'];?></h3>
            <a href="Logout.php" class="navbar-brand btn btn-danger">Sair</a>
        </div>
    </nav>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Cadastro de Atividades
                            <a href="dashboard.php" class="btn btn-danger float-end">Voltar</a>
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="atividade.php" method="post">
                            <div class="mb-3">
                                <label>Nome da Atividade:</label>
                                <input type="text" name="nome" id="nome" placeholder="Informe o Nome da Atividade" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Descrição:</label>
                                <input type="text" name="descricao" id="descricao" placeholder="Descreva a atividade" class="form-control" required>
                            </div>

                            <button type="submit" name="SendNewAtivity" id="btnEnviar" class="btn btn-primary">Criar Atividade</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>