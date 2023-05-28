<!DOCTYPE html>
<html lang="en">
<?php
require_once "../API/model.php";
require_once "../controller/mahasiswaController.php";
?>

<head>
    <?php include('head.php');?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include("sidebar.php")?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>DataTables</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTables </h3>
                                    <p align='right'><a href="create.php" class="btn btn-primary">Tambah Donatur Kampus</a></p>    
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>NIM</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Angkatan</th>
                                                <th>Semester</th>
                                                <th>IPK</th>
                                                <th>Email</th>
                                                <th>telepon</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $data = model::callAPI('GET', 'http://localhost:8080/api/students/', false);
                                            $data = json_decode($data, true);
                                            foreach ($data as $x) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $x['nim']; ?></td>
                                                    <td><?php echo $x['nama']; ?></td>
                                                    <td><?php echo $x['angkatan']; ?></td>
                                                    <td><?php echo $x['semester']; ?></td>
                                                    <td><?php echo $x['IPK']; ?></td>
                                                    <td><?php echo $x['email']; ?></td>
                                                    <td><?php echo $x['telepon']; ?></td>
                                                    <td>
                                                        <div class="button-wrapper" role="group">
                                                                <a  class="btn btn-block btn-warning" href="edit.php?nim=<?php echo $x['nim']; ?>">Edit</a>
                                                        </div>
                                                        <div class="button-wrapper">
                                                            <form action="../controller/delete.php" method="GET">
                                                                <input type="hidden" name="nim" value="<?php echo $x['nim']; ?>">
                                                                <button class="btn btn-block btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini ?')">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="#">AdminLTE.io</a>.</strong> All rights
            reserved. Digunakan oleh David Akbar.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php 
        include('script.php');
    ?>
</body>

</html>