<html>
    <head>
        <title>Cari Film</title>
    </head>
    <body>
        <?php
            $koneksi = mysqli_connect ("localhost","root","","cinema21");
            $query = mysqli_query ($koneksi,"select*from film");
        
            if(isset($_POST['cari'])){
		      $cari = $_POST['cari'];
                echo "<h4 align='center'>Hasil pencarian : ".$cari."</h4>";
		      $data = mysqli_query($koneksi,"select * from film where judul  like '%$cari%'");
            
            if($data){
                echo "<table border='1' align='center'>";
                echo"<td>ID Film</td>
                    <td>Judul</td>
                    <td>Durasi</td>
                    <td>Genre</td>
                    <td>Sinopsis</td>
                    <td>Producer</td>
                    <td>Director</td>
                    <td>Writer</td>
                    <td>Cast</td>
                    <td>Distributor</td>
                    <td>Website</td>";
	
                
            while($tampil = mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>".$tampil['id_film']." </td>";
            echo "<td>".$tampil['judul']."</td>";
            echo "<td>".$tampil['durasi']." </td>";
            echo "<td>".$tampil['genre']."</td>";
            echo "<td>".$tampil['sinopsis']." </td>";
            echo "<td>".$tampil['producer']."</td>";
            echo "<td>".$tampil['director']." </td>";
            echo "<td>".$tampil['writer']."</td>";
            echo "<td>".$tampil['cast']." </td>";
            echo "<td>".$tampil['distributor']."</td>";
            echo "<td>".$tampil['website']." </td>";
             }
            
            echo "</table>";}}
            echo"<br><a href='index_cinema.php?page=film'>kembali</a>";
        ?>
    </body>
</html>