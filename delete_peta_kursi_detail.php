<?php
include 'tampil_peta_kursi_detail.php';
$kode = $_GET ['id_peta_detail'];
$hapus = "delete from peta_kursi_detail where id_peta_detail='$kode'";
$qry_hapus = mysqli_query($koneksi,$hapus)or die(mysql_error());
if ($qry_hapus){
header ("location:index_cinema.php?page=peta_kursi_detail");
}
else{
echo "data gagal diubah";
}
?>