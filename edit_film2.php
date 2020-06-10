<?php
    include 'tampil_film.php';
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

    $edit = "update film set judul='$judul', durasi='$durasi', genre='$genre', sinopsis='$sinopsis', producer='$producer', director='$director', writer='$writer', cast='$cast', distributor='$distributor', website='$website' where id_film='$id'";
    $qry_edit = mysqli_query ($koneksi,$edit) or die (mysqli_error());
	if($qry_edit)
	{
	echo "Data berhasil diedit <br><a href='index_cinema.php?page=film'>Lihat Hasil</a>";
	}
	else
	{
	echo "Data gagal diedit";
	}
?>