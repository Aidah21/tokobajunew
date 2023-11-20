<?php
include_once "c_koneksi.php";

class c_pelanggan
{
    
     //membuat method atau fungsi menampung data dari form register yg diinput user kedalam tabel users
    public function insert($id, $nama_pelanggan, $jumlah_barang, $harga, $id_barang)
    {

    //    $harga_barang = $jumlah_barang * $harga; 

    //     $total_barang = $jumlah_barang + $total_barang;

    //    $total_pemasukan = $total_pemasukan + $harga_barang;
        
        //membuat variabel yg bertipe data objek dari kelas c_koneksi
        $conn = new c_koneksi();

        $query = "INSERT INTO pelanggan VALUES ('$id', '$nama_pelanggan', '$jumlah_barang', '$harga','$id_barang')";
        //menjalankan perintah dalam sql dengan 2 parameter, 1. koneksi, 2. perintahnya
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read()
    {
        $conn = new c_koneksi();
        // perintah mengambil semua data dari pelanggan dan mengurutkan sesuai data terbaru diatas
        $query = "SELECT * FROM barang ORDER BY id_barang DESC";
        $data = mysqli_query($conn->conn(), $query);

        // mengubah query data menjadi objek
        while ($row = mysqli_fetch_object($data)) {
            // array kosong untuk menampung data objek
            $rows[] = $row;
        }

        // mengembalikan nilai
        if(!empty($rows)) {
            return $rows;
        }
       
    }

    public function edit($id)
    {
        $conn = new c_koneksi();

        // perintah mengambil data dari pelanggan berdasarkan id
        $query = "SELECT * FROM pelanggan WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function update($id, $nama_pelanggan, $jumlah_barang, $harga)
    {
        $conn = new c_koneksi();
        // perintah untuk update data dari pelanggan
        $query = "UPDATE pelanggan SET nama_pelanggan ='$nama_pelanggan', jumlah_barang ='$jumlah_barang', harga='$harga' WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function inner() {
        $conn = new c_koneksi();
        $query = "SELECT pelanggan.*, barang.nama_barang FROM pelanggan INNER JOIN barang ON pelanggan.id_barang = barang.id_barang ";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function delete($id)
    {
        $conn = new c_koneksi();

        // perintah untuk menghapus data dari pelanggan berdasarkan id
        $query = "DELETE FROM pelanggan WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);

        header("Location: ../views/v_pelanggan.php");
    }
}





