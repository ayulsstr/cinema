<?php
include 'tampil_film.php';
$kode = $_GET ['id_film'];
$hapus = "Delete from film where id_film = '$kode'";
$qry_hapus = mysqli_query($koneksi,$hapus) or die (mysqli_error());
if ($qry_hapus){
    echo "Data Berhasil Dihapus<br><a href = 'index_cinema.php?page=film'>Lihat Hasil</a>";
}
else {
    echo "Data Gagal Dihapus";
}
?>