<?php
include('util/header.php');
include('util/dblogin.php');

$ClanName = $_GET["ClanName"];
$Tag   = $_GET["Tag"];
$Mail     = $_GET["Mail"];
echo

"
<center>
<br>Folgende Daten wurden eingetragen:<br><br>
Name des Clans      : $ClanName<br>
Name des ClanTags: $Tag<br>
E-Mail des Clans    : $Mail<br>
";
///////////////////////////////////////////////////////////////////////////////////////////////
mysql_query("INSERT INTO `mailinglist` ( `ClanName` , `Tag` , `Mail` ) VALUES ('$ClanName', '$Tag', '$Mail');");

echo "
<a href = 'input.php'>Weiterer Eintrag</a><br>
<a href = 'menu.php'>Hauptmen&uuml;</a>
</center>
";

include('util/footer.php');
?>
