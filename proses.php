<?php
require("koneksi.php");
$koneksi->connect();

if(isset($_POST["add"])){
    $idbuku = $_POST["id_buku"];
    $judul = $_POST["judul_buku"];
    $pengarang = $_POST["pengarang"];
    $penerbit = $_POST["penerbit"];
    $kategori = $_POST["kategori"];

    $cmd = "INSERT INTO tb_buku 
            VALUES ('$idbuku', '$judul', '$kategori', '$pengarang', '$penerbit')";
    
    $res = $koneksi->query($cmd);

    if($res){
        header("Location: databuku.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }
}elseif(isset($_POST["edit"])){
    $idbuku = $_POST["id_buku"];
    $judul = $_POST["judul_buku"];
    $pengarang = $_POST["pengarang"];
    $penerbit = $_POST["penerbit"];
    $kategori = $_POST["kategori"];

    $cmd = "UPDATE  tb_buku SET id_buku = '$idbuku', judul_buku = '$judul', 
            pengarang = '$pengarang', penerbit = '$penerbit', kategori = '$kategori' 
            WHERE id_buku = '$idbuku' ";
    
    //echo $cmd;exit;

    $res = $koneksi->query($cmd);

    if($res){
        header("Location: databuku.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }
};

if(isset($_POST["addanggota"])){
    $id_anggota = $_POST["idanggota"];
    $nama = $_POST["nama"];
    $jk = $_POST["jeniskelamin"];
    $alamat = $_POST["alamat"];
    $sts = $_POST["status"];

    $cmd = "INSERT INTO tbanggota 
            VALUES ('$id_anggota', '$nama', '$jk', '$alamat', '$sts')";
    
    $res = $koneksi->query($cmd);

    if($res){
        header("Location: dataanggota.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }
}elseif(isset($_POST["editanggota"])){
    $id_anggota = $_POST["idanggota"];
    $nama = $_POST["nama"];
    $jk = $_POST["jeniskelamin"];
    $alamat = $_POST["alamat"];
    $sts = $_POST["status"];

    $cmd = "UPDATE tbanggota SET idanggota = '$id_anggota', nama = '$nama', 
            jeniskelamin = '$jk', alamat = '$alamat', status = '$sts' 
            WHERE idanggota = '$id_anggota' ";
    
    //echo $cmd;exit;

    $res = $koneksi->query($cmd);

    if($res){
        header("Location: dataanggota.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }
};

if(isset($_POST["adduser"])){
    $iduser = $_POST["iduser"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $password = $_POST["password"];
    $type = $_POST["type"];

    $cmd = "INSERT INTO tb_user 
            VALUES ('$iduser', '$nama', '$alamat', '$password', '$type')";
    
    $res = $koneksi->query($cmd);

    if($res){
        header("Location: datauser.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }
}elseif(isset($_POST["edituser"])){
    $iduser = $_POST["iduser"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $password = $_POST["password"];
    $type = $_POST["type"];

    $cmd = "UPDATE tb_user SET iduser = '$iduser', nama = '$nama', 
            alamat = '$alamat',  password = '$password', type = '$type' 
            WHERE iduser = '$iduser' ";
    
    //echo $cmd;exit;

    $res = $koneksi->query($cmd);

    if($res){
        header("Location: datauser.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }
};

if(isset($_POST["addtransaksi"])){
    $idtransaksi = $_POST["id_transaksi"];
    $idanggota = $_POST["id_anggota"];
    $idbuku = $_POST["id_buku"];
    $tglp = $_POST["tgl_peminjam"];
    $tglk = $_POST["tgl_pengembalian"];

    $cmd = "INSERT INTO transaksi
            VALUES ('$idtransaksi', '$idanggota', '$idbuku', '$tglp', '$tglk')";
    
    $res = $koneksi->query($cmd);

    if($res){
        header("Location: datatransaksi.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }
}elseif(isset($_POST["edittransaksi"])){
    $idtransaksi = $_POST["id_transaksi"];
    $idanggota = $_POST["id_anggota"];
    $idbuku = $_POST["id_buku"];
    $tglp = $_POST["tgl_peminjam"];
    $tglk = $_POST["tgl_pengembalian"];

    $cmd = "UPDATE transaksi SET id_transaksi = '$idtransaksi', id_buku = '$idbuku', 
            tgl_peminjam = '$tglp',  tgl_pengembalian = '$tglp' 
            WHERE id_transaksi = '$idtransaksi' ";
    
    //echo $cmd;exit;

    $res = $koneksi->query($cmd);

    if($res){
        header("Location: datatransaksi.php");
    }else{
        echo "Error: ". $koneksi->connection->error;
    }
};

$koneksi->disconnect();

?>