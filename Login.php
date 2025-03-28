<?php 
    include 'conexao.php';
    session_start();

    $dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $query = "SELECT id, nome, email, password FROM users WHERE email = '{$dataForm['email']}' OR nome = '{$dataForm['email']}'";
    $result = $conexao->query($query);
    
    if ($result -> num_rows > 0) {
      $dataBD = $result->fetch_assoc();
      if (password_verify($dataForm['senha'], $dataBD['password'])) {
        $_SESSION['user_id'] = $dataBD['id'];
        $_SESSION['user_nome'] = $dataBD['nome'];
        $_SESSION['user_email'] = $dataBD['email'];
        header("Location: dashboard.php");
      } else {
        header('Location: index.php');
      }
    }
?>