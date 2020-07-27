<?php
include('koneksi.php');
if(isset($_GET['id'])) 
{
    $query = mysqli_query($koneksi,"select * from data_gambar where id='".$_GET['id']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["tipe_gambar"]);
    echo $row["gambar"];
}
else
{
    header('location:index.php');
}
?>