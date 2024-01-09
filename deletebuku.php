<?php
require("koneksi.php");
$koneksi->connect();

$id = $_GET["id"];
$cmd = "delete from tb_buku where id_buku = '$id'";
    
    $res = $koneksi->query($cmd);

    if($res){
        header("Location: databuku.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }

    $koneksi->disconnect();