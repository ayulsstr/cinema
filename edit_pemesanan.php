<html>
    <head>
        <title>Edit Pemesanan</title>
    </head>
    <body>
        <header>
		  <h3 align='center'>Edit Pemesanan</h3>
	   </header>
    <form action = "index_cinema.php?page=edit_pemesanan2" method="POST">
        <table align='center'>
            <tr>
                <td>ID Pemesanan</td>
                <td>:</td>
                <td><input type="text" name="pemesanan"></td>
            </tr>
            <tr>
                <td>ID Jadwal</td>
                <td>:</td>
                <td><input type="text" name="jadwal"></td>
            </tr>
            <tr>
                <td>ID Anggota</td>
                <td>:</td>
                <td><input type="text" name="anggota"></td>
            </tr>
            <tr>
                <td>Jumlah Kursi</td>
                <td>:</td>
                <td><input type="text" name="jml"></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td><input type="text" name="ttl"></td>
            </tr>
            <tr>
                <td>Status Pemesanan</td>
                <td>:</td>
                <td><input type="text" name="stat"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
                <td></td>
                <td><input type="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
    </body>
</html>