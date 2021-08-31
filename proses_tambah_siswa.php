<?php
if ($_POST){
    $Nama_Siswa=$_POST['Nama_Siswa'];
    $Tanggal_Lahir=$_POST['Tanggal_Lahir'];
    $Gender=$_POST['Gender'];
    $Alamat=$_POST['Alamat'];
    $Username=$_POST['Username'];
    $Password= $_POST['Password'];
    $ID_Kelas=$_POST['ID_Kelas'];
    $ID_Jurusan=$_POST['ID_Jurusan'];
    if(empty($Nama_Siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";

    } elseif(empty($Username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($Password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (Nama_Siswa,Tanggal_Lahir, Gender, Alamat, Username, Password, ID_Kelas, ID_Jurusan) value ('".$Nama_Siswa."','".$Tanggal_Lahir."','".$Alamat."','".$Gender."','".$Username."','".md5($Password)."','".$ID_Kelas."','".$ID_Jurusan."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tambah_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }

    }
}
?>