<?php
include 'koneksi.php';
$kdbrg=@$_GET['kdbrg'];
mysql_query("delete from barang where br_id ='$kdbrg'") or die(mysql_error());

?>

<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
	window.location.href="?page=admin&aksi=tampil_barang";



</script>