<?php
include('util/dblogin.php');
include('util/header.php');

$counter = $_GET["counter"];
$sql = "SELECT * FROM mailinglist WHERE counter = $counter";
$result = mysql_query($sql);
$zeile = mysql_fetch_array($result);
$ClanName = $zeile["ClanName"];
$Tag = $zeile["Tag"];
$Mail = $zeile["Mail"];
$sent = $zeile["sent"];

echo "<center>";
echo "
<form method = 'POST' action = 'update_update.php?counter=$counter'>
Clan-Name: <input type = 'text' name = 'ClanName' value = '$ClanName'><br>
Clan-Tag: <input type = 'text' name = 'Tag' value = '$Tag'><br>
E-Mail: <input type = 'text' name = 'Mail' value = '$Mail'><br>
";
if ($sent == 0)
	echo "E-Mail auf 'gesendet' setzen<input type = 'checkbox' name = 'SentChange'><br>";
else
	echo "E-Mail auf 'nicht gesendet' setzen<input type = 'checkbox' name = 'SentChange'><br>";
echo"
<input type = 'submit' value = '&Auml;ndern'>
</form>
";
echo "<a href = 'menu.php'>Hauptmen&uuml;</a></center>";

include('util/footer.php');
?>
