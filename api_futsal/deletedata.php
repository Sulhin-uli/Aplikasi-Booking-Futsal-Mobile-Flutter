
<?php

include 'koneksi.php';

$id=$_POST['id'];

$connect->query("DELETE FROM tabel_booking WHERE id=".$id);



?>

