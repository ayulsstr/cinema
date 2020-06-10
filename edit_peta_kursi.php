<html>
    <head>
        <title>Edit Peta Kursi</title>
    </head>
    <body>
        <header>
		  <h3 align='center'>Edit Peta Kursi</h3>
	   </header>
        <form action="index_cinema.php?page=edit_peta_kursi2" method="POST">
            <table align='center'>
                <tr>
                    <td>ID Peta</td>
                    <td>:</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Jumlah Baris</td>
                    <td>:</td>
                    <td><input type="text" name="baris"></td>
                </tr>
                <tr>
                    <td>Jumlah Kolom</td>
                    <td>:</td>
                    <td><input type="text" name="kolom"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                    <td></td>
                    <td><input type="reset" value="Batal"></td>
                </tr>
                <tr></tr>
                <tr>
                <td></td>
                <td><a href= "index_cinema.php?page=peta_kursi">Batal</a></td>
                <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>