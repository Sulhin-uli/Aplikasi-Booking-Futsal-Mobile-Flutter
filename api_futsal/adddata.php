<?php

	include 'koneksi.php';
    	
$nama_tim = $_POST['nama_tim'];

$lapangan = $_POST['lapangan'];

$tgl_booking = $_POST['tgl_booking'];

$waktu_mulai= $_POST['waktu_mulai'];

$waktu_selesai= $_POST['waktu_selesai'];


	

	$connect->query("INSERT INTO tabel_booking (nama_tim,lapangan,tgl_booking,waktu_mulai,waktu_selesai) VALUES ('".$nama_tim."','".$lapangan."','".$tgl_booking."','".$waktu_mulai."','".$waktu_selesai."')");



?>