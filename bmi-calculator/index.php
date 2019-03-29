<?php
	$gewicht = $_GET["gewicht"];
	$lengte = $_GET["lengte_cm"];
	BMIcalc($gewicht,$lengte);
	function BMIcalc($gewicht,$lengte){
		$lengte = $lengte / 100;
    echo "Jouw Gewicht is: " . $gewicht . " kg.<br>";
    		echo "Jouw Lengte is: " . $lengte . " m<br>";
    		$Bmi = $gewicht / ($lengte * $lengte);
    		echo "Jouw BMI is: " . $Bmi . "<br>";
}
?>
