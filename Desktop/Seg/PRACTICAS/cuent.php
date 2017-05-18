<?php
echo "<!DCOTYPE html>
		<html lang='es'>
		<head>
			<meta charset='UTF-8'/>
		</head>
		<body>";
		$cuen=$_GET['cuen'];
		$simp=substr($cuen,5,4);
		echo $simp;
		echo substr($cuen,0,5);
echo "</body>
	</html>";
?>	