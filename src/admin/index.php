<?php
session_start();
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Platea21: Tienda Online</title>
<link href="../style/button.css" rel="stylesheet" type="text/css">
<link href="../style/style_admin.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/tigra_calendar/tcal.css" />
<script type="text/javascript" src="../plugins/tigra_calendar/tcal.js"></script> 
<script language="javascript" type="text/javascript" src="../plugins/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
</head>
<div id="wrap">
<body>
<table width="100%"  class="table-main">
  <tr>
    <td height="103" colspan="2"><a href="?open"><div id="header">&nbsp;</div></a></td>
  </tr>
  <tr valign="top">
    <td width="15%"  style="border-right:5px solid #DDDDDD;"><div style="margin:5px; padding:5px;"><?php include "menu.php";?></div></td>
    <td width="69%" height="550"><div style="margin:5px; padding:5px;"><?php include "buka_file.php";?></div></td>
  </tr>
</table>
</body>
</div>
</html>
