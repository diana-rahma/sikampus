<?php
include('../../conf/config.php');

$normatif = $_GET['nilai_normatif'];
$adaptif = $_GET['nilai_adaptif'];
$produktif = $_GET['nilai_produktif'];

$query = mysqli_query($koneksi, "INSERT INTO tb_nilai (id,nilai_normatif,nilai_adaptif,nilai_produktif) VALUES ('','$normatif','$adaptif', '$produktif')");

header('Location: ../index.php?page=input-nilai')
?>