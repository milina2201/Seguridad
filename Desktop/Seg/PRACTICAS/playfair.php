<?php
echo "<!DOCTYPE html>
		<html lang='es'>
			<head>
				<meta charset='UTF-8'>
			</head>
		<body>
			<form action='playfair.php' method='POST'>
				Pon lo que quieres codificar:<input type='text' name='enun'><br/>
				El numero del playfair:<input type='number' name='num'>
				<input type='hidden' name='verificador'>
				<input type='submit'>
			<form>
			<br/>";		
		if(isset($_POST['verificador'])){
		echo "<em>Su cifrado es: </em>";
		$n=$_POST['num'];
		$cod=$_POST['enun'];
		$tam=strlen($cod);
		$conta=0;
		for($x=0;$x<$tam;$x++){
			if($cod[$x]!=' ')
					$fras[$conta]=$cod[$x];
				else
					$conta=$conta-1;
			$conta=$conta+1;
			}
		$fras = implode('',$fras);
		$tamanio=strlen($fras);
		$div=$tamanio/$n;
		if($tamanio%$n!=0)
			$div=$div+1;
		for($x=0;$x<$n;$x++)
			for($y=0;$y<$div;$y++){
				$pos=($n*$y)+$x;
				if(isset($fras[$pos]))
				echo $fras[$pos];
			}
			}
echo "	</body>
		</html>";
?>