<?php
include 'tampil_peta_kursi.php';
$kode = $_GET ['id_peta'];
$hapus = "delete from peta_kursi where id_peta='$kode'";
$qry_hapus = mysqli_query($koneksi,$hapus)or die(mysql_error());
if ($qry_hapus){
header ("location:index_cinema.php?page=peta_kursi");
}
else{
echo "data gagal diubah";
}
?>