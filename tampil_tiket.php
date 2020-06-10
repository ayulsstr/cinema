<?php
	$koneksi = mysqli_connect ("localhost","root","","cinema21");
    if ($koneksi) {
        echo " ";
    } else {
        die ("Gagal Koneksi");
    }
    $query = mysqli_query ($koneksi,"select*from tiket");
?>
<html>
    <head>
        <title>Menampilkan data Tiket</title>
    </head>
    <body>
        <form action = "index_cinema.php?page=cari_tiket" method = "post" name="pencarian" id="pencarian">
            <h3 align='center'>
            <label>Cari : </label>
            <input type = "text" name="cari" id="search">
            <input type="submit" id="kirim" value="Cari">
            </h3>
            
        <table border='1' align='center' height='150px'>
            <tr>
                <td>ID Tiket</td>
                <td>ID Pemesanan</td>
                <td>No Kursi</td>
                <td><a href='index_cinema.php?page=tambah_tiket'>Tambah Data</a></td>
            </tr>
<?php
while ($tampil = mysqli_fetch_array ($query))
{
    echo "<tr>
        <td>$tampil[id_tiket]</td>
        <td>$tampil[id_pemesanan]</td>
        <td>$tampil[no_kursi]</td>
        
        <td><a href='index_cinema.php?page=edit_tiket'>Ubah</a>
        
        <a onclick=\"return confirm ('Yakin akan menghapus?');\" href = 'delete_tiket.php?id_tiket=$tampil[id_tiket]'>Hapus</a>
        </td>
        </tr>";
}
?>
        </table>
        </form>
    </body>
</html>