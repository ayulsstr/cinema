<?php
    include "tampil_cinema.php";
    $cinema=$_POST['idc'];
    $kota = $_POST['idk'];
    $nama = $_POST['nama'];
    $insert= mysqli_query ($koneksi, "insert into cinema values('$cinema','$kota','$nama')");

    if($insert){
    header ("location:index_cinema.php?page=cinema");
    }
    else{
    echo "data gagal disimpan";
    }
?>