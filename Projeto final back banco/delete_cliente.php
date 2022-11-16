<?php
include 'connect.php';

if(isset($_GET['deleteid'])){

    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `cliente` WHERE id=$id";
    $result = mysqli_query($con,$sql);

    if($result){
        //echo "PRODUTO DELETADO COM SUCESSO";
        header('location:lista_cliente.php');
    }else{
        echo "ERROR SE LASCOU!!!";
    }
}
?>