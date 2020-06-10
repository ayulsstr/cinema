<html>
    <head>
        <title>Edit Jadwal</title>
    </head>
    <body>
        <header>
		  <h3 align='center'>Edit Jadwal</h3>
	   </header>
        <Form action = "index_cinema.php?page=edit_jadwal2" method="POST">
            <table align='center'>
                <tr>
                    <td>ID Film</td>
                    <td>:</td>
                    <td><input type="text" name="idf"></td>
                </tr>
                <tr>
                    <td>Tanggal Pemutaran Awal</td>
                    <td>:</td>
                    <td><input type="text" name="awal"></td>
                </tr>
                <tr>
                    <td>Jam Pemutaran</td>
                    <td>:</td>
                    <td><input type="text" name="jam"></td>
                </tr>
                <tr>
                    <td>ID Jadwal</td>
                    <td>:</td>
                    <td><input type="text" name="idj"></td>
                </tr>
                <tr>
                    <td>No Studio</td>
                    <td>:</td>
                    <td><input type="text" name="no"></td>
                </tr>
                <tr>
                    <td>Tanggal Pemutaran Akhir</td>
                    <td>:</td>
                    <td><input type="text" name="akhir"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                    <td></td>
                    <td><input type="reset" value="Hapus"></td>
                </tr>
                <tr></tr>
                <tr>
                <td></td>
                <td><a href= "index_cinema.php?page=jadwal">Batal</a></td>
                <td></td>
                </tr>
            </table>
        </Form>
    </body>
</html>