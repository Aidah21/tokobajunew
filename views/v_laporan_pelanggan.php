<?php include "../controllers/c_login.php";

$halaman = "pelanggan";

$data = $_SESSION['data'];
$nama = $_SESSION['nama'] = $data['nama'];
$role = $_SESSION['role'] = $data['role'];
include_once "template/header.php";
include_once "../controllers/c_pelanggan.php";
$pelanggan = new c_pelanggan();
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

                
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Generate Laporan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                    <th>No</th>
                                    <th>Nama pelanggan</th>
                                    <th>Nama barang</th>
                                    <th>jumlah barang</th>
                                    <th>Harga </th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama pelanggan</th>
                                    <th>Nama barang</th>
                                    <th>jumlah barang</th>
                                    <th>Harga </th>
                                    
                                </tr>
                            </tfoot>
                            <?php $i = 1; ?>
                             <tbody>
                             <?php if (empty($pelanggan->read())) { ?>

<tr>
    <td></td>
    <td></td>
    <td></td>
    <td>
        <h4>Data kosong</h4>
    </td>
    <td></td>
    <td></td>

</tr>

                            <?php }else{ ?>
                                <?php foreach ($pelanggan->inner() as $read ) : ?>
                                 <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $read->nama_pelanggan ?></td>
                                        <td><?= $read->nama_barang ?></td>
                                        <td><?= $read->jumlah_barang?></td>
                                        <td><?= $read->harga ?></td>
                                       
                                    </tr>
                                    <?php $i++; ?>
                                </tbody>
                            <?php endforeach; }?>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->

    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->

<script>
    window.print();
</script>

<!-- Logout Modal-->


<?php include_once "template/footer.php" ?>