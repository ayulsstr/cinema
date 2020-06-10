<?php
    include 'tampil_tiket.php';
    $tiket = $_POST['tiket'];
    $pemesanan = $_POST['pemesanan'];
    $no = $_POST['no'];
    
    $edit = "update tiket set id_pemesanan='$pemesanan', no_kursi='$no' where id_tiket='$tiket'";

    $qry_edit = mysqli_query ($koneksi,$edit) or die (mysqli_error());
	if($qry_edit)
	{
        header ("location:index_cinema.php?page=tiket");
	}
	else
	{
	echo "Data gagal diedit";
	}
?>