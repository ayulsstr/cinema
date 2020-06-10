<?php
    include "tampil_film.php";
    $id=$_POST['id'];
    $judul = $_POST['judul'];
    $durasi = $_POST['durasi'];
    $genre = $_POST['genre'];
    $sinopsis = $_POST['sinopsis'];
    $producer = $_POST['producer'];
    $director = $_POST['director'];
    $writer = $_POST['writer'];
    $cast = $_POST['cast'];
    $distributor = $_POST['distributor'];
    $website = $_POST['website'];
    $insert="insert into film values('$id','$judul','$durasi','$genre','$sinopsis','$producer','$director','$writer','$cast','$distributor','$website')";
    $qry_insert=mysqli_query($koneksi,$insert) or die(mysqli_error($koneksi));
    if($qry_insert){
	echo "Data berhasil ditambah <br><a href='index_cinema.php?page=film'>Lihat Hasil</a>";
    }
    else{
    echo "data gagal disimpan";
    }
?>