<?php
include('util/dblogin.php');
include('util/header.php');

$counter = $_GET["counter"];
$ClanName = $_POST["ClanName"];
$SentChange = $_POST["SentChange"];
$Tag = $_POST["Tag"];
$Mail = $_POST["Mail"];

$sql_update = "UPDATE mailinglist SET ClanName = '$ClanName', Tag = '$Tag', Mail = '$Mail' WHERE counter = $counter";
mysql_query($sql_update);

if ($SentChange)			// Wurde der Button zum Ändern von 'gesendet' gedrückt?
{
	$sql_get = "SELECT * FROM mailinglist WHERE counter = '$counter'";
	$result_get = mysql_query($sql_get);
	$zeile_get = mysql_fetch_array($result_get);
	$sent = $zeile_get["sent"];
	if ($sent == 0)
	{
			$sql_update2 = "UPDATE mailinglist SET sent = '1' WHERE counter = $counter";
			mysql_query($sql_update2);
	}
	else
	{
			$sql_update2 = "UPDATE mailinglist SET sent = '0' WHERE counter = $counter";
			mysql_query($sql_update2);
	}
	// Nochmal Abfrage durchführen, damit bei den Status-Infos (unten) die richtigen Information angezeigt werden
	$sql_get = "SELECT * FROM mailinglist WHERE counter = '$counter'";
	$result_get = mysql_query($sql_get);
	$zeile_get = mysql_fetch_array($result_get);
	$sent = $zeile_get["sent"];
}

echo "<center>";
echo "
<b>Eintrag ge&auml;ndert:</b><br>
Clan-Name: $ClanName<br>
Clan-Tag: $Tag<br>
E-Mail: $Mail<br>";
if ($sent == 0)
	echo "Mail-Status: nicht gesendet<br>";
else
	echo "Mail-Status: gesendet<br>";
echo "
<br><br><a href = 'update_get.php'>Weiteren Eintrag &auml;ndern</a><br><a href = 'menu.php'>Hauptmen&uuml;</a><br>
";
echo "</center>";

include('util/footer.php');
?>
