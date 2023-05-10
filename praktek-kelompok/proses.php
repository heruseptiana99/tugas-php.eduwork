<?php 
    include('koneksi.php');
    $nama = $_POST['nama'];
    $sex = $_POST['sex'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $tambah = mysqli_query($conn, "INSERT INTO `anggota` (`nama`, `username`, `password`, `sex`, `telp`, `alamat`, `email`, `tgl_entry`, `role`) VALUES ('$nama', '', '', '$sex', '$telp', '$alamat', '$email', '', '');");

    header("Location:index.php?berhasil=1");


?>