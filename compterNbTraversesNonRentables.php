<?php 

$nbPassagersParTraversee = array( 35 , 10 , 22 , 52 , 15 , 58 , 8 , 73 ) ;
$nbTraverseeNonRentables = 0;


$count = count($nbPassagersParTraversee);
for ($i = 0; $i < $count; $i++) {
	if ($nbPassagersParTraversee[$i]<20 )
		$nbTraverseeNonRentables++;
	}
	
	echo $nbTraverseeNonRentables . " traversées non rentables le 22/09/2022.\n";
	

?>


