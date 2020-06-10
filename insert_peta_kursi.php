<?php
    include "tampil_peta_kursi.php";
    $id = $_POST['id'];
    $baris = $_POST['baris'];
    $kolom = $_POST['kolom'];
    
    $insert="insert into peta_kursi values('$id','$baris','$kolom')";
    $qry_insert=mysqli_query($koneksi,$insert) or die(mysqli_error());
    if($qry_insert){
    header ("location:index_cinema.php?page=peta_kursi");
    }
    else{
    echo "Data gagal disimpan";
    }
?>