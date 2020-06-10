<?php
include 'tampil_kota.php';
$kode = $_GET ['id_kota'];
$hapus = "delete from kota where id_kota='$kode'";
$qry_hapus = mysqli_query($koneksi,$hapus)or die(mysqli_error($koneksi));
if ($qry_hapus){
    header ("location:index_cinema.php?page=kota");
}
else{
echo ("data gagal dihapus");
}
?>