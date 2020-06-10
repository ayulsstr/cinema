<?php
	$koneksi = mysqli_connect ("localhost","root","","cinema21");
    if ($koneksi) {
        echo " ";
    } else {
        die ("Gagal Koneksi");
    }
    $query = mysqli_query ($koneksi,"select*from pemesanan");
?>
<html>
    <head>
        <title>Menampilkan data Pemesanan</title>
        <link rel="stylesheet" type="text/css" href="style_cinema.css">
    </head>
    <body>
        <form action = "index_cinema.php?page=cari_pemesanan" method = "post" name="pencarian" id="pencarian">
            <h3 align='center'>
            <label>Cari : </label>
            <input type = "text" name="cari" id="search">
            <input type="submit" id="kirim" value="Cari">
            </h3>
            
        <table border='1' align='center' height='250px'>
            <tr>
                <td>ID Pemesanan</td>
                <td>ID Jadwal</td>
                <td>ID Anggota</td>
                <td>jumlah Kursi</td>
                <td>Total Harga</td>
                <td>Status Pemesanan</td>
                <td>Harga</td>
                <td><a href='index_cinema.php?page=tambah_pemesanan'>Tambah Data</a></td>
            </tr>
<?php
while ($tampil = mysqli_fetch_array ($query))
{
    echo "<tr>
        <td>$tampil[id_pemesanan]</td>
        <td>$tampil[id_jadwal]</td>
        <td>$tampil[id_anggota]</td>
        <td>$tampil[jumlah_kursi]</td>
        <td>$tampil[total_harga]</td>
        <td>$tampil[status_pemesanan]</td>
        <td>$tampil[harga]</td>
        
        <td><a href='index_cinema.php?page=edit_pemesanan'>Ubah</a>
        
        <a onclick=\"return confirm ('Yakin akan menghapus?');\" href = 'delete_pemesanan.php?id_pemesanan=$tampil[id_pemesanan]'>Hapus</a>
        </td>
        </tr>";
}
?>
        </table>
        </form>
    </body>
</html>