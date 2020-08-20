<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Examen</title>
</head>
<body>
	<h2>LA CRUEL REALIDAD</h2><br><br>

	<?php

	$importe = 1000;
	$iva = $importe * 0.16;
	$subtotal = $importe + $iva;
	$isr = $importe * .10;
	$otroIva = 160.7;
	$total = $subtotal - $isr - $otroIva;

	echo ("IMPORTE: " . $importe) . "<br>";
	echo ("IVA: " . $iva . "<br>");
	echo ("SUBTOTAL: " . $subtotal . "<br>");
	echo ("RETENCIÓN ISR: " . $isr . "<br>");
	echo ("RETENCIÓN IVA: " . $otroIva . "<br>");
	echo ("TOTAL: " . $total);

	?>
</body>
</html>
