<?php 
    include('koneksi.php');
    $id_anggota = $_GET['id_anggota'];
    $nama = $_POST['nama'];
    $sex = $_POST['sex'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $tambah = mysqli_query($conn, "UPDATE anggota SET nama = '$nama', sex = '$sex', telp = '$telp', email='$email', alamat = '$alamat' WHERE id_anggota = '$id_anggota' ");

    header("Location:index.php?berhasil=3");


?>