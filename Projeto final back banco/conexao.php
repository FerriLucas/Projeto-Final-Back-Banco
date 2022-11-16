<?php

$host = "localhost";
$username = "root";
$password = "admin4321";
$database = "projeto";

$con = new mysqli($host,$username,$password,$database);

if(!$con){
    echo "Erro ao conectar no banco de dados";
   
}else{
    echo "Conectado com sucesso!!";
}

