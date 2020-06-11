<?php
$connect = mysql_connect("mysql-server", "root", "secret");

if (!$connect) {
  die("<h1>Falha na conexao com o Banco de Dados!</h1>");
}
$db = mysql_select_db("db_docker");
?>


<table style="width:800px; margin:0 auto; background:#000; text-align:center; font-size:20px" cellspacing="1" cellpadding="0">
	<tr style="background:#fff">
		<td><b>Nome</b></td>
		<td><b>Email</b></td>
		<td><b>Idade</b></td>
	</tr>
	<?php
$exe = mysql_query("SELECT * FROM clients ORDER BY id");
while ($rs = mysql_fetch_array($exe)) {
  ?>
	<tr style="background:#fff">
		<td><?=$rs['name']?></td>
		<td><?=$rs['email']?></td>
		<td><?=$rs['age']?></td>
	</tr>
<?php }?>
</table>

<br />

<center>Total de Dados: <?=mysql_num_rows($exe);?></center>

