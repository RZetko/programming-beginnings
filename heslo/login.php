<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sk" lang="sk">
	<head>
		<title>VYPIS</title>
	</head>
	<body>
			
	
<?
$spravne_hesla = array(
	"jozko" => "xxx",
	"ferko" => "yyy",
	"marienka" => "zzz"
);

if (!key_exists($_POST['meno'],$spravne_hesla)) {
	print "ZLY LOGIN";
} else if ($_POST['heslo'] == $spravne_hesla[$_POST['meno']]) {
	print "OK";
} else {
	print "ZLE";
}



?>
</body>
</html>
