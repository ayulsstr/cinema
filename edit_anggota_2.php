<?php
	include 'tampil_anggota.php';
	$id = $_POST ['id_anggota'];
	$nama = $_POST ['nama'];
	$nomor = $_POST ['no'];
	$email = $_POST ['email'];
	$alamat = $_POST ['alamat'];
	$provinsi = $_POST ['prov'];
	$kota = $_POST ['kota'];
	$jk = $_POST ['jk'];
	$tl = $_POST ['tgl'];
	$sandi = $_POST ['pass'];

	$edit = "update anggota set nama='$nama',no_hp='$nomor', email='$email', alamat='$alamat', provinsi='$provinsi', kota='$kota', jk='$jk', tanggal_lahir='$tl', kata_sandi='$sandi' where id_anggota='$id'";
	
    $qry_edit=mysqli_query($koneksi, $edit) or die(mysqli_error());
	if($qry_edit)
	{
	echo "<a href='index_cinema.php?page=anggota'> Lihat Hasil </a>";
	}
	else
	{
	echo "Data Gagal Diedit";
	}
?>