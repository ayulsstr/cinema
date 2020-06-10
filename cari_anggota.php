<html>
    <head>
        <title>Cari Anggota</title>
    </head>
    <body>
        <?php
            $koneksi = mysqli_connect ("localhost","root","","cinema21");
            $query = mysqli_query ($koneksi,"select*from anggota");
        
            if(isset($_POST['cari'])){
		      $cari = $_POST['cari'];
                echo "<h4 align='center'>Hasil pencarian : ".$cari."</h4>";
		      $data = mysqli_query($koneksi,"select * from anggota where nama like '%$cari%'");
            
            if($data){
                echo "<table border='1' align = 'center'>";
                echo"<td>ID Anggota</td>
                    <td>Nama</td>
                    <td>No hp</td>
                    <td>Email</td>
                    <td>Alamat</td>
                    <td>Provinsi</td>
                    <td>Kota</td>
                    <td>JK</td>
                    <td>Tanggal Lahir</td>
                    <td>Kata Sandi</td>"; 
	 
            while($tampil = mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>".$tampil['id_anggota']." </td>";
            echo "<td>".$tampil['nama']."</td>";
            echo "<td>".$tampil['no_hp']." </td>";
            echo "<td>".$tampil['email']."</td>";
            echo "<td>".$tampil['alamat']." </td>";
            echo "<td>".$tampil['provinsi']."</td>";
            echo "<td>".$tampil['kota']." </td>";
            echo "<td>".$tampil['jk']."</td>";
            echo "<td>".$tampil['tanggal_lahir']." </td>";
            echo "<td>".$tampil['kata_sandi']."</td>";
             }
            
            echo "</table>";}}
            echo"<br><a href='index_cinema.php?page=anggota'>kembali</a>";
        ?>
    </body>
</html>