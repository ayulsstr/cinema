<html>
    <head>
        <title>Cari Kota</title>
    </head>
    <body>
        <?php
            $koneksi = mysqli_connect ("localhost","root","","cinema21");
            $query = mysqli_query ($koneksi,"select*from kota");
        
            if(isset($_POST['cari'])){
		      $cari = $_POST['cari'];
                echo "<h4 align='center'>Hasil pencarian : ".$cari."</h4>";
		      $data = mysqli_query($koneksi,"select * from kota where nama_kota  like '%$cari%'");
            
            if($data){
                echo "<table border='1' align='center' >";
                echo"<td>ID Kota</td>
                    <td>Nama Kota</td>"; 
	
            while($tampil = mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>".$tampil['id_kota']." </td>";
            echo "<td>".$tampil['nama_kota']."</td>";
             }
            
            echo "</table>";}}
            echo"<br><a href='index_cinema.php?page=kota'>kembali</a>";
        ?>
    </body>
</html>