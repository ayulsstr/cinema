<?php
    include "tampil_peta_kursi_detail.php";
    $detail = $_POST['detail'];
    $peta = $_POST['peta'];
    $no = $_POST['no'];
    
    $insert="insert into peta_kursi_detail values('$detail','$peta','$no')";
    $qry_insert=mysqli_query($koneksi,$insert) or die(mysqli_error());
    if($qry_insert){
    header ("location:index_cinema.php?page=peta_kursi_detail");
    }
    else{
    echo "Data gagal disimpan";
    }
?>