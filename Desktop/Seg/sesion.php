<?php
echo "<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title></title>
</head>
<body>";
if (isset($_POST['ver']))
{
	$contrasena=$_POST['con'];
	$contrasena= hash('md5',$contrasena);
	$con=mysql_connect('localhost','root',"")
	or die ("server");
	mysql_select_db('REGISTRO',$con)
	or die("database");
	$registro=mysql_query("SELECT * FROM usuarios WHERE Usuario='$_POST[nom]'")
	or die("consulta");
	if (mysql_num_rows($registro)>0)
	{
		while($reg=mysql_fetch_array($registro))
		{
			if($reg['Contrasena']!=$contrasena)
				header ('Location:sesion.php'); 
			else 
				header ('Location:log.php');
		}
	}
else
			header ('Location:sesion.php'); 

}
else
{
	echo"<form action='sesion.php' method='POST'>
	Usuario:<input type='text' name='nom'><br/>
	Contraseña:<input type='password' name='con'><br/>
		<input type='hidden' name='ver'>
		<button>Iniciar Sesi&oacute;n</button><br/>
	</form>";
}
echo "</body>
</html>";
?>