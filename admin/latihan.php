<table align="center" width="90%" border="1">
	<tr style="height: 40px; text-align: center; color: white; background-color: dodgerblue;">
		<th style="text-align: center;"> Nama Lengkap</th>
		<th style="text-align: center;"> Username</th>
		<th style="text-align: center;"> Password</th>
		<th style="text-align: center;"> Foto</th>

	</tr>
	<!-- Untuk Menampilkan data dari DB-->
	<?php 
	include 'koneksi.php';
	$sql = mysql_query("select * from tb_user") or die(mysql_error());

	while ( $tampil = mysql_fetch_array($sql)) {
		# code...
	

	 ?>
	<tr  style="height: 25px;">
		<td> <?php echo $tampil ['nama']; ?> </td>
		<td> <?php echo  $tampil ['username'] ; ?> </td>
		<td> <?php echo $tampil ['pass'] ; ?> </td>
		<td> <img style="width: 60px; height: 50px;" src="assets/user/<?php echo $tampil ['img'] ; ?> ">  </td>
	</tr>
	<?php 
};
	 ?>
	
</table>