<?php
include 'tampil_pemesanan.php';
$kode = $_GET ['id_pemesanan'];
$hapus = "delete from pemesanan where id_pemesanan='$kode'";
$qry_hapus = mysqli_query($koneksi,$hapus)or die(mysql_error());
if ($qry_hapus){
echo "Data Berhasil Dihapus <a href='index_cinema.php?page=pemesanan'>Lihat Hasil</a>";
}
else{
echo "data gagal dihapus";
}
?>