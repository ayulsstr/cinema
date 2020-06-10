<?php
    include 'tampil_peta_kursi.php';
    $id = $_POST['id'];
    $baris = $_POST['baris'];
    $kolom = $_POST['kolom'];
    
    $edit = "update peta_kursi set jml_baris='$baris', jml_kolom='$kolom' where id_peta='$id'";

    $qry_edit = mysqli_query ($koneksi,$edit) or die (mysqli_error());
	if($qry_edit)
	{
	echo "Data Berhasil Diubah <a href='index_cinema.php?page=peta_kursi'>Lihat Hasil</a>";
    }
	else
	{
	echo "Data gagal diedit";
	}
?>