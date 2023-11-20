<?php
include_once "../controllers/c_transaksi.php";
$transaksi = new c_transaksi();

if ($_GET["aksi"] == "tambah") {
    $id = $_POST["id"];
    $jumlah_pelanggan = $_POST["jumlah_pelanggan"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $pemasukan = $_POST["pemasukan"];
    

    $transaksi->insert($id, $jumlah_pelanggan, $jumlah_barang, $pemasukan);

    if ($transaksi) {
        echo "<script> alert('Data berhasil di tambahkan!');
        document.location.href = '../views/v_transaksi.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "edit") {
    $id = $_POST["id"];
    $jumlah_pelanggan = $_POST["jumlah_pelanggan"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $pemasukan = $_POST["pemasukan"];
    
   
    $transaksi->update($id, $jumlah_pelanggan, $jumlah_barang, $pemasukan);

    if ($transaksi) {
        echo "<script> alert('Data berhasil di ubah');
        document.location.href = '../views/v_transaksi.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "delete") {
    $id = $_GET["id"];
    $transaksi->delete($id);
}
