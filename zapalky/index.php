<html>
<body>

<a href="index.php">restart hry</a><br />

<?
$pocet = $_GET["pocet"];
$cislo = $_GET["cislo"];

if (!isset($cislo))
        $cislo = 12; // kolko sa odcitava

if (!isset($pocet))  
    $pocet = 20; // zaciatocny pocet

if ($cislo > 3 || $cislo < 1)
       	print "Mozete zadat len cisla od 1 po 3<br />"; 
else if ($cislo > $pocet)
	print "chyba - tolko uz sa neda odcitat<br />";
else
     $pocet = $pocet - $cislo;

if ($pocet == 0) {
	print ("Gratulujem, vyhrali ste. Hrate znova.");
	$pocet = 20;
}

?>

<form method="get" action="index.php">
	<input type="submit" name="submit" value="Odoslat" /> <br />
	<input type="password" name="cislo" />
	<input type="hidden" name="pocet" value="<? print $pocet ?>" />
</form>

<?
	if (isset($pocet))
		print "V hre je $pocet zapaliek.\n";
?>
</body>
</html>
