<?php
	$koneksi = mysqli_connect ("localhost","root","","cinema21");
    if ($koneksi) {
        echo " ";
    } else {
        die ("Gagal Koneksi");
    }
    $query = mysqli_query ($koneksi,"select*from film");
?>
<html>
    <head>
        <title>Menampilkan data Film</title>
        <link rel="stylesheet" type="text/css" href="style_cinema.css">
    </head>
    <body>
        <form action = "index_cinema.php?page=cari_film" method = "post" name="pencarian" id="pencarian">
            <h3 align='center'>
            <label>Cari : </label>
            <input type = "text" name="cari" id="search">
            <input type="submit" id="kirim" value="Cari">
            </h3>
            
        <table border='1' align='center'>
            <tr>
                <td>ID Film</td>
                <td>Judul</td>
                <td>Durasi</td>
                <td>Genre</td>
                <td>Sinopsis</td>
                <td>Producer</td>
                <td>Director</td>
                <td>Writer</td>
                <td>Cast</td>
                <td>Distributor</td>
                <td>Website</td>
                <td><a href='index_cinema.php?page=tambah_film'>Tambah Data</a></td>
            </tr>
<?php
while ($tampil = mysqli_fetch_array ($query))
{
    echo "<tr>
        <td>$tampil[id_film]</td>
        <td>$tampil[judul]</td>
        <td>$tampil[durasi]</td>
        <td>$tampil[genre]</td>
        <td>$tampil[sinopsis]</td>
        <td>$tampil[producer]</td>
        <td>$tampil[director]</td>
        <td>$tampil[writer]</td>
        <td>$tampil[cast]</td>
        <td>$tampil[distributor]</td>
        <td>$tampil[website]</td>
        
        <td><a href='index_cinema.php?page=edit_film'>Edit</a>
        
        <a onclick=\"return confirm ('Yakin akan menghapus?');\" href = 'delete_film.php?id_film=$tampil[id_film]'>Hapus</a>
        </td>
        </tr>";
}
?>
        </table>
        </form>
    </body>
</html>