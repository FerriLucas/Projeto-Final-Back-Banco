<?php
include 'connect.php';

$nome = $_POST['nome'];
$descricao = $_POST['desc'];
$preco = $_POST['preco'];
$tipo = $_POST['tipo'];

$sql = "INSERT INTO produto (nome_prod,descricao,preco,tipo) values ('$nome','$descricao','$preco','$tipo')";
$result = mysqli_query($con,$sql);

if($result){
	echo "dados cadastrados com sucesso!!";
}else{
	echo "Erro ao conectar ao banco de dados";
}

?>
