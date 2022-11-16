<?php
include 'connect.php';
?>
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                    <div class="container-fluid">
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
                    <h1 class="mt-4">Listagem de Produtos</h1>
                    <p>Produtos cadastrado no banco de dados.</p>

                    <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#Id</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Descricao</th>
                                <th scope="col">Preco</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Opcoes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM produto";
                                    $result = mysqli_query($con,$sql);
                                    if($result){
                                       while($row = mysqli_fetch_assoc($result)){
                                        $id = $row['id_prod'];
                                        $produto = $row['nome_prod'];
                                        $descricao = $row['descricao'];
                                        $preco = $row['preco'];
                                        $tipo = $row['tipo'];

                                        echo '<tr>
                                                <td>'.$id . '</td>
                                                <td>'.$produto . '</td>
                                                <td>'.$descricao . '</td>
                                                <td>'.$preco . '</td>
                                                <td>'.$tipo . '</td>
                                                <td> 
                                                <button class="btn btn-danger">
                                                <a class="text-light" href="delete_prod.php?deleteid='. $id .' "> <i class="bi bi-x-square-fill"></i> </a> 
                                                </button>
                                                </td>
                                                </tr>';
                                       }
                                    }
                                ?>
                            </tbody>
                            </table>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
