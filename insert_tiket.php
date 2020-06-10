<?php
    include "tampil_tiket.php";
    $tiket = $_POST['tiket'];
    $pemesanan = $_POST['pemesanan'];
    $no = $_POST['no'];
    
    $insert="insert into tiket values('$tiket','$pemesanan','$no')";
    $qry_insert=mysqli_query($koneksi,$insert) or die(mysqli_error($koneksi));
    if($qry_insert){
    header ("location:index_cinema.php?page=tiket");
    }
    else{
    echo "Data gagal disimpan";
    }
?>