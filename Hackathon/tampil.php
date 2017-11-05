<!DOCTYPE html>
<html>
<head>
	<title>Tampil</title>
</head>
<body>
<table>
	<tr>
		<td>Ussername</td>
		<td>:</td>
		<td><?php echo $_POST['ussername'];?></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><?php echo $_POST['password'];?></td> 
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><?php echo $_POST['nama'];?></td> 
	</tr>
	<tr>
		<td>E-mail</td>
		<td>:</td>
		<td><?php echo $_POST['email'];?></td> 
	</tr>
	<tr>
		<td>Nomor Hape</td>
		<td>:</td>
		<td><?php echo $_POST['number'];?></td> 
	</tr>
</table>
</body>
</html>