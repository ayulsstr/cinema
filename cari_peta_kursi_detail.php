<html>
    <head>
        <title>Cari Peta Kursi detail</title>
    </head>
    <body>
        <?php
            $koneksi = mysqli_connect ("localhost","root","","cinema21");
            $query = mysqli_query ($koneksi,"select*from peta_kursi_detail");
        
            if(isset($_POST['cari'])){
		      $cari = $_POST['cari'];
                echo "<h4 align='center'>Hasil pencarian : ".$cari."</h4>";
		      $data = mysqli_query($koneksi,"select * from peta_kursi_detail where id_peta_detail  like '%$cari%'");
            
            if($data){
                echo "<table border='1' align='center'>";
                echo"<td>ID Peta Detail</td>
                    <td>ID Peta</td>
                    <td>No Kursi</td>"; 
	
            while($tampil = mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>".$tampil['id_peta_detail']." </td>";
            echo "<td>".$tampil['id_peta']."</td>";
            echo "<td>".$tampil['no_kursi']."</td>";
             }
            
            echo "</table>";}}
            echo"<br><a href='index_cinema.php?page=peta_kursi_detail'>kembali</a>";
        ?>
    </body>
</html>