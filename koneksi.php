<?php
$id='localhost';
$nama='root';
$pass='';
$db='akademik';

$con=mysql_connect($id,$nama,$pass);

if ($con) {
	$buka=mysql_select_db($db);
	if (!$buka) {
		die("database tidak dapat dibuka");
	}
	# code...
}else{
	die("Konekksi");
}



?>