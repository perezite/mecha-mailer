<?php
include('util/dblogin.php');
include('util/header.php');

$sql = "SELECT * FROM mailinglist";
$result = mysql_query($sql);
$number = $_GET["number"];				//Anzahl Datensätze

for ($i = 0; $i < $number; $i++)
{
	$temp_string = "Checkbox" . $i;
	$akt_checkbox = $_POST[$temp_string];
	if ($akt_checkbox 
}

echo "<center>";
echo "</center>";

include('util/footer.php');
?>
