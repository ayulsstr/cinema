<?php
	$koneksi = mysqli_connect ("localhost","root","","cinema21");
    if ($koneksi) {
        echo " ";
    } else {
        die ("Gagal Koneksi");
    }
    $query = mysqli_query ($koneksi,"select*from cinema");
?>
<html>
    <head>
        <title>Menampilkan data Cinema</title>
    </head>
    <body>
        <form action = "index_cinema.php?page=cari_cinema" method = "post" name="pencarian" id="pencarian">
            <h3 align='center'>
            <label>Cari : </label>
            <input type = "text" name="cari" id="search">
            <input type="submit" id="kirim" value="Cari">
            </h3>
            
        <table border='1' align='center'height='210px'>
            <tr>
                <td>ID Cinema</td>
                <td>ID Kota</td>
                <td>Nama Cinema</td>
                <td><a href='index_cinema.php?page=tambah_cinema'>Tambah Data</a></td>
            </tr>
<?php
while ($tampil = mysqli_fetch_array ($query))
{
    echo "<tr>
        <td>$tampil[id_cinema]</td>
        <td>$tampil[id_kota]</td>
        <td>$tampil[nama_cinema]</td>
        
        <td><a href='index_cinema.php?page=edit_cinema'>Edit</a>
        
        <a onclick=\"return confirm ('Yakin akan menghapus?');\" href = 'delete_cinema.php?id_cinema=$tampil[id_cinema]'>Hapus</a>
        </td>
        </tr>";
}
?>
        </table>
        </form>
    </body>
</html>