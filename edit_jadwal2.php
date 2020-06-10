<?php
    include 'tampil_jadwal.php';
    $film=$_POST['idf'];
    $awal = $_POST['awal'];
    $jam = $_POST['jam'];
    $jadwal = $_POST['idj'];
    $studio = $_POST['no'];
    $akhir = $_POST['akhir'];

    $edit = "update jadwal set id_film='$film', tanggal_pemutaran_awal='$awal', jam_pemutaran='$jam', id_jadwal='$jadwal', no_studio='$studio', tanggal_pemutaran_akhir='$akhir' where id_jadwal='$jadwal'";

    $qry_edit = mysqli_query ($koneksi,$edit) or die (mysqli_error());
	if($qry_edit)
	{
	echo "Data Berhasil Diubah <a href='index_cinema.php?page=jadwal'>Lihat Hasil</a>";
	}
	else
	{
	echo "Data gagal diedit";
	}
?>