<?php
	$koneksi = mysqli_connect ("localhost","root","","cinema21");
    if ($koneksi) {
        echo " ";
    } else {
        die ("Gagal Koneksi");
    }
    $query = mysqli_query ($koneksi,"select*from jadwal");
?>

<html>
    <head>
        <title>Menampilkan data Jadwal</title>
    </head>
    <body>
        <form action = "index_cinema.php?page=cari_jadwal" method = "post" name="pencarian" id="pencarian">
            <h3 align='center'>
            <label>Cari : </label>
            <input type = "text" name="cari" id="search" placeholder="cari disini">
            <input type="submit" id="kirim" value="Cari">
            </h3>

        <table border='1' align='center' height='150px'>
            <tr>
                <td>ID Film</td>
                <td>Tanggal Pemutaran Awal</td>
                <td>Jam Pemutaran</td>
                <td>ID Jadwal</td>
                <td>No Studio</td>
                <td>Tanggal Pemutaran Akhir</td>
                <td><a href='index_cinema.php?page=tambah_jadwal'>Tambah Data</a></td>
            </tr>
<?php
while ($tampil = mysqli_fetch_array ($query))
{
    echo "<tr>
        <td>$tampil[id_film]</td>
        <td>$tampil[tanggal_pemutaran_awal]</td>
        <td>$tampil[jam_pemutaran]</td>
        <td>$tampil[id_jadwal]</td>
        <td>$tampil[no_studio]</td>
        <td>$tampil[tanggal_pemutaran_akhir]</td>
        
        <td><a href='index_cinema.php?page=edit_jadwal'>Ubah</a>
        
        <a onclick=\"return confirm ('Yakin akan menghapus?');\" href = 'delete_jadwal.php?id_jadwal=$tampil[id_jadwal]'>Hapus</a>
        </td>
        </tr>";
}
?>
        </table>
        </form>
    </body>
</html>