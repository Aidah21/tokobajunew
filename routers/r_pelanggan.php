<?php
include_once "../controllers/c_pelanggan.php";
$pelanggan = new c_pelanggan();

if ($_GET["aksi"] == "tambah") {
    $id = $_POST["id"];
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $harga = $_POST["harga"];
    $id_barang = $_POST['id_barang'];

    $pelanggan->insert($id, $nama_pelanggan, $jumlah_barang, $harga, $id_barang);

    if ($pelanggan) {
        echo "<script> alert('Data berhasil di tambahkan!');
        document.location.href = '../views/v_pelanggan.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "edit") {
    $id = $_POST["id"];
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $harga = $_POST["harga"];
   
    $pelanggan->inner($id, $nama_pelanggan, $jumlah_barang, $harga);

    if ($pelanggan) {
        echo "<script> alert('Data berhasil di ubah');
        document.location.href = '../views/v_pelanggan.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "delete") {
    $id = $_GET["id"];
    $pelanggan->delete($id);
}
