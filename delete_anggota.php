<?php
include 'tampil_anggota.php';
$kode = $_GET ['id_anggota'];
$hapus = "Delete from anggota where id_anggota='$kode'";
$qry_hapus = mysqli_query($koneksi, $hapus) or die (mysqli_error());
if ($qry_hapus){
	echo "<a href='index_cinema.php?page=anggota'> Lihat Hasil </a>";
}
else{
	echo "Data Gagal Dihapus";
}
?>