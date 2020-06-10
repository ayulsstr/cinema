<html>
    <head>
        <title>Tambah studio</title>
    </head>
    <body>
        <header>
		  <h3 align='center'>Tambah Data Studio</h3>
	   </header>
        <form action="insert_studio.php" method="POST">
            <table align='center'>
                <tr>
                    <td>No Studio</td>
                    <td>:</td>
                    <td><input type="text" name="no"></td>
                </tr>
                <tr>
                    <td>Nama Studio</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Kapasitas</td>
                    <td>:</td>
                    <td><input type="text" name="kapasitas"></td>
                </tr>
                <tr>
                    <td>Harga Weekday</td>
                    <td>:</td>
                    <td><input type="text" name="weekday"></td>
                </tr>
                <tr>
                    <td>Harga Wekend</td>
                    <td>:</td>
                    <td><input type="text" name="weekend"></td>
                </tr>
                <tr>
                    <td>Id Cinema</td>
                    <td>:</td>
                    <td><input type="text" name="cinema"></td>
                </tr>
                <tr>
                    <td>Id Peta</td>
                    <td>:</td>
                    <td><input type="text" name="peta"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                    <td></td>
                    <td><input type="reset" value="Batal"></td>
                </tr>
                <tr></tr>
                <tr>
                <td></td>
                <td><a href= "index_cinema.php?page=studio">Batal</a></td>
                <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>