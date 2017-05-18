<?php
echo "<!DCOTYPE html>
		<html lang='es'>
		<head>
			<meta charset='UTF-8'/>
		</head>
		<body>";
$u=array("a"=>"z", "b"=>"y", "c"=>"x", "d"=>"w", "e"=>"v", "f"=>"u","g"=>"t","h"=>"s", "i"=>"r", "j"=>"q", "k"=>"p"
,"l"=>"o","m"=>"n","n"=>"m", "o"=>"l","p"=>"k","q"=>"j","r"=>"i","s"=>"h","t"=>"g","u"=>"f","v"=>"e","w"=>"d","x"=>"c"
,"y"=>"b","z"=>"a");
$cod=0;	
$pal=$_GET['cod'];
$depal=$_GET['decod'];
$pal2=str_split($depal);
$pal1=str_split($pal);

foreach($pal1 as $ind)
{	foreach($u as $in => $cod )
	if($ind==$in)
		echo $cod;
	
}

foreach($pal2 as $ini)
{
	
		if($ini==$ine)
			echo $code;
			
}
echo "</body>
	</html>";
	
?>