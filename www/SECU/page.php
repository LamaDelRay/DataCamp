<!DOCTYPE html>
<html>

<form method="page.php" method="post">
<input type="hidden" name="bouton" value="p2008" />
<input type="submit" name="envoi" value="Paris 2008" /></form>

<form method="page.php" method="post">
<input type="hidden" name="bouton" value="p2009" />
<input type="submit" name="envoi" value="Paris 2009" /></form>

<form method="page.php" method="post">
<input type="hidden" name="bouton" value="p2010" />
<input type="submit" name="envoi" value="Paris 2010" /></form>

<form method="page.php" method="post">
<input type="hidden" name="bouton" value="p2011" />
<input type="submit" name="envoi" value="Paris 2011" /></form>

<form method="page.php" method="post">
<input type="hidden" name="bouton" value="p2012" />
<input type="submit" name="envoi" value="Paris 2012" />
</form>

<form method="page.php" method="post">
<input type="hidden" name="bouton" value="p2013" />
<input type="submit" name="envoi" value="Paris 2013" />
</form>

<!--<form method="page.php" method="post">
<input type="hidden" name="bouton" value="2009" />
<input type="submit" name="envoi" value="2009" />
</form> -->

 <form method="page.php" method="post">
<input type="hidden" name="bouton" value="BACK" />
<input type="submit" name="envoi" value="Retour" />
</form>

<?php 
$value = "";
if (isset($_GET["bouton"]))
{
	$value = $_GET["bouton"];
}
if($value=="p2008")
	 include ("crimparis2008.php");

elseif ($value=="p2009") 
	include ("crimparis2009.php");

elseif ($value=="p2010") 
	include ("crimparis2010.php");

elseif ($value=="p2011") 
	include ("crimparis2011.php");

elseif ($value=="p2012") 
	include ("crimparis2012.php");

elseif ($value=="p2013") 
	include ("crimparis2013.php");

elseif ($value=="BACK")
	header("Location:index.php");


?>
 </html>