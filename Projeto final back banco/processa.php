<?php
include 'connect.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$senha = $_POST['senha'];
$tipo = 1;
$data = "hoje";
$path = "caminho";

$sql = "INSERT INTO cliente values (default,'$nome','$email','$fone','$senha','$tipo','$data','$path')";
$result = mysqli_query($con,$sql);

//var_dump($result);

if($result){
    echo "Dados cadastrados com sucesso!!";
}else{
    echo "Error se lascou";
}

?>