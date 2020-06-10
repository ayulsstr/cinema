<html>
    <head>
        <title>Cari Pemesanan</title>
    </head>
    <body>
        <?php
            $koneksi = mysqli_connect ("localhost","root","","cinema21");
            $query = mysqli_query ($koneksi,"select*from pemesanan");
        
            if(isset($_POST['cari'])){
		      $cari = $_POST['cari'];
                echo "<h4 align='center'>Hasil pencarian : ".$cari."</h4>";
		      $data = mysqli_query($koneksi,"select * from pemesanan where id_pemesanan  like '%$cari%'");
            
            if($data){
                echo "<table border='1' align='center'>";
                echo"<td>ID Pemesanan</td>
                    <td>ID Jadwal</td>
                    <td>ID Anggota</td>
                    <td>Jumlah Kursi</td>
                    <td>Total Harga</td>
                    <td>Status Pemesanan</td>
                    <td>Harga</td>"; 
	
            while($tampil = mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>".$tampil['id_pemesanan']." </td>";
            echo "<td>".$tampil['id_jadwal']."</td>";
            echo "<td>".$tampil['id_anggota']." </td>";
            echo "<td>".$tampil['jumlah_kursi']."</td>";
            echo "<td>".$tampil['total_harga']." </td>";
            echo "<td>".$tampil['status_pemesanan']."</td>";
            echo "<td>".$tampil['harga']."</td>";
             }
            
            echo "</table>";}}
            echo"<br><a href='index_cinema.php?page=pemesanan'>kembali</a>";
        ?>
    </body>
</html>