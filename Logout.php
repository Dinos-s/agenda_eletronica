<?php 
    unset($_SESSION['user_nome'], $_SESSION['user_email']);
    $_SESSION['msg'] = "<p style='color: green;'>Logout realizado com sucesso!</p>";
    header("Location: index.php");
?>