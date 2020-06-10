<html>
    <head>
        <title>Tambah Cinema</title>
    </head>
    <body>
        <header>
		  <h3 align='center'>Tambah Data Cinema</h3>
	   </header>
        <Form action = "insert_cinema.php" method="POST">
            <table align='center'>
                <tr>
                    <td>ID Cinema</td>
                    <td>:</td>
                    <td><input type="text" name="idc"></td>
                </tr>
                <tr>
                    <td>ID Kota</td>
                    <td>:</td>
                    <td><input type="text" name="idk"></td>
                </tr>
                <tr>
                    <td>Nama Cinema</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                    <td></td>
                    <td><input type="reset" value="Hapus"></td>
                </tr>
                 <tr></tr>
                <tr>
                <td></td>
                <td><a href= "index_cinema.php?page=cinema">Batal</a></td>
                <td></td>
                </tr>
            </table>
        </Form>
    </body>
</html>