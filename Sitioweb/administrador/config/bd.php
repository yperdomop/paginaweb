<?php

$host="localhost";
$bd="sitio";
$usuario="root";
$contraseña="";

try{

    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
    
} catch (exception $ex){

    echo $ex->getMessage();
}

?>