<?php
include_once "library/inc.connection.php";

$kota= $_GET['kota'];
$kec =mysql_query("SELECT id_kec,nama_kec FROM 	kec WHERE id_kabkot='$kota' ORDER BY nama_kec");
echo "<option>--Sleccione Distrito</option>";
while ($k=mysql_fetch_array($kec)) {
	echo "<option value=\"".$k['id_kec']."\">".$k['nama_kec']."</option>\n";
}
?>