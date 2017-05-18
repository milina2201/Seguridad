<?php
function consonantes($cad)
{
	$ab=array("b","c","d","f","g","h","j","k","l","m","n","ñ","p","q","q","r","s","t","v","w","x","y","z");
	$z=0;
	$lon=strlen($cad);
	for($x=1;$x<$lon;$x++)
		for($y=0;$y<23;$y++)
		{
			if($cad[$x]==$ab[$y])
			{
				$conso[$z]=$cad[$x];
				$z++;
			}
		}
		return implode($conso);
}

$Nom=$_GET['nom'];
$Ap=$_GET['ap'];
$Am=$_GET['am'];
$Fec=$_GET['fec'];
$Clav=$_GET['clav'];
$Sex=$_GET['sex'];
$Tar=$_GET['tar'];

$Nom=strtolower($Nom);
$Ap=strtolower($Ap);
$Am=strtolower($Am);
$ape=($pr=substr($Ap,0,2));
$se=substr($Am,0,1);
$ter=substr($Nom,0,1);

$cu=substr($Fec,2,2);
$cu1=substr($Fec,5,2);
$cu2=substr($Fec,8,2);

$a1=substr($Fec,0,4);

$nu=substr(consonantes($Nom),0,1);
$di=substr(consonantes($Ap),0,1);
$on=substr(consonantes($Am),0,1);
$do=$a1<2000?0:'A';
$cu=strtoupper($ape.$se.$ter.$cu.$cu1.$cu2.$Sex.$Clav.$di.$on.$nu.$do);
echo $cu;





?>