<html>
    <head>
        <title>Cari Peta Kursi</title>
    </head>
    <body>
        <?php
            $koneksi = mysqli_connect ("localhost","root","","cinema21");
            $query = mysqli_query ($koneksi,"select*from peta_kursi");
        
            if(isset($_POST['cari'])){
		      $cari = $_POST['cari'];
                echo "<h4 align='center'>Hasil pencarian : ".$cari."</h4>";
		      $data = mysqli_query($koneksi,"select * from peta_kursi where id_peta  like '%$cari%'");
            
            if($data){
                echo "<table border='1' align='center'>";
                echo"<td>ID Peta</td>
                    <td>Jml Baris</td>
                    <td>Jml Kolom</td>"; 
	
            while($tampil = mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>".$tampil['id_peta']." </td>";
            echo "<td>".$tampil['jml_baris']."</td>";
            echo "<td>".$tampil['jml_kolom']."</td>";
             }
            
            echo "</table>";}}
            echo"<br><a href='index_cinema.php?page=peta_kursi'>kembali</a>";
        ?>
    </body>
</html>