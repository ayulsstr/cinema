<?php
$konek = mysqli_connect("localhost","root","","cinema21");

if (isset($_POST["register"])) 
{
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
        
    $tambah = mysqli_query ($konek, "insert into pengguna values ('$id','$username','$password')");
        
    if ($tambah)
    {
        header ("location:index.php");
    }
        else{
        header ("location:index2.php");
        }
    }     
?>