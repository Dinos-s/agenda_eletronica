<?php
    session_start();
    include 'conexao.php';
    // Aqui implementa a criação de um novo usuário no sistema;
    // Pegando o nome, email e senha do formulário, e jogando diretamene no banco;
    // Antes de enviar, a senha é criptografada usando password_hash;

    if(isset($_POST['SendNewUser'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (nome, email, password) VALUES ('$nome', '$email', '$senha')";

        $result = mysqli_query($conexao, $sql);

        if ($result) {
            $_SESSION['msg'] = "Usuário cadastrado com sucesso!";
            header('Location: index.php');
        } else {
            $_SESSION['msg'] = "Erro ao cadastrar usuário. Por favor, tente novamente.";
        }
    }
?>

