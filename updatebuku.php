<!DOCTYPE html>
<?php 
require("koneksi.php");
$koneksi->connect();

$id = $_GET["id"];
$sql = "Select * from tb_buku WHERE id_buku = '$id'";
$res = $koneksi->query($sql);

$koneksi->disconnect();

//var_dump($res); exit;
?>
<html lang="en">
    <head>
        <title>.: Update | Buku :.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Awal Header -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">My Library</a>
            </div>
        </nav>
        <!-- Akhir Header -->

        <div class="container-fluid">
            <div class="row">
                <!-- Awal Menu Sidebar -->
                <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky">
                    <a href="/mylibrary/datauser.php" class="list-group-item list-group-item-action"> Home</a>
                        <a href="/mylibrary/dataanggota.php" class="list-group-item list-group-item-action"> Anggota</a>
                        <a href="/mylibrary/databuku.php" class="list-group-item list-group-item-action active"> Buku</a>
                        <a href="/mylibrary/datatransaksi.php" class="list-group-item list-group-item-action"> Transaksi</a>
                        <a href="#" class="list-group-item list-group-item-action bg-danger"> Logout</a>
                    </div>
                </nav>
                <!-- Akhir Menu Sidebar -->

                <!-- Awal Konten -->
                <main class="col-md-9 col-lg-10 px-md-4 py-3">
                    <h2>Update Buku </h2>
                    <div class="row">
                        <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-header">Update Buku</div>
                                    <form action="proses.php" method="post">
                                        <div class="card-body">
                                            <?php

                                            if($res->num_rows > 0){
                                                $row = $res -> fetch_assoc();
                                            ?>                                           
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="" class="form-label"> id Buku</label>
                                                    <input type="text" class="form-control" name="id_buku" value="<?php echo $row['id_buku'];?>" required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="" class="form-label"> Judul Buku</label>
                                                    <input type="text" class="form-control" name="judul_buku" value="<?php echo $row['judul_buku'];?>" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="" class="form-label"> Pangarang</label>
                                                    <input type="text" class="form-control" name="pengarang" value="<?php echo $row['pengarang'];?>" required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="" class="form-label"> penerbit</label>
                                                    <input type="text" class="form-control" name="penerbit" value="<?php echo $row['penerbit'];?>" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="" class="form-label"> Kategori</label>
                                                    <input type="text" class="form-control" name="kategori" value="<?php echo $row['kategori'];?>" required>
                                                </div>
                                               
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <a href="databuku.php" class="btn btn-primary">Cancel</a>
                                            <button type="submit" name="edit" class="btn btn-success">Submit</button>
                                        </div>

                                        <?php }
                                        ?>

                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Akhir Konten -->
                
            </div>
        </div>
    </body>
</html>