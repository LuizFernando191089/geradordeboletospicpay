<?php
$conexao = mysqli_connect('localhost', 'root', '', 'pic');
$query = "SELECT * FROM `beneficiario` ";
$resultado = mysqli_query($conexao, $query);
$beneficiarios = mysqli_fetch_all($resultado);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geração de Boleto</title>
    <link rel="stylesheet" href="css/bootstrap4.css">
    <link rel="stylesheet" href="font/css/font-awesome.css">
    <script src="js/jquey.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        .form-control {
            width: 25%;
        }

        ;
    </style>
</head>

<body>


    <div class="container">
        <div class="container-fluid mt-5">
            <div class="card">

                <div class="card-title text-center mt-3"><b>Informações do Boleto</b></div>

                <div class="card-body">
                    <?php
                    if (isset($_GET['m']) && $_GET['m'] == '1') {
                        echo '<div class="alert alert-danger" role="alert">
                        Por favor preencha todos os dados do boleto, para que possa efetuar sua doação :)
                    </div>';
                    }

                    if (isset($_GET['m']) && $_GET['m'] == '2') {
                        echo '<div class="alert alert-success" role="alert">
                        Beneficiário Adicionado com sucesso!!
                    </div>';
                    }

                    ?>

                    <form method="POST" action="boleto.php">
                        <center>
                            <label><b>Beneficiário:</b></label> <a type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></a>
                            <select name="beneficiario" class="form-control">
                                <option value="2" disabled>Escolha o Benificiario</option>
                                <?php

                                foreach ($beneficiarios as $beneficos) {
                                    var_dump($beneficos);
                                    echo "<option value=" . $beneficos[0] . " >" . $beneficos[1] . "</option>";
                                }

                                ?>
                            </select>
                            <label><b>Email :</b></label> <input name="email" type="email" class="form-control">
                            <label><b>Nome :</b></label> <input name="nome" class="form-control">
                            <label><b>Valor:</b></label> <input name="valor" type="number" class="form-control">
                        </center>
                        <br>
                        <center>
                            <button type="submit" class="btn btn-success">Gerar</button>
                            <button type="reset" class="btn btn-danger">Limpar</button>
                        </center>

                    </form>

                </div>
            </div>

        </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Um Beneficiário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="util/beneficiario.php">
                        <center>
                            <label><b>Beneficiário :</b></label> <input name="beneficiario" class="form-control" style=" width: 55%;">
                            <small class="text-danger"><b>Nick do PicPay</b></small>
                            <br>

                            <button type="submit" class="btn btn-success">Adicionar</button>
                            <button type="reset" class="btn btn-danger">Limpar</button>
                        </center>
                        <hr>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>

</html>