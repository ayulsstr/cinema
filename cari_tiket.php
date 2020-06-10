<html>
    <head>
        <title>Cari Tiket</title>
    </head>
    <body>
        <?php
            $koneksi = mysqli_connect ("localhost","root","","cinema21");
            $query = mysqli_query ($koneksi,"select*from tiket");
        
            if(isset($_POST['cari'])){
		      $cari = $_POST['cari'];
                echo "<h4 align='center'>Hasil pencarian : ".$cari."</h4>";
		      $data = mysqli_query($koneksi,"select * from tiket where id_tiket  like '%$cari%'");
            
            if($data){
                echo "<table border='1' align='center'>";
                echo"<td>ID Tiket</td>
                    <td>ID Pemesanan</td>
                    <td>No Kursi</td>"; 
	
            while($tampil = mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>".$tampil['id_tiket']." </td>";
            echo "<td>".$tampil['id_pemesanan']."</td>";
            echo "<td>".$tampil['no_kursi']."</td>";
             }
            
            echo "</table>";}}
            echo"<br><a href='index_cinema.php?page=tiket'>kembali</a>";
        ?>
    </body>
</html>