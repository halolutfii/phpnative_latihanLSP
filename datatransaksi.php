<!DOCTYPE html>
<?php 
require("koneksi.php");
$koneksi->connect();

$sql = "Select * from transaksi";
$res = $koneksi->query($sql);

$koneksi->disconnect();

//var_dump($res); exit;
?>

<html lang="en">
    <head>
        <title>.: Data | Transaksi :.</title>
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
                        <a href="/mylibrary/databuku.php" class="list-group-item list-group-item-action"> Buku</a>
                        <a href="/mylibrary/datatransaksi.php" class="list-group-item list-group-item-action active"> Transaksi</a>
                        <a href="#" class="list-group-item list-group-item-action bg-danger"> Logout</a>
                    </div>
                </nav>
                <!-- Akhir Menu Sidebar -->

                <!-- Awal Konten -->
                <main class="col-md-9 col-lg-10 px-md-4 py-3">
                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a>My Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
                        </ol>
                      </nav>
                    <h2>Data Transaksi</h2>
                    <div class="row">
                        <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-header">Data Transaksi</div>
                                <div class="card-body">
                                    <a href="addtransaksi.php" class="btn btn-sm btn-success">Tambah</a>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>ID User</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Password</th>
                                                    <th>Type</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                            if($res->num_rows > 0){
                                                $no = 1;
                                                while($row = $res->fetch_assoc()){ ?>
                                                <tr>
                                                    <th><?php echo $no;?> .</th>
                                                    <td><?php echo $row["id_transaksi"];?></td>
                                                    <td><?php echo $row["id_anggota"];?></td>
                                                    <td><?php echo $row["id_buku"];?></td>
                                                    <td><?php echo $row["tgl_peminjam"];?></td>
                                                    <td><?php echo $row["tgl_pengembalian"];?></td>
                                                    <td>
                                                        <a href="updatetransaksi.php?id=<?php echo $row["id_transaksi"];?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                                        <a href="deletetransaksi.php?id=<?php echo $row["id_transaksi"];?>" class="btn btn-sm btn-outline-danger">Hapus</a>
                                                    </td>
                                                </tr>
                                               <?php
                                               $no++;
                                                }
                                            }?>

                                                
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Akhir Konten -->
                
            </div>
        </div>
    </body>
</html>