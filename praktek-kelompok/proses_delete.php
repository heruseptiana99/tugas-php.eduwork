<?php

	$id_anggota = $_GET['id_anggota'];

	include('koneksi.php');

	$query = mysqli_query($conn, "DELETE FROM anggota WHERE id_anggota = '$id_anggota' ");

	header("Location:index.php?berhasil=2");

?>