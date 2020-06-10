<html>
    <head>
        <title>Edit Kota</title>
    </head>
    <body>
        <header>
		  <h3 align='center'>Edit Kota</h3>
	   </header>
        <form action="index_cinema.php?page=edit_kota_2" method="POST">
            <table align='center'>
                <tr>
                    <td>ID kota</td>
                    <td>:</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Nama Kota</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                    <td></td>
                    <td><input type="reset" value="Batal"></td>
                </tr>
                 <tr></tr>
                <tr>
                <td></td>
                <td><a href= "index_cinema.php?page=kota">Batal</a></td>
                <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>