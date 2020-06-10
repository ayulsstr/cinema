<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Web Dinamis Dengan PHP</title>
        <link rel="stylesheet" type="text/css" href="style_cinema.css">
        <script type="text/javascript" src="jquery.js"></script>
    </head>

    <body>
    <div class="content">
        <header>
            <h4 align="right"><?php 
                session_start();  
                if(!isset($_SESSION["username"]))  
                {  
                    header("location:index_cinema.php");  
                }  
                echo '<button><a href="logout.php" >Logout</a></button>'; 
                ?>
            </h4>
            <h1>CINEMA 21</h1>
        </header>

        <div class="menu">
            <ul>
                <li><a href="index_cinema.php?page=home">HOME</a></li>
                <li><a href="index_cinema.php?page=anggota">ANGGOTA</a></li>
                <li><a href="index_cinema.php?page=kota">KOTA</a></li>
                <li><a href="index_cinema.php?page=cinema">CINEMA</a></li>
                <li><a href="index_cinema.php?page=film">FILM</a></li>
                <li><a href="index_cinema.php?page=jadwal">JADWAL</a></li>
                <li><a href="index_cinema.php?page=studio">STUDIO</a></li>
                <li><a href="index_cinema.php?page=peta_kursi">PETA KURSI</a></li>
                <li><a href="index_cinema.php?page=peta_kursi_detail">PETA KURSI DETAIL</a></li>
                <li><a href="index_cinema.php?page=pemesanan">PEMESANAN</a></li>
                <li><a href="index_cinema.php?page=tiket">TIKET</a></li>
            </ul>
        </div>

        <div class="badan">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
                case 'home' :
                    include "home.php";
                    break;
                case 'anggota':
                    include "tampil_anggota.php";
                    break;
                case 'kota':
                    include "tampil_kota.php";
                    break;
                case 'cinema':
                    include "tampil_cinema.php";
                    break;
                case 'film':
                    include "tampil_film.php";
                    break;
                case 'jadwal':
                    include "tampil_jadwal.php";
                    break;
                case 'studio':
                    include "tampil_studio.php";
                    break;
                case 'peta_kursi':
                    include "tampil_peta_kursi.php";
                    break;
                case 'peta_kursi_detail':
                    include "tampil_peta_kursi_detail.php";
                    break;
                case 'pemesanan':
                    include "tampil_pemesanan.php";
                    break;
                case 'tiket':
                    include "tampil_tiket.php";
                    break;
                    
                case 'tambah_anggota':
                    include "tambah_anggotaa.php";
                    break;
                case 'insert_anggota';
                    include "insert_anggotaa.php";
                    break;
                case 'edit_anggota';
                    include "edit_anggota.php";
                    break;
                case 'edit_anggota_2';
                    include "edit_anggota_2.php";
                    break;
                case 'cari_anggota';
                    include "cari_anggota.php";
                    break;
                case 'tambah_kota':
                    include "tambah_kota.php";
                    break;
                case 'insert_kota';
                    include "insert_kota.php";
                    break;
                case 'edit_kota';
                    include "edit_kota.php";
                    break;
                case 'edit_kota_2';
                    include "edit_kota_2.php";
                    break;
                case 'cari_kota';
                    include "cari_kota.php";
                    break;
                case 'tambah_cinema':
                    include "tambah_cinema.php";
                    break;
                case 'insert_cinema';
                    include "insert_cinema.php";
                    break;
                case 'edit_cinema';
                    include "edit_cinema.php";
                    break;
                case 'edit_cinema_2';
                    include "edit_cinema2.php";
                    break;
                case 'cari_cinema';
                    include "cari_cinema.php";
                    break;
                case 'tambah_film';
                    include "tambah_film.php";
                    break;
                case 'insert_film';
                    include "insert_film.php";
                    break;
                case 'edit_film';
                    include "edit_film.php";
                    break;
                case 'edit_film2';
                    include "edit_film2.php";
                    break;
                case 'cari_film';
                    include "cari_film.php";
                    break;
                case 'tambah_jadwal';
                    include "tambah_jadwal.php";
                    break;
                case 'edit_jadwal';
                    include "edit_jadwal.php";
                    break;
                case 'edit_jadwal2';
                    include "edit_jadwal2.php";
                    break;
                case 'cari_jadwal';
                    include "cari_jadwal.php";
                    break;    
                case 'tambah_studio';
                    include "tambah_studio.php";
                    break;
                case 'edit_studio';
                    include "edit_studio.php";
                    break;
                case 'edit_studio2';
                    include "edit_studio2.php";
                    break;
                case 'cari_studio';
                    include "cari_studio.php";
                    break;
                case 'tambah_peta_kursi';
                    include "tambah_peta_kursi.php";
                    break;
                case 'edit_peta_kursi';
                    include "edit_peta_kursi.php";
                    break;
                case 'edit_peta_kursi2';
                    include "edit_peta_kursi2.php";
                    break;
                case 'cari_peta_kursi';
                    include "cari_peta_kursi.php";
                    break;
                case 'tambah_peta_kursi_detail';
                    include "tambah_peta_kursi_detail.php";
                    break;
                case 'edit_peta_kursi_detail';
                    include "edit_peta_kursi_detail.php";
                    break;
                case 'edit_peta_kursi_detail2';
                    include "edit_peta_kursi_detail2.php";
                    break;
                case 'cari_peta_kursi_detail';
                    include "cari_peta_kursi_detail.php";
                    break;
                case 'tambah_pemesanan';
                    include "tambah_pemesanan.php";
                    break;
                case 'edit_pemesanan';
                    include "edit_pemesanan.php";
                    break;
                case 'edit_pemesanan2';
                    include "edit_pemesanan2.php";
                    break;
                case 'cari_pemesanan';
                    include "cari_pemesanan.php";
                    break;
                case 'tambah_tiket';
                    include "tambah_tiket.php";
                    break;
                case 'edit_tiket';
                    include "edit_tiket.php";
                    break;
                case 'edit_tiket2';
                    include "edit_tiket2.php";
                    break;
                case 'cari_tiket';
                    include "cari_tiket.php";
                    break;
            }
        }else{
            include "home.php";
        }
         ?>
        </div>
    </div>
    </body>
</html>