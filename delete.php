<?php
if(isset($_GET['id']))
{
    include('koneksi.php');
    $id_gambar = $_GET['id'];
    $query = mysqli_query($koneksi,"delete from data_gambar where id='$id'");
}
header('location:index.php');
?>