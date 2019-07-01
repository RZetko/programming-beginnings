<?
	$cislo = $_GET["cislo"];

	if (!isset($cislo))
		$cislo = rand(1, 111);
	else
		$cislo = intval($cislo);

	$tip = $_GET["tip"];
		$tip = intval($tip);
	if (!isset($tip));
		($tip > 0 && $tip < 112); 
		
	if
		$cislo = $tip {
			$cislo = rand(1, 111);




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sk" lang="sk">
	<head>
		<title>Tipovanie</title>
		<style type="text/css" media="all">@import "tipovanie.css";</style>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	</head>

	<body>
		<div class="vonkajsi">
			
			
				<div class="obsah">
					<h1>Tipovanie</h1>
				</div>	
				<div class="instrukcie">
					<Form method="get" action="tipovanie.php">
					<p>Tipnite si náhodné èíslo od 1 do 111 </p> 
					
				</div>	
			

				<div class="tip">
						<?print $cislo;?>
						<input type="box" name="tip" size="5">
						<input type="submit" value="Tipni">
						<input type="hidden" name="cislo" value="<?print $tip;?>" />
				</div>
				<div class="footer">
					<p>Tipovanie &copy; 2009 Zdenko Pikula<p>
				</div>
		</div>

					
	
	</body>

