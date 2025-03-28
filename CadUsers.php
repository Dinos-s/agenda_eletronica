<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>VAGGON - Agenda Eletrônica</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mb-0">Agenda Eletrônica</h2>
                    </div>
                    <div class="card-body">
                        <form action="session.php" method="post" id="registriForm">
                            <h3 class="text-center mb-4">Cadastro de Usuário</h3>
                            
                            <div class="mb-3">
                                <label class="form-label">Nome:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" name="nome" id="nome" placeholder="Informe seu Nome" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" id="email" placeholder="Informe seu email" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Senha:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-key"></i></span>
                                    <input type="password" name="senha" id="senha" placeholder="Sua Senha" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirmar Senha:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                                    <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirme sua Senha" class="form-control" required>
                                </div>
                                <div id="senha-error" class="alert alert-danger mt-2" style="display: none;">
                                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                    <span id="senha-error-text"></span>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="SendNewUser" id="btnEnviar">Cadastrar</button>
                            </div>
                        </form>

                        <div class="text-center mt-3">
                            <p class="small text-muted">
                                Caso já tenha cadastro, clique <a href="./index.php" class="text-primary">aqui</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#registriForm').on('submit', function(e) {
                // Limpa a mensagem de erro
                $('#senha-error-text').text('');
                $('#senha-error').hide();
                
                // Pega os valores dos campos senha e confirmar_senha
                var senha = $('#senha').val();
                var confirmarSenha = $('#confirmar_senha').val();
                
                // Verifica se as senhas são compatíveis
                if (senha !== confirmarSenha) {
                    // Evita o envio padrão do formulário
                    e.preventDefault();
                    
                    // Mostra a mensagem de erro
                    $('#senha-error-text').text('As senhas não coincidem');
                    $('#senha-error').show();
                }
            })
            
            // Verifica em tempo real se as senhas são compatíveis
            $('#confirmar_senha').on('input', function() {
                var senha = $('#senha').val();
                var confirmarSenha = $(this).val();
                
                if (senha !== confirmarSenha) {
                    $('#senha-error-text').text('As senhas não coincidem');
                    $('#senha-error').show();
                } else {
                    $('#senha-error-text').text('');
                    $('#senha-error').hide();
                }
            })
        })
    </script>
</body>
</html>