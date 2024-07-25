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
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Produk</h6>
                        </div>
                        <div class="card-body">
                            <form class="user" method="POST" action="aksi_edit_produk.php">
                            <?php
                                $id_produk=$_GET['id_produk'];
                                include "koneksi.php";
                                $data = mysqli_query($db, "SELECT * FROM tabel_produk WHERE id_produk='".$id_produk."'");
                                while ($array=mysqli_fetch_array($data)) {
                            
                            ?>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label type="text">ID Produk</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="masukkan id produk" name="id_produk" value="<?php echo $array['id_produk']; ?>">
                                    </div>
                                </div>
                    
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label type="text">Nama Produk</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="masukkan nama produk" name="nama_produk" value="<?php echo $array['nama_produk']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label type="text">Harga</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="masukkan harga buku" name="harga" value="<?php echo $array['harga']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label type="text">Stok</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="masukkan stok buku" name="stok" value="<?php echo $array['stok']; ?>">
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