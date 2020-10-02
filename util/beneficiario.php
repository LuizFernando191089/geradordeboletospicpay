<?php
$conexao = mysqli_connect('localhost', 'root', '', 'pic');
$beneficiario = $_POST['beneficiario'];
$query = "INSERT INTO `beneficiario`(`name`) VALUES  ('" . $beneficiario . "') ";

$resultado = mysqli_query($conexao, $query);


if ($resultado) {

    header("Location:../index.php?m=2");
}
