<?php 
    include 'conexao.php';
    session_start();
    // Aqui iremos mudar a senha do usuário, caso ele exista se ele não existir retornamos o erro;

    if (isset($_POST['ChangePass'])) {
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $sql = "UPDATE users SET email = '$email', password = '$senha' WHERE email = '$email'";

        $result = mysqli_query($conexao, $sql);

        if ($result) {
            $_SESSION['msg'] = "Senha atualizada com sucesso!";
            header('Location: index.php');
        } else {
            $_SESSION['msg'] = "Erro ao atualizar senha do usuário. Por favor, tente novamente.";
        }
    }
?>