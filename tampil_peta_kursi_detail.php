<?php
	$koneksi = mysqli_connect ("localhost","root","","cinema21");
    if ($koneksi) {
        echo " ";
    } else {
        die ("Gagal Koneksi");
    }
    $query = mysqli_query ($koneksi,"select*from peta_kursi_detail");
?>
<html>
    <head>
        <title>Menampilkan data Peta Kursi Detail</title>
    </head>
    <body>
        <form action = "index_cinema.php?page=cari_peta_kursi_detail" method = "post" name="pencarian" id="pencarian">
            <h3 align='center'>
            <label>Cari : </label>
            <input type = "text" name="cari" id="search">
            <input type="submit" id="kirim" value="Cari">
            </h3>
            
        <table border='1' align='center' height='150px'>
            <tr>
                <td>ID Peta Detail</td>
                <td>ID Peta</td>
                <td>No Kursi</td>
                <td><a href='index_cinema.php?page=tambah_peta_kursi_detail'>Tambah Data</a></td>
            </tr>
<?php
while ($tampil = mysqli_fetch_array ($query))
{
    echo "<tr>
        <td>$tampil[id_peta_detail]</td>
        <td>$tampil[id_peta]</td>
        <td>$tampil[no_kursi]</td>
        
        <td><a href='index_cinema.php?page=edit_peta_kursi_detail'>Ubah</a>
        
        <a onclick=\"return confirm ('Yakin akan menghapus?');\" href = 'delete_peta_kursi_detail.php?id_peta_detail=$tampil[id_peta_detail]'>Hapus</a>
        </td>
        </tr>";
}
?>
        </table>
        </form>
    </body>
</html>