<?php
include('util/dblogin.php');
include('util/header.php'); 

$sql = "SELECT * FROM mailinglist";
$result = mysql_query($sql);

echo "<center>Eintrag ver&auml;ndern oder l&ouml;schen<br><br>";
echo
"<table border = '1'>
<tr>
<td></td><td></td>
<td><b>Clan-Name</b></td>
<td><b>Clan-Tag</b></td>
<td><b>E-Mail</b></td>
<td><b>Mail bereits einmal versendet</b></td>
</tr>
";
while ($zeile = mysql_fetch_array($result))
{
	$number = $zeile["counter"];
	$ClanName = $zeile["ClanName"];
	$Tag = $zeile["Tag"];
	$Mail = $zeile["Mail"];
	$sent = $zeile["sent"];
	echo "
	<tr>
	<td><a href = 'update_update_get.php?counter=$number'>&Auml;ndern</a></td>
	<td><a href = 'update_delete_check.php?counter=$number'>L&ouml;schen</a></td>
	<td>$ClanName</td>
	<td>$Tag</td>
	<td>$Mail</td>";
	if ($sent == 0)
		echo "<td>Nein</td>";
	else
		echo "<td>Ja</td>";
	echo "
	</tr>
	";
}
echo "</table><a href = 'menu.php'>Hauptmen&uuml;</a></center>";

include('util/footer.php');
?>
