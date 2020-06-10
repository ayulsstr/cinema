<?php
include 'tampil_tiket.php';
$kode = $_GET ['id_tiket'];
$hapus = "delete from tiket where id_tiket='$kode'";
$qry_hapus = mysqli_query($koneksi,$hapus)or die(mysql_error());
if ($qry_hapus){
header ("location:index_cinema.php?page=tiket");
}
else{
echo "data gagal diubah";
}
?>