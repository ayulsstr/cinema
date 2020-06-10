<?php
	$koneksi = mysqli_connect ("localhost","root","","cinema21");
    if ($koneksi) {
        echo " ";
    } else {
        die ("Gagal Koneksi");
    }
    $query = mysqli_query ($koneksi,"select*from peta_kursi");
?>
<html>
    <head>
        <title>Menampilkan data Peta Kursi</title>
    </head>
    <body>
        <form action = "index_cinema.php?page=cari_peta_kursi" method = "post" name="pencarian" id="pencarian">
            <h3 align='center'>
            <label>Cari : </label>
            <input type = "text" name="cari" id="search">
            <input type="submit" id="kirim" value="Cari">
            </h3>
            
        <table border="1" align='center' height='200px'>
            <tr>
                <td>ID Peta</td>
                <td>Jml Baris</td>
                <td>Jml Kolom</td>
                <td><a href='index_cinema.php?page=tambah_peta_kursi'>Tambah Data</a></td>
            </tr>
<?php
while ($tampil = mysqli_fetch_array ($query))
{
    echo "<tr>
        <td>$tampil[id_peta]</td>
        <td>$tampil[jml_baris]</td>
        <td>$tampil[jml_kolom]</td>
        
        <td><a href='index_cinema.php?page=edit_peta_kursi'>Ubah</a>
        
        <a onclick=\"return confirm ('Yakin akan menghapus?');\" href = 'delete_peta_kursi.php?id_peta=$tampil[id_peta]'>Hapus</a>
        </td>
        </tr>";
}
?>
        </table>
        </form>
    </body>
</html>