<?php
include 'tampil_jadwal.php';
$kode = $_GET ['id_jadwal'];
$hapus = "Delete from jadwal where id_jadwal = '$kode'";
$qry_hapus = mysqli_query($koneksi,$hapus) or die (mysqli_error());
if ($qry_hapus){
    header ("location:index_cinema.php?page=jadwal");
}
else {
    echo "Data Gagal Dihapus";
}
?>