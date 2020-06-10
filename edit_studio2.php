<?php
    include 'tampil_studio.php';
    $no = $_POST ['no'];
    $nama = $_POST ['nama'];
    $kapasitas = $_POST ['kapasitas'];
    $weekday = $_POST ['weekday'];
    $weekend = $_POST ['weekend'];
    $idcinema = $_POST ['cinema'];
    $idpeta = $_POST ['peta'];

    $edit = "update studio set nama_studio='$nama', kapasitas='$kapasitas', harga_weekday='$weekday', harga_weekend='$weekend', id_cinema='$idcinema', id_peta='$idpeta' where no_studio='$no'";
    $qry_edit = mysqli_query ($koneksi,$edit) or die (mysqli_error());
    if($qry_edit)
{
    echo "Data Berhasil Diubah <a href='index_cinema.php?page=studio'>Lihat Hasil</a>";
}
else
{
    echo "Data gagal diedit";
}
?>