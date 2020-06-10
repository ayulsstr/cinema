<?php
    include 'tampil_peta_kursi_detail.php';
    $detail = $_POST['detail'];
    $peta = $_POST['peta'];
    $no = $_POST['no'];
    
    $edit = "update peta_kursi_detail set id_peta='$peta', no_kursi='$no' where id_peta_detail='$detail'";

    $qry_edit = mysqli_query ($koneksi,$edit) or die (mysqli_error());
	if($qry_edit)
	{
	header ("location:index_cinema.php?page=peta_kursi_detail");
	}
	else
	{
	echo "Data gagal diedit";
	}
?>