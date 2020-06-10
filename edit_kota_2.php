<?php
    include 'tampil_kota.php';
    $kota=$_POST['id'];
    $namakota = $_POST['nama'];
    
    $edit = "update kota set nama_kota='$namakota' where id_kota='$kota'";
    $qry_edit = mysqli_query ($koneksi,$edit) or die (mysqli_error());

    function custom_error ($errno,$errstr) {
        echo "Error : [$errno] $errstr";
    }
    set_error_handler ("custom_error");

	if($qry_edit)
	{
	    echo "Data Berhasil Diubah <a href='index_cinema.php?page=kota'>Lihat Hasil</a>";
	}
	else
	{
	echo "Data gagal diedit";
	}
?>