<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
   <meta name="viewport" content="width=device-width,user-scalable=no,initial-
scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
   <title>Conversion de Monedas</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<br>
	<div class="row justify-content-md-center tarjeta">
	<div class="col-sm-8">
			<div class="card border-dark text-center color" style="padding: 10px;">
			<div class="card-body-md"><h2>Conversor de dinero</h2></div>
			<form class="form-row" method="POST">
				<div class="input-group mb-3">
					<span class="input-group-text">Convertir de</span>
					<input type="number" name="cantidad" class="form-control" placeholder="Cantidad de dinero" value="cantidad">					
				</div>
				<div class="input-group mb-3">
					<select class="form-control" name="actual">
            <option value="USD">USD($) Dolar Estadounidense</option>
            <option value="EUR">EUR(€) Euro</option>
            <option value="JPY">JPY(¥) Yen Japones</option>
            <option value="GBP">GBP(£) Libra Esterlina</option>
        	</select>
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text">Convertir a</span>
					<select class="form-control" name="despues">
            <option value="USD2">USD($) Dolar Estadounidense</option>
            <option value="EUR2">EUR(€) Euro</option>
            <option value="JPY2">JPY(¥) Yen Japones</option>
            <option value="GBP2">GBP(£) Libra Esterlina</option>
         	</select>
				</div>	
				<div class="col-12 justify-content-md-center">
					<input type="submit" value="enviar" name="enviar" class="btn btn-primary mb-2">
				</div>				
			</form>
			<?php
		if (isset($_POST['enviar'])):
				$moneda=$_POST['actual'];
				$moneda2=$_POST['despues'];
				$cantidad=$_POST['cantidad'];
				$usd_eur=0.83;
				$usd_gbp=0.72;
				$usd_yen=105.87;
				$eur_usd= 1.21;
				$eur_yen=128.06;
				$eur_gbp=0.87;				
				$yen_usd=0.0094;
				$yen_eur=0.0078;
				$yen_gbp=0.0068;
				$gbp_eur=1.39;
				$gbp_usd=1.15;
				$gbp_yen=147.10;

			if($cantidad>=0):
					switch ($moneda and $moneda2) {
						//dolares
							case $moneda=="USD" and $moneda2=="EUR2":
						echo "<div> $".$_POST['cantidad']." Dolar Estadounidense\n=\n";
						echo "€ ".$_POST['cantidad']*$usd_eur." Euros"."</div>";
							break;
						
							case $moneda=="USD" and $moneda2=="GBP2":
						echo "<div> $".$_POST['cantidad']." Dolar Estadounidense\n=\n";
						echo "£ ". $_POST['cantidad']*$usd_gbp." Libras"."</div>";
							break;

							case $moneda=="USD" and $moneda2=="JPY2":
						echo "<div> $".$_POST['cantidad']." Dolar Estadounidense\n=\n";
						echo "¥ ".$_POST['cantidad']*$usd_yen." Yen"."</div>";
							break;

							//euros
							case $moneda=="EUR" and $moneda2=="USD2":
						echo "<div> €".$_POST['cantidad']." Euros \n=\n";
						echo "$ ".$_POST['cantidad']*$eur_usd." Dolares Estadounidense"."</div>";
							break;

							case $moneda=="EUR" and $moneda2=="JPY2":
						echo "<div> €".$_POST['cantidad']." Euros \n=\n";
						echo "¥ ".$_POST['cantidad']*$eur_yen." Yen"."</div>";
							break;

							case $moneda=="EUR" and $moneda2=="GBP2":
						echo "<div> €".$_POST['cantidad']." Euros \n=\n";
						echo "£ ".$_POST['cantidad']*$eur_gbp." Libras"."</div>";
							break;

							//yen
							case $moneda=="JPY" and $moneda2=="GBP2":
						echo "<div> ¥".$_POST['cantidad']." Yen \n=\n";
						echo "£ ".$_POST['cantidad']*$yen_gbp." Libras"."</div>";
							break;
							case $moneda=="JPY" and $moneda2=="USD2":
						echo "<div> ¥".$_POST['cantidad']." Yen \n=\n";
						echo "$ ".$_POST['cantidad']*$yen_usd." Dolar Estadounidense"."</div>";
							break;
							case $moneda=="JPY" and $moneda2=="EUR2":
						echo "<div> ¥".$_POST['cantidad']." Yen \n=\n";
						echo "€ ".$_POST['cantidad']*$yen_eur." Euro"."</div>";
							break;

							//libras
							case $moneda=="GBP" and $moneda2=="EUR2":
						echo "<div> £".$_POST['cantidad']." Libras \n=\n";
						echo "€ ".$_POST['cantidad']*$gbp_eur." Euro"."</div>";
							break;
							case $moneda=="GBP" and $moneda2=="USD2":
						echo "<div> £".$_POST['cantidad']." Libras \n=\n";
						echo "$ ".$_POST['cantidad']*$gbp_usd." Dolares Estadounidense"."</div>";
							break;
							case $moneda=="GBP" and $moneda2=="JPY2":
						echo "<div> £".$_POST['cantidad']." Libras \n=\n";
						echo "¥ ".$_POST['cantidad']*$gbp_yen." Yen"."</div>";
							break;

							//por si no se escoge ninguna de las anteriores
							default:
								echo "La conversion de moneda que está intentando no es valida, por favor seleccione otro tipo de moneda";
							break;
					}

			elseif($cantidad<0):
				echo "La cantidad que está tratando de convertir no es valida\n por favor ingresar numeros positivos";
			endif;
		endif;
			?>
		</div>
	</div>
	</div>
</body>
</html>