<?php
require('src/Tribonacci.php');
require('src/functions.php');
use Tribo\Tribonacci;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<meta name="application-name" content="Tribonacci"/>
	<title>Tribonacci</title>
    <meta name="description" content="Une suite de Tribonacci" />
    <link rel="stylesheet" type="text/css" href="web/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
</head>
<body>

	<section>
			<h1>Tribonacci</h1>
			<p id="description">Une suite de Tribonacci</p>
			<div id="containerNbr">
				<div>
					<form method="POST" action="#">
						<div class="margin-top">
							[
								<?php
									$termes = [];
									for ($i=1; $i <= Tribonacci::NOMBRE_ELEMENT_OBLIGATOIRE  ; $i++) { 

										$terme = 1;
										if( isset($_POST['t'.$i]) )
										{
											$terme = $_POST['t'.$i];

										}
										array_push($termes, $terme);


										echo '<div class="terme"><input type="number" name="t'.$i.'" value="'. $terme.'" /></div>';
									}


									$n = isset($_POST['n']) ? $_POST['n'] : 10;

									$res = Tribonacci::tribonacci($termes, $n);

								?>
							]

							<label for="n">n = </label> <input type="number" id="n" name="n" min="0" value="<?php echo $n ?>">
						</div>
						<div class="margin-top">
							<button type="submit">Calculer</button>
						</div>
					</form>
				</div>
				<code class="margin-top">
				tribonacci( <?php afficherTableau($termes); ?> , <?php echo $n; ?> ) = <?php afficherTableau($res); ?>
				</code>
				
			</div>
	</section>

	<footer>
		Ahmadi Abasse - 2016 -
	</footer>

</body>
</html>