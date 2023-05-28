<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('head.php');
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php
        include('sidebar.php');
        ?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>General Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Tambah Data Mahasiswa</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Entri Data</h3>
                                </div>
                                <!-- form start -->
                                <form action="../controller/create.php" method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">NIM</label>
                                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '')" type="text" class="form-control" placeholder="Masukan NIM" name="nim" pattern="[0-9.]+" title="Harap masukkan angka dan titik saja" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nama</label>
                                            <input oninput="this.value = this.value.replace(/[^a-zA-Z   ]/g, '')" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Angkatan</label>
                                            <select name="angkatan" class="form-control">
                                                <?php for ($i = 2019; $i < 2030; $i++) { ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i; ?></option>
                                                <?php
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Semester</label>
                                            <select name="semester" class="form-control">
                                                <?php for ($i = 1; $i <= 16; $i++) { ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i; ?></option>
                                                <?php
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">IPK</label>
                                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '')"  type="text" class="form-control" id="exampleInputPassword1" placeholder="IPK" name="ipk">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Telepon</label>
                                            <input oninput="this.value = this.value.replace(/[^0-9]/g, '')"  type="text" class="form-control" id="" placeholder="telepon" name="telepon">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php
    include('script.php');
    ?>
</body>
</html>