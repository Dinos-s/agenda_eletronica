<?php 
    session_start();
    include 'conexao.php';

    // Criar atividade
    if(isset($_POST['SendNewAtivity'])){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $user_id = $_SESSION['user_id'];
        
        $sql = "INSERT INTO atividades (user_id, nome, descricao, createdAt) VALUES ('$user_id','$nome', '$descricao', NOW())";

        $result = mysqli_query($conexao, $sql);

        if ($result) {
            $_SESSION['msg'] = "Atividade criada com sucesso!";
            header('Location: dashboard.php');
        } else {
            $_SESSION['msg'] = "Erro ao cadastrar atividade. Por favor, tente novamente.";
        }
    }
    
    // Editar atividade
    if (isset($_POST['EditAtivity'])) {
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $status = $_POST['status'];

        $sql = "UPDATE atividades SET nome = '$nome', descricao = '$descricao', status = '$status', updatedAt = NOW()";

        $result = mysqli_query($conexao, $sql);

        if ($result) {
            $_SESSION['msg'] = "Atividade atualizada com sucesso!";
            header('Location: dashboard.php');
        } else {
            $_SESSION['msg'] = "Erro ao atualizar atividade. Por favor, tente novamente.";
        }
    }

    // Deletar atividade
    if (isset($_POST['DeleteAtivity'])) {
        $id = $_POST['DeleteAtivity'];

        $sql = "DELETE FROM atividades WHERE id = '$id'";
        
        $result = mysqli_query($conexao, $sql);

        if ($result) {
            $_SESSION['msg'] = "Atividade deletada com sucesso!";
            header('Location: dashboard.php');
        } else {
            $_SESSION['msg'] = "Erro ao deletar atividade. Por favor, tente novamente.";
        }
    }
?>