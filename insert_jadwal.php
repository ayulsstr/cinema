<?php
    include "tampil_jadwal.php";
    $film=$_POST['idf'];
    $awal = $_POST['awal'];
    $jam = $_POST['jam'];
    $jadwal = $_POST['idj'];
    $studio = $_POST['no'];
    $akhir = $_POST['akhir'];
    $insert="insert into jadwal values('$film','$awal','$jam','$jadwal','$studio','$akhir')";
    $qry_insert=mysqli_query($koneksi,$insert) or die(mysqli_error($koneksi));
    
    if($qry_insert){
    header ("location:index_cinema.php?page=jadwal");
    }
    else{
    echo "data gagal disimpan";
    }
?>