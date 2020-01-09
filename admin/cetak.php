<?php
include 'koneksi.php';
$kdid = @$_GET['kdid'];
$sql = mysql_query("select * from tb_user where kode_user = '$kduser'") or die(mysql_error());
$data = mysql_fetch_array($sql);

?>