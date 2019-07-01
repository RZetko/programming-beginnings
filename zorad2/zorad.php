<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sk" lang="sk">
	<head>
		<title>lalala</title>
		<style type="text/css" media="all">@import "zorad.css";</style>
	<div class="obsah">
<?
	$cisla = array("cislo" => $_POST['cislo'], "cislo1" => $_POST['cislo1'], "cislo2" => $_POST['cislo2'], "cislo3" => $_POST['cislo3'], "cislo4" => $_POST['cislo4']);
	sort($cisla);
	foreach ($cisla as $num =>$val){
	print  "<$val\n";
}
	
?>

