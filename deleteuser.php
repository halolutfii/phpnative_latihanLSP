<?php
require("koneksi.php");
$koneksi->connect();

$id = $_GET["id"];
$cmd = "delete from tb_user where iduser = '$id'";
    
    $res = $koneksi->query($cmd);

    if($res){
        header("Location: datauser.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }

    $koneksi->disconnect();