<?php
include('util/dblogin.php');
include('util/header.php');

$counter = $_POST["counter"];

$sql = "SELECT * FROM mailinglist WHERE counter = '$counter'";
$result = mysql_query($sql);
$zeile = mysql_fetch_array($result);
$ClanName = $zeile["ClanName"];
$Tag = $zeile["Tag"];
$Mail = $zeile["Mail"];

$sql2 = "DELETE FROM mailinglist WHERE counter = '$counter'";
mysql_query($sql2);

echo "<center>";

echo "
<b>Eintrag gel&ouml;scht:</b><br>
Clan-Name: $ClanName<br>
Clan-Tag: $Tag<br>
E-Mail: $Mail<br>
<br><br><a href = 'update_get.php'>Weiteren Eintrag &auml;ndern</a><br><a href = 'menu.php'>Hauptmen&uuml;</a><br>
";

echo "</center>";

include('util/footer.php');
?>
