<?php
	$koneksi = mysqli_connect ("localhost","root","","cinema21");
    if ($koneksi) {
        echo " ";
    } else {
        die ("Gagal Koneksi");
    }
    $query = mysqli_query ($koneksi,"select*from kota");
?>

<html>
    <head>
        <title>Menampilkan data Kota</title>
    </head>
    <body>
        <form action = "index_cinema.php?page=cari_kota" method = "post" name="pencarian" id="pencarian">
            <h3 align='center'>
            <label>Cari : </label>
            <input type = "text" name="cari" id="search" placeholder="cari disini">
            <input type="submit" id="kirim" value="Cari">
            </h3>

        <table border='1' align='center' height= '200px' width='350px'>
            <tr>
                <td>ID Kota</td>
                <td>Nama Kota</td>
                <td><a href='index_cinema.php?page=tambah_kota'>Tambah Data</a></td>
            </tr>
<?php
            
while ($tampil = mysqli_fetch_array ($query))
{
    echo "<tr>
        <td>$tampil[id_kota]</td>
        <td>$tampil[nama_kota]</td>
        
        <td><a href='index_cinema.php?page=edit_kota'>Edit</a>
        
        <a onclick=\"return confirm ('Yakin akan menghapus?');\" href = 'delete_kota.php?id_kota=$tampil[id_kota]'>Hapus</a></td>
        </tr>";
}
?>
        </table>
        </form>
    </body>
</html>