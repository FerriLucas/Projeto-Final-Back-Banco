<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PROJETO</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="./css/custom.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Sistema ProgWeb</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.html">Clientes</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="produtos.html">Produtos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Sair</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    </div>
                </nav>
                <!-- Page content-->

                <div class="jumbotron light mb-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                            <h1 class="display-3">Sistema Prog Web</h1>     
                            <p>Sistema completo com Bootstrap, PHP e MySQL</p>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-end">
                                <h3>Olá Lucas</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <h1 class="mt-4">Cadastro de Cliente</h1>
                    <p>Insira os dados corretamente.</p>

                    <form action="processa.php" method="POST">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome">
                          </div>

                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                          <label for="senha" class="form-label">Password</label>
                          <input type="password" name="senha" class="form-control" id="senha">
                        </div>

                        <div class="mb-3">
                            <label for="fone" class="form-label">Telefone</label>
                            <input type="number" name="fone" class="form-control" id="fone">
                          </div>

                        <button type="submit" name="botaoEnviar" class="btn btn-primary">Enviar</button>
                      </form>
                    
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
