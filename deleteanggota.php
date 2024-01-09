<?php
require("koneksi.php");
$koneksi->connect();

$id = $_GET["id"];
$cmd = "delete from tbanggota where idanggota = '$id'";

    $res = $koneksi->query($cmd);

    if($res){
        header("Location: dataanggota.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }

    $koneksi->disconnect();