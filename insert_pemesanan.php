<?php
    include "tampil_pemesanan.php";
    $pemesanan = $_POST['pemesanan'];
    $jadwal = $_POST['jadwal'];
    $anggota = $_POST['anggota'];
    $kursi = $_POST['jml'];
    $total = $_POST['ttl'];
    $status = $_POST['stat'];
    $harga = $_POST['harga'];

if ($kursi > 50){
        trigger_error ("TIDAK BOLEH LEBIH DARI 50");
        echo "Ending Script";
        die();
    }
    
    $insert="insert into pemesanan values('$pemesanan','$jadwal','$anggota','$kursi','$total','$status','$harga')";
    $qry_insert=mysqli_query($koneksi,$insert) or die(mysqli_error());
    if($qry_insert){
    header ("location:index_cinema.php?page=pemesanan");
    }
    else{
    echo "Data gagal disimpan";
    }
?>