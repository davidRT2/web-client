<?php
require_once '../API/model.php';
?>
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
                            <h1>Edit Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit Data Mahasiswa</li>
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
                                    <h3 class="card-title">Form Edit Data Mahasiswa</h3>
                                </div>
                                <!-- form start -->
                                <?php
                                $nim = strval("'".$_GET['nim']."'");
                                $data = model::callAPI('GET', 'localhost:8080/api/students/'.$nim, false);
                                $data = json_decode($data, true);
                                ?>
                                <form action="../controller/edit.php" method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">NIM</label>
                                            <input type="text" class="form-control" placeholder="Masukan NIM" name="nim" value="<?php echo $data[0]['nim']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nama</label>
                                            <input value="<?php echo $data[0]['nama']; ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Angkatan</label>
                                            <select name="angkatan" class="form-control">
                                                <?php for ($i = 2019; $i < 2030; $i++) { 
                                                        $selected = ($data[0]['angkatan'] == $i) ? 'selected' : '';
                                                    ?>
                                                    <option value="<?php echo $i ?>"<?php echo $selected; ?>><?php echo $i; ?></option>
                                                <?php
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="semester">Semester</label>
                                            <select name="semester" class="form-control">
                                                <?php for ($i = 1; $i <= 16; $i++) {
                                                    $selected = ($data[0]['semester'] == $i) ? 'selected' : '';
                                                ?>
                                                    <option value="<?php echo $i; ?>" <?php echo $selected; ?>><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>IPK</label>
                                            <input value="<?php echo $data[0]['IPK']; ?>" type="text" class="form-control" placeholder="IPK" name="IPK">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input value="<?php echo $data[0]['email']; ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Telepon</label>
                                            <input value="<?php echo $data[0]['telepon']; ?>" type="text" class="form-control" id="" placeholder="Telepon" name="telepon">
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