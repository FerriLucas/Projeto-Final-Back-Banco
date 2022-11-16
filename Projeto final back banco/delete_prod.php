<?php
include 'connect.php';

if(isset($_GET['deleteid'])){

    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `produto` WHERE id_prod=$id";
    $result = mysqli_query($con,$sql);

    if($result){
        //echo "PRODUTO DELETADO COM SUCESSO";
        header('location:lista_prod.php');
    }else{
        echo "ERROR SE LASCOU!!!";
    }
}
?>