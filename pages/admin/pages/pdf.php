<?php

require_once __DIR__ . '/vendor/autoload.php';

require '../../../config/koneksi.php';
$get=$koneksi->query("SELECT * FROM konten");

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>halaman 1</h1>';
while ($a=$get->fetch_assoc()){
	$html.='<center><h3>'.$a ['topik'] .'</h3></center>
	<center><img src="../../../function/user/images/'. $a['gambar'].'" width="1080px" height="720px" alt=""></center>
	<h5><center> '. $a ['tanggal'].'</center></h5>
	<p>'. $a ['deskripsi'].'</p>';
}
$html.='</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>halaman 1</h1>
</body>
</html>