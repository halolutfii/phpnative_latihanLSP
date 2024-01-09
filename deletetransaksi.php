<?php
require("koneksi.php");
$koneksi->connect();

$id = $_GET["id"];
$cmd = "delete from transaksi where id_transaksi = '$id'";
    
    $res = $koneksi->query($cmd);

    if($res){
        header("Location: datatransaksi.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }

    $koneksi->disconnect();