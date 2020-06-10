<html>
    <head>
        <title>Tambah Anggota</title>
    </head>
    
    <body>
        <header>
		  <h3 align='center'>Tambah Data Anggota</h3>
	   </header>
        <form action="index_cinema.php?page=insert_anggota" method="POST">
            <table align= 'center'>
                <tr>
                    <td>ID Anggota</td>
                    <td>:</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>No hp</td>
                    <td>:</td>
                    <td><input type="text" name="no"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>:</td>
                    <td><input type="text" name="prov"></td>
                </tr>
                <tr>
                    <td>Kota</td>
                    <td>:</td>
                    <td><input type="text" name="kota"></td>
                </tr>
                <tr>
                    <td>JK</td>
                    <td>:</td>
                    <td><input type="Radio" name="jk" value="L" checked>L
                        <input type="Radio" name="jk" value="P" >P</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tgl"></td>
                </tr>
                <tr>
                    <td>Kata Sandi</td>
                    <td>:</td>
                    <td><input type="text" name="sandi"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                    <td></td>
                    <td><input type="reset" value="Reset"></td>
                </tr>
                <tr></tr>
                <tr>
                <td></td>
                <td><a href= "index_cinema.php?page=anggota">Batal</a></td>
                <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>