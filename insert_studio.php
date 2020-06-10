<?php
    include "tampil_studio.php";
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $kapasitas = $_POST['kapasitas'];
    $weekday = $_POST ['weekday'];
    $weekend = $_POST ['weekend'];
    $cinema = $_POST ['cinema'];
    $peta = $_POST ['peta'];
    $insert="insert into studio values('$no','$nama','$kapasitas','$weekday','$weekend','$cinema','$peta')";
    $qry_insert=mysqli_query($koneksi,$insert) or die(mysqli_error($koneksi));
    if($qry_insert){
    header ("location:index_cinema.php?page=studio");
    }
    else{
    echo "Data gagal disimpan";
    }
?>