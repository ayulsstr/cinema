<html>
    <head>
        <title>Edit Peta Kursi Detail</title>
    </head>
    <body>
        <header>
		  <h3 align='center'>Edit Kota</h3>
	   </header>
        <form action="index_cinema.php?page=edit_peta_kursi_detail2" method="POST">
            <table align='center'>
                <tr>
                    <td>ID Peta Detail</td>
                    <td>:</td>
                    <td><input type="text" name="detail"></td>
                </tr>
                <tr>
                    <td>ID Peta</td>
                    <td>:</td>
                    <td><input type="text" name="peta"></td>
                </tr>
                <tr>
                    <td>No Kursi</td>
                    <td>:</td>
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
                <td><a href= "index_cinema.php?page=peta_kursi_detail">Batal</a></td>
                <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>