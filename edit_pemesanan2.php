<?php
    include 'tampil_pemesanan.php';
    $pemesanan = $_POST['pemesanan'];
    $jadwal = $_POST['jadwal'];
    $anggota = $_POST['anggota'];
    $kursi = $_POST['jml'];
    $total = $_POST['ttl'];
    $status = $_POST['stat'];
    $harga = $_POST['harga'];
    
    $edit = "update pemesanan set id_jadwal='$jadwal', id_anggota='$anggota', jumlah_kursi='$kursi', total_harga='$total', status_pemesanan='$status', harga='$harga' where id_pemesanan='$pemesanan'";

    $qry_edit = mysqli_query ($koneksi,$edit) or die (mysqli_error());
	if($qry_edit)
	{
	    echo "Data Berhasil Diubah <a href='index_cinema.php?page=pemesanan'>Lihat Hasil</a>";
	}
	else
	{
	echo "Data gagal diedit";
	}
?>