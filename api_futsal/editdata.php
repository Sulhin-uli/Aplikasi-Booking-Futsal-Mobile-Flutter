
<?php



include 'koneksi.php';



$id = $_POST['id'];

$nama_tim = $_POST['nama_tim'];

$lapangan = $_POST['lapangan'];

$tgl_booking = $_POST['tgl_booking'];

$waktu_mulai= $_POST['waktu_mulai'];

$waktu_selesai= $_POST['waktu_selesai'];



$connect->query("UPDATE tabel_booking SET nama_tim='".$nama_tim."', lapangan='".$lapangan."', tgl_booking='".$tgl_booking."', waktu_mulai='".$waktu_mulai."', waktu_selesai='".$waktu_selesai."' WHERE id=". $id);



?>