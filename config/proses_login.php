
<?php

$error=''; 

include "koneksi/+connection.php";
if(isset($_POST['submit']))
{				
	$username	= $_POST['username'];
	
	$password	=  md5($_POST['password']);
	$level		= $_POST['level'];
					
	$query = mysqli_query($connection, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query) == 0)
	{
$error = " <h4 style='color:red;'> OPPPSS !!</h4><h5> MAAF, username/password Anda ada yang salah !! </h5>";
	}
	else
	{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['nama']=$row['nama'];
		$_SESSION['level'] = $row['level'];
		
		if($row['level'] == "Administrator" && $level=="1")		
		{
		header("Location:admin/admin.php");
		}
		else if($row['level'] =="anggota" && $level=="2")
		{
			header("Location: anggota.php");
		}
	
		else
		{
			$error = "Failed Login";
		}
	}
}

			
?>