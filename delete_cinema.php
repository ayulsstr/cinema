<?php
include 'tampil_cinema.php';
$kode = $_GET ['id_cinema'];
$hapus = "Delete from cinema where id_cinema = '$kode'";
$qry_hapus = mysqli_query($koneksi,$hapus) or die (mysqli_error());
if ($qry_hapus){
    header ("location:index_cinema.php?page=cinema");
}
else {
    echo "Data Gagal Dihapus";
}
?>