<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="update/update_data.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $view['nama']; ?>">
                                <input type="text" class="form-control" placeholder="Nama" name="id" value="<?php echo $view['id']; ?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" class="form-control" placeholder="NIM" name="nim" value="<?php echo $view['nim']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Semester</label>
                                <select class="custom-select" id="inputGroupSelect01" name="semester">
                                    <option value="<?php echo $view['semester']; ?>" selected><?php echo $view['semester']; ?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="formFile" class="form-label">Upload Gambar</label>
                            <input class="form-control" type="file" name="foto" id="formFile">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="foto/<?php echo $view['foto']; ?>" alt="" width="100px" class="rounded-float-rights">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
        </div>

    </div>
</section>