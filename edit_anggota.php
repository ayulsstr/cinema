<html>
<head>
	<title>Edit Anggota</title>
</head>
<body>
	<header>
		<h3 align='center'>Edit Anggota</h3>
	</header>
	<form action="index_cinema.php?page=edit_anggota_2" method="POST">
        <table align='center'>
			<tr>
				<td>ID Anggota</td>
                <td>:</td>
				<td><input type="Nomor" name="id_anggota"></td>
			</tr>
			<tr>
				<td>Nama</td>
                <td>:</td>
				<td><input type="Text" name="nama"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
                <td>:</td>
				<td><input type="Nomor" name="no"></td>
			</tr>
			<tr>
				<td>Email</td>
                <td>:</td>
				<td><input type="Email" name="email"></td>
			</tr>
			<tr>
				<td>Alamat</td>
                <td>:</td>
				<td><input type="Text" name="alamat"></td>
			</tr>
			<tr>
				<td>Provinsi</td>
                <td>:</td>
				<td><input type="Text" name="prov"></td>
			</tr>
			<tr>
				<td>Kota</td>
                <td>:</td>
				<td><input type="Text" name="kota"></td>
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
				<td><input type="Date" name="tgl" ></td>
			</tr>
			<tr>
				<td>Kata Sandi</td>
                <td>:</td>
				<td><input type="Password" name="pass"></td>
			</tr>
			<tr>
				<td><input type="submit" name="Edit" value="edit"></td>
                <td></td>
				<td><input type="reset" name="Reset" value="batal"></td>
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