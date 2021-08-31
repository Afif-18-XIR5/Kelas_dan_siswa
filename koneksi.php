<?php
$conn=mysqli_connect('localhost','root','','belajar_laravel');
if (mysqli_connect_error()){
    printf("Koneksi ke Database Gagal", mysqli_connect_error());
    exit();
}
?>