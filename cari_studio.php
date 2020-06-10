<html>
    <head>
        <title>Cari Studio</title>
    </head>
    <body>
        <?php
            $koneksi = mysqli_connect ("localhost","root","","cinema21");
            $query = mysqli_query ($koneksi,"select*from studio");
        
            if(isset($_POST['cari'])){
		      $cari = $_POST['cari'];
                echo "<h4 align='center'>Hasil pencarian : ".$cari."</h4>";
		      $data = mysqli_query($koneksi,"select * from studio where nama_studio like '%$cari%'");
            
            if($data){
                echo "<table border='1' align='center'>";
                echo"<td>No Studio</td>
                    <td>Nama Studio</td>
                    <td>Kapasitas</td>
                    <td>Harga weekday</td>
                    <td>Harga Weekend</td>
                    <td>ID Cinema</td>
                    <td>ID Peta</td>"; 
	
            while($tampil = mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>".$tampil['no_studio']." </td>";
            echo "<td>".$tampil['nama_studio']."</td>";
            echo "<td>".$tampil['kapasitas']." </td>";
            echo "<td>".$tampil['harga_weekday']."</td>";
            echo "<td>".$tampil['harga_weekend']." </td>";
            echo "<td>".$tampil['id_cinema']."</td>";
            echo "<td>".$tampil['id_peta']."</td>";
             }
            
            echo "</table>";}}
            echo"<br><a href='index_cinema.php?page=studio'>kembali</a>";
        ?>
    </body>
</html>