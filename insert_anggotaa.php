<?php
include 'tampil_anggota.php';
	$id = $_POST ['id'];
	$nama = $_POST ['nama'];
	$nomor = $_POST ['no'];
	$email = $_POST ['email'];
	$alamat = $_POST ['alamat'];
	$provinsi = $_POST ['prov'];
	$kota = $_POST ['kota'];
	$jk = $_POST ['jk'];
	$tl = $_POST ['tgl'];
	$sandi = $_POST ['sandi'];
	$insert = "insert into anggota values ('$id','$nama','$nomor','$email','$alamat','$provinsi','$kota','$jk','$tl','$sandi')";
	$qry_insert=mysqli_query($koneksi, $insert) or die(mysqli_error($koneksi));
	if($qry_insert)
	{
	echo "<a href='index_cinema.php?page=anggota'> Lihat Hasil </a>";
	}
	else
	{
	echo "Data gagal disimpan";
	}
?>
