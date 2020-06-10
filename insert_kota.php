<?php
    include "tampil_kota.php";
    $id=$_POST['id'];
    $nama = $_POST['nama'];
    $insert=mysqli_query($koneksi,"insert into kota values('$id','$nama')");

    if($insert){
    header ("location:index_cinema.php?page=kota");
    }
    else{
    echo "Data gagal disimpan";
    }