<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <!-- Topbar -->
            <?php include "topbar.php"; ?>
            <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Klien</h6>
                        </div>
                        <div class="card-body">
                            <form class="user" method="POST" action="aksi_edit_klien.php">
                            <?php
                                $id_klien=$_GET['id_klien'];
                                include "koneksi.php";
                                $data = mysqli_query($db, "SELECT * FROM tabel_klien WHERE id_klien='".$id_klien."'");
                                while ($array=mysqli_fetch_array($data)) {
                            
                            ?>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label type="text">ID Klien</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="masukkan id klien" name="id_klien" value="<?php echo $array['id_klien']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label type="text">Nama Klien</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="masukkan nama klien" name="nama" value="<?php echo $array['nama']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label type="text">Alamat</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="masukkan alamat klien" name="alamat" value="<?php echo $array['alamat']; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label type="text">Telepon</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="masukkan telepon klien" name="telepon" value="<?php echo $array['telepon']; ?>">
                                    </div>
                                </div>
                                <?php } ?>
                                <input type="submit" class="btn btn-primary btn-user btn block" name="submit" value="Simpan"/>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php"; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <?php include "js.php"; ?>

</body>

</html>