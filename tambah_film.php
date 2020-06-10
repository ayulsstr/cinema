<html>
    <head>
        <title>Tambah Film</title>
    </head>
    <body>
        <header>
		  <h3 align='center'>Tambah Data Film</h3>
	   </header>
        <Form action = "index_cinema.php?page=insert_film" method="POST">
            <table align='center'>
                <tr>
                    <td>ID Film</td>
                    <td>:</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td><input type="text" name="judul"></td>
                </tr>
                <tr>
                    <td>Durasi</td>
                    <td>:</td>
                    <td><input type="text" name="durasi"></td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td>:</td>
                    <td><input type="text" name="genre"></td>
                </tr>
                <tr>
                    <td>Sinopsis</td>
                    <td>:</td>
                    <td><input type="text" name="sinopsis"></td>
                </tr>
                <tr>
                    <td>Producer</td>
                    <td>:</td>
                    <td><input type="text" name="producer"></td>
                </tr>
                <tr>
                    <td>Director</td>
                    <td>:</td>
                    <td><input type="text" name="director"></td>
                </tr>
                <tr>
                    <td>Writer</td>
                    <td>:</td>
                    <td><input type="text" name="writer"></td>
                </tr>
                <tr>
                    <td>Cast</td>
                    <td>:</td>
                    <td><input type="text" name="cast"></td>
                </tr>
                <tr>
                    <td>Distributor</td>
                    <td>:</td>
                    <td><input type="text" name="distributor"></td>
                </tr>
                <tr>
                    <td>Website</td>
                    <td>:</td>
                    <td><input type="text" name="website"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                    <td></td>
                    <td><input type="reset" value="Hapus"></td>
                </tr>
                 <tr></tr>
                <tr>
                <td></td>
                <td><a href= "index_cinema.php?page=film">Batal</a></td>
                <td></td>
                </tr>
            </table>
        </Form>
    </body>
</html>