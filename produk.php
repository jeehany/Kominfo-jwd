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
                    <h3 class="m-0 font-weight-bold text-primary">Data Produk</h3>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        
                            <a href="tambah_data_produk.php" class="btn btn-sm btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php 
    include "koneksi.php"; 
    $data = mysqli_query($db, "SELECT * FROM tabel_produk");
    while ($array = mysqli_fetch_array($data)) {
    echo "<tr>
            <td>".$array["id_produk"]."</td>
            <td>".$array["nama_produk"]."</td>
            <td>".$array["harga"]."</td>
            <td>".$array["stok"]."</td>
            <td>
                <a href='edit_data_produk.php?id_produk=".$array['id_produk']."' class='btn btn-sm btn-warning'>Edit</a>";
?>
                <a href='hapus_data_produk.php?id_produk=<?php echo $array['id_produk']; ?>' class='btn btn-sm btn-danger' onclick="return confirm('apakah yakin ingin menghapus?')">Hapus</a>
            </td>                                    
        </tr>
<?php
    };
?>           
<a href="" onclick="return confirm('apakah yakin ingin menghapus?')"></a>
                                    </tbody>
                                </table>
                            </div>
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