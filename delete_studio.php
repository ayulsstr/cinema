<?php
include 'tampil_studio.php';
$kode = $_GET ['no_studio'];
$hapus = "delete from studio where no_studio='$kode'";
$qry_hapus = mysqli_query($koneksi,$hapus)or die(mysql_error());
if ($qry_hapus){
header ("location:index_cinema.php?page=studio");
}
else{
echo "data gagal diubah";
}
?>