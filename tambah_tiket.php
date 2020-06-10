<html>
    <head>
        <title>Tambah Tiket</title>
    </head>
    <body>
        <header>
		  <h3 align='center'>Tambah Data Tiket</h3>
	   </header>
        <form action="insert_tiket.php" method="POST">
            <table align='center'>
                <tr>
                    <td>ID Tiket</td>
                    <td></td>
                    <td><input type="text" name="tiket"></td>
                </tr>
                <tr>
                    <td>ID Pemesanan</td>
                    <td></td>
                    <td><input type="text" name="pemesanan"></td>
                </tr>
                <tr>
                    <td>No Kursi</td>
                    <td></td>
                    <td><input type="text" name="no"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                    <td></td>
                    <td><input type="reset" value="Batal"></td>
                </tr>
                <tr></tr>
                <tr>
                <td></td>
                <td><a href= "index_cinema.php?page=tiket">Batal</a></td>
                <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>