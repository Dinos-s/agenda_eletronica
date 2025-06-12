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
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h2 class="mb-0">Agenda Eletrônica</h2>
                    </div>
                    <div class="card-body">
                        <form action="Login.php" method="post">
                            <h3 class="text-center mb-4">Login</h3>
                            
                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu email" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Senha:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Sua Senha" required>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="SendLogin" id="btnEnviar">
                                    Entrar
                                </button>
                            </div>
                        </form>

                        <div class="text-center mt-3">
                            <p class="small text-muted">
                                Caso não tenha cadastro, clique <a href="./CadUsers.php" class="text-primary">aqui</a>
                            </p>
                            <p class="small text-muted">
                                Esquecia a senha, clique <a href="./EsqueciSenha.php" class="text-primary">aqui</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>