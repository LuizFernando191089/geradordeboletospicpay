<?php

// Verficação para não passar sem preencher os dados !!!
if (($_POST['nome'] == "") || ($_POST['email'] == "") || ($_POST['valor'] == "")) {


    header("Location:index.php?m=1");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geração de Boleto</title>
    <link rel="stylesheet" href="css/bootstrap4.css">
    <style>
        .form-control {
            width: 25%;
        }

        ;
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center">
        <div class="container-fluid mt-5">

            <div class="card" style="width: 20rem;">
                <div class=" m-2">
                    <img src="http://chart.apis.google.com/chart?cht=qr&chl=https://picpay.me/<?php echo $_POST['beneficiario'] ?>/<?php echo $_POST['valor'] ?>&chs=150x150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"><b>Boleto</b></h4>
                        <p class="card-text"><label><b>Nome:&nbsp;</b></label><b><?php echo $_POST['nome'] ?></b></p>
                        <p class="card-text"><label><b>Email:&nbsp;</b></label><b><?php echo $_POST['email'] ?></b></b></p>
                        <p class="card-text"><label><b>Valor:&nbsp;</b></label><b>R$<?php echo $_POST['valor'] ?>Reais</b></b></p>

                    </div>
                </div>

            </div>
            <br>
            <a href="index.php" class="btn btn-info"> Voltar</a>
            <br>
            <br>
            <div class="alert alert-success" role="alert">
                Obrigado pela doação :)<br>
                Valor: R$<?php echo $_POST['valor'] ?>Reais
            </div>
        </div>

</body>

</html>