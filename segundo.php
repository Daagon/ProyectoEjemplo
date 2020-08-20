<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Examen</title>
</head>
<body>

	<?php

	$total = 2000;
	$descuento;
	$meses;

	switch ($total)
	{
		case 2000:
			$meses = 12;
			$descuento = .20;
			break;

		case 1000:
			$meses = 6;
			$descuento = .10;
			break;

		case 500:
			$meses = 3;
			$descuento = .05;
			break;
		
		default:
			# code...
			break;
	}

	$resultado =  $total - ($total * $descuento);
	$final = $resultado / $meses;

	echo ("Tu total con descuento es: " . $resultado . "<br>");
	echo ("Tus pagos mensuales (" . $meses . " meses sin intereses): " . $final);

	?>
</body>
</html>
