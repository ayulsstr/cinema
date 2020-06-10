<?php
	$koneksi = mysqli_connect ("localhost","root","","cinema21");
    if ($koneksi) {
        echo " ";
    } else {
        die ("Gagal Koneksi");
    }
    $query = mysqli_query ($koneksi,"select*from anggota");
?>
<html>
    <head>
        <title>Menampilkan data anggota</title>
        <link rel="stylesheet" type="text/css" href="style_cinema.css">
    </head>
    <body>
            <form action = "index_cinema.php?page=cari_anggota" method = "post" name="pencarian" id="pencarian">
                <h3 align = 'center'>
            <label>Cari : </label>
            <input type = "text" name="cari" id="search" placeholder="cari">
            <input type="submit" id="kirim" value="Cari">
                </h3>
            
        <table border='1' align='center' height='300px' width='1000px'>
            <tr>
                <td>ID Anggota</td>
                <td>Nama</td>
                <td>No hp</td>
                <td>Email</td>
                <td>Alamat</td>
                <td>Provinsi</td>
                <td>Kota</td>
                <td>JK</td>
                <td>Tanggal Lahir</td>
                <td>Kata Sandi</td>
                <td><a href="index_cinema.php?page=tambah_anggota">Tambah Data</a></td>
            </tr>
<?php
while ($tampil = mysqli_fetch_array ($query))
{
    echo "<tr>
        <td>$tampil[id_anggota]</td>
        <td>$tampil[nama]</td>
        <td>$tampil[no_hp]</td>
        <td>$tampil[email]</td>
        <td>$tampil[alamat]</td>
        <td>$tampil[provinsi]</td>
        <td>$tampil[kota]</td>
        <td>$tampil[jk]</td>
        <td>$tampil[tanggal_lahir]</td>
        <td>$tampil[kata_sandi]</td>
       
       <td><a href='index_cinema.php?page=edit_anggota'>Edit</a>
       
        <a onclick=\"return confirm ('Yakin akan menghapus?');\" href = 'delete_anggota.php?id_anggota=$tampil[id_anggota]'>Hapus</a>
        </td>
        </tr>";
}
?>
        </table>
        </form>
    </body>
</html>