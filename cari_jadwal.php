<html>
    <head>
        <title>Cari Kota</title>
    </head>
    <body>
        <?php
            $koneksi = mysqli_connect ("localhost","root","","cinema21");
            $query = mysqli_query ($koneksi,"select*from jadwal");
        
            if(isset($_POST['cari'])){
		      $cari = $_POST['cari'];
                echo "<h4 align='center'>Hasil pencarian : ".$cari."</h4>";
		      $data = mysqli_query($koneksi,"select * from jadwal where id_jadwal  like '%$cari%'");
            
            if($data){
                echo "<table border='1' align='center'>";
                echo"<td>ID Film</td>
                    <td>Tanggal Pemutaran Awal</td>
                    <td>Jam Pemutaran</td>
                    <td>Id Jadwal</td>
                    <td>No Studio</td>
                    <td>Tanggal Pemutaran Akhir</td>"; 
	
            while($tampil = mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>".$tampil['id_film']." </td>";
            echo "<td>".$tampil['tanggal_pemutaran_awal']."</td>";
            echo "<td>".$tampil['jam_pemutaran']."</td>";
            echo "<td>".$tampil['id_jadwal']." </td>";
            echo "<td>".$tampil['no_studio']."</td>";
            echo "<td>".$tampil['tanggal_pemutaran_akhir']."</td>";
             }
            
            echo "</table>";}}
            echo"<br><a href='index_cinema.php?page=jadwal'>kembali</a>";
        ?>
    </body>
</html>