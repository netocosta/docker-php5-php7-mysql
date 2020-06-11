<?php
$connect = mysqli_connect("mysql-server", "root", "secret", "db_docker");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>

<table style="width:800px; margin:0 auto; background:#000; text-align:center; font-size:20px" cellspacing="1" cellpadding="0">
	<tr style="background:#fff">
		<td><b>Nome</b></td>
		<td><b>Email</b></td>
		<td><b>Idade</b></td>
	</tr>
	<?php
$exe = mysqli_query($connect, "SELECT * FROM clients ORDER BY id");
while ($result = mysqli_fetch_array($exe, MYSQLI_ASSOC)) {
  ?>
	<tr style="background:#fff">
		<td><?=$result['name']?></td>
		<td><?=$result['email']?></td>
		<td><?=$result['age']?></td>
	</tr>
<?php }?>
</table>

<br />

<center>Total de Dados: <?=mysqli_num_rows($exe);?></center>
