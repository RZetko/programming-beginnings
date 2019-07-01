<?
	$zapalky = $_GET["zapalky"];

	if (!isset($zapalky))
		$zapalky = rand(20, 50);
	else
		$zapalky = intval($zapalky);

	$ubrat = $_GET["ubrat"];

	$chyba = "";

	if (isset($ubrat)) {
		$ubrat = intval($ubrat);

		if ($ubrat > $zapalky)
			$chyba = "tolko ich uz nie je";
		else if ($ubrat < 4 && $ubrat > 0)
			$zapalky = $zapalky - $ubrat;
		else
			$chyba = "Ubrali ste zlý počet!";
	}

	if ($zapalky <= 0) {
		$zapalky = rand(20, 50);
		$chyba = "Gratulujem, vyhrali ste. Nová hra.";
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sk" lang="sk">
	<head>
		<title>Zápalky</title>
		<style type="text/css" media="all">@import "zapalky.css";</style>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	</head>

<body>

	<div class="vonkajsi">
		<div class="nadpis">
			<h1>Zápalky</h1>
		</div>

		<div class="instrukcie">
			<p>Cieľom hry je zobrať všetky zápalky. Môžete	 ubrať jednu, dve, alebo tri naraz.
			Kto zoberie poslednú, vyhráva.</p>
			<p>Ak prehrávate, môžete <a href="zapalky.php"> reštartovať hru</a> a začať znova.</p> 
		</div>
	
		<div class="obsah">
			<div class="chyba">
				
				<p><?print $chyba;?></p>
			</div>		

			<div class="formular">
				<p>V hre je <b><?print $zapalky;?></b> zápaliek.</p>
				<form method="get" action="zapalky.php">
					Uber
					<input type="text" name="ubrat" size="3" />
					zápaliek. 
					<input type="submit" value="Ubrať!" />
					<input type="hidden" name="zapalky" value="<?print $zapalky;?>" />

				</form>
			</div>
		</div>
		

		<div class="footer">
			<p>Zápalky &copy; 2009 Zdenko Pikula</p>
		</div>

	</div>
</body>

</html>



