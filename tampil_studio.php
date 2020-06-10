<?php
	$koneksi = mysqli_connect ("localhost","root","","cinema21");
    if ($koneksi) {
        echo " ";
    } else {
        die ("Gagal Koneksi");
    }
    $query = mysqli_query ($koneksi,"select*from studio");
?>
<html>
    <head>
        <title>Menampilkan data Studio</title>
    </head>
    <body>
        <form action = "index_cinema.php?page=cari_studio" method = "post" name="pencarian" id="pencarian">
            <h3 align='center'>
            <label>Cari : </label>
            <input type = "text" name="cari" id="search">
            <input type="submit" id="kirim" value="Cari">
            </h3>

        <table border='1' align='center' height='150'>
            <tr>
                <td>No Studio</td>
                <td>Nama Studio</td>
                <td>Kapasitas</td>
                <td>Harga Weekday</td>
                <td>Harga Weekend</td>
                <td>ID Cinema</td>
                <td>ID Peta</td>
                <td><a href='index_cinema.php?page=tambah_studio'>Tambah Data</a></td>
            </tr>
<?php
while ($tampil = mysqli_fetch_array ($query))
{
    echo "<tr>
        <td>$tampil[no_studio]</td>
        <td>$tampil[nama_studio]</td>
        <td>$tampil[kapasitas]</td>
        <td>$tampil[harga_weekday]</td>
        <td>$tampil[harga_weekend]</td>
        <td>$tampil[id_cinema]</td>
        <td>$tampil[id_peta]</td>
        
        <td><a href='index_cinema.php?page=edit_studio'>Ubah</a>
        
        <a onclick=\"return confirm ('Yakin akan menghapus?');\" href = 'delete_studio.php?no_studio=$tampil[no_studio]'>Hapus</a>
        </td>
        </tr>";
}
?>
        </table>
        </form>
    </body>
</html>