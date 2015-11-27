<?php
include('util/dblogin.php');
include('util/header.php');

$counter = $_GET["counter"];

$sql = "SELECT * FROM mailinglist WHERE counter = '$counter'";
$result = mysql_query($sql);
$zeile = mysql_fetch_array($result);
$ClanName = $zeile["ClanName"];
$Tag = $zeile["Tag"];
$Mail = $zeile["Mail"];

echo "<center>";
echo "
<form method = 'POST' action = 'update_delete.php'>
<b>Eintrag wirklich löschen?:</b><br>
Clan-Name: $ClanName<br>
Clan-Tag: $Tag<br>
E-Mail: $Mail<br>
<input type = 'hidden' name = 'counter' value = '$counter'>
<input type = 'submit' value = 'L&ouml;schen'>
</form>
<br><br><a href = 'update_get.php'>Zur&uuml;ck</a><br><a href = 'menu.php'>Hauptmen&uuml;</a><br>
";
echo "</center>";

include('util/footer.php');
?>
