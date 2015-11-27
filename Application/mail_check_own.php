<?php
include('util/dblogin.php');
include('util/header.php');

$action = $_GET["action"];
$sql = "SELECT * FROM mailinglist";
$result = mysql_query($sql);
$number = mysql_num_rows($result);				// Anzahl Datensätze
$counter = $_GET["counter"];					// Die Zahl der Signatur
$PHP_SELF = $_SERVER["PHP_SELF"];

echo "<center>";
echo "<form method = 'POST' action = 'mail_send_own.php?counter=$counter&number=$number&action=own'>";
//echo "<form method = 'POST' action = 'mailSendTest.php'>";
echo "<input type = 'submit' value = 'Mails versenden'><br>";
/////////////////////////////////////////////////////////////////////////////////////////////////
// Mail-Eingabe anzeigen
$counter = $_GET["counter"];
$number = $_GET["number"];

echo "
Eigenen Mail Text eintragen:<br>
<textarea rows = '10' cols = '50' name = 'text' value = 'text'></textarea><br>
Signatur ans Mail anh&auml;ngen: <input type = 'checkbox' value = 'add_sign' name = 'add_sign' checked><br>
<br>
";
/////////////////////////////////////////////////////////////////////////////////////////////////
echo "<table border = '1'>";
echo "
<tr>
<td>Clan-Name</td><td>Clan-Tag</td><td>E-Mail</td>
<td>Mail an diesen Clan versenden<br>Bereits versendete Mails sind automatisch nicht markiert</td>
</tr>
";
while ($zeile = mysql_fetch_array($result))
{
	$counter = $zeile["counter"];
	$ClanName = $zeile["ClanName"];
	$Tag = $zeile["Tag"];
	$Mail = $zeile["Mail"];
	echo "<tr>";
	echo "<td>$ClanName</td>";
	echo "<td>$Tag</td>";
	echo "<td>$Mail</td>";
	if ($zeile["sent"] == 0)
	{
		echo "<td><input type = 'checkbox' name = 'recipient_$counter' value = '' checked></td>";
	}
	else
	{
		echo "<td><input type = 'checkbox' name = 'recipient_$counter' value = ''></td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "<input type = 'submit' value = 'Mails versenden'>";
echo "</form>";

echo "<br><a href = 'menu.php'>Hauptmenü</a>";
echo "</center>";

include('util/footer.php');
?>
