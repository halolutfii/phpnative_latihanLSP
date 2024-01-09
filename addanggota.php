<!DOCTYPE html>
<html lang="en">
    <head>
        <title>.: Add | Anggota :.</title>
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
                        <a href="/mylibrary/datauser.php" class="list-group-item list-group-item-action"> User</a>
                        <a href="/mylibrary/dataanggota.php" class="list-group-item list-group-item-action active"> Anggota</a>
                        <a href="/mylibrary/databuku.php" class="list-group-item list-group-item-action"> Buku</a>
                        <a href="/mylibrary/datatransaksi.php" class="list-group-item list-group-item-action"> Transaksi</a>
                        <a href="#" class="list-group-item list-group-item-action bg-danger"> Logout</a>
                    </div>
                </nav>
                <!-- Akhir Menu Sidebar -->

                <!-- Awal Konten -->
                <main class="col-md-9 col-lg-10 px-md-4 py-3">
                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a>My Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Anggota</li>
                        </ol>
                      </nav>
                    <h2>Tambah Anggota</h2>
                    <div class="row">
                        <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-header">Add Anggota</div>
                                    <form action="proses.php" method="post">
                                        <div class="card-body">
                                            
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="" class="form-label"> Id Anggota</label>
                                                    <input type="text" class="form-control" name="idanggota" required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="" class="form-label"> Nama </label>
                                                    <input type="text" class="form-control" name="nama" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="" class="form-label"> Jenis Kelamin </label>
                                                    <input type="text" class="form-control" name="jeniskelamin" required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="" class="form-label"> Alamat </label>
                                                    <input type="text" class="form-control" name="alamat" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="" class="form-label"> Status </label>
                                                    <input type="text" class="form-control" name="status" required>
                                                </div>
                                               
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <a href="dataanggota.php" class="btn btn-primary">Cancel</a>
                                            <button type="submit" name="addanggota" class="btn btn-success">Submit</button>
                                        </div>


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