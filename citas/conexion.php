<?php
function conectar(){
    $user="root";
    $pass="Luchito2724";
    $server="localhost:3307";
    $db="informacion2";
    $con=mysql_connect($server,$user,$pass)or die ("erro al conectar".mysql_error);
    mysql_select_db($db,$con);
    
    return con;
    

}

?>