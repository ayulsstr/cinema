<html>
    <head>
        <title>Cari Cinema</title>
    </head>
    <body>
        <?php
            $koneksi = mysqli_connect ("localhost","root","","cinema21");
            $query = mysqli_query ($koneksi,"select*from cinema");
        
            if(isset($_POST['cari'])){
		      $cari = $_POST['cari'];
                echo "<h4 align='center'>Hasil pencarian : ".$cari."</h4>";
		      $data = mysqli_query($koneksi,"select * from cinema where nama_cinema  like '%$cari%'");
            
            if($data){
                echo "<table border='1' align='center'>";
                echo"<td>ID Cinema</td>
                    <td>ID Kota</td>
                    <td>Nama CInema</td>"; 
	
            while($tampil = mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>".$tampil['id_cinema']." </td>";
            echo "<td>".$tampil['id_kota']."</td>";
            echo "<td>".$tampil['nama_cinema']."</td>";
             }
            
            echo "</table>";}}
            echo"<br><a href='index_cinema.php?page=cinema'>kembali</a>";
        ?>
    </body>
</html>