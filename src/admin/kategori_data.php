<?php
// Validasi supaya yang mengakses hanya Admin (yang sudah login)
include_once "../library/inc.sesadmin.php";
?>
<table width="800" border="0" cellpadding="2" cellspacing="1" class="table-border">
  <tr>
    <td colspan="2" align="right"><h1>CATEGORIAS</h1></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="right"><a href="?open=Kategori-Add" target="_self"><img src="../images/btn_add_data.png" border="0" /></a></td>
  </tr>
  
  <tr>
    <td colspan="2">
	<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th width="35" align="center" bgcolor="#CCCCCC">Nro</th>
        <th width="650" bgcolor="#CCCCCC">Nombre Categoria</th>
        <td colspan="2" align="center" bgcolor="#CCCCCC"><strong>Herramientas</strong></td>
      </tr>
	<?php
	$mySql = "SELECT * FROM kategori ORDER BY nm_kategori ASC";
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor  = 0; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
		$Kode = $myData['kd_kategori'];
	?>
      <tr>
        <td align="center"><?php echo $nomor; ?></td>
        <td><?php echo $myData['nm_kategori']; ?></td>
        <td width="44" align="center"><a href="?open=Kategori-Edit&Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data">Editar</a></td>
        <td width="44" align="center"><a href="?open=Kategori-Delete&Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('Seguro que deseas eliminar esta CATEGORÍA ... ?')">Eliminar</a></td>
      </tr>
      <?php } ?>
    </table></td>
  </tr>
</table>
