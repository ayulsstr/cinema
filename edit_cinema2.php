<?php
    include 'tampil_cinema.php';
    $cinema = $_POST ['idc'];
    $kota = $_POST ['idk'];
    $nama = $_POST ['nama'];

    $edit = "update cinema set id_kota='$kota',nama_cinema='$nama' where id_cinema='$cinema'";
   
    $qry_edit = mysqli_query ($koneksi,$edit) or die (mysqli_error());
	if($qry_edit){
echo "Data Berhasil Diubah <a href='index_cinema.php?page=cinema'>Lihat Hasil</a>";
	}
	else
	{
	echo "Data gagal diedit";
	}
?>