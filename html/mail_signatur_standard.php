<?php
include('util/dblogin.php');
include('util/header.php');
	

$sql = "SELECT * FROM mailSignatures";
$result = mysql_query($sql);

echo "<center>";
echo "W&auml;hlen Sie ihre Signatur";

while ($zeile = mysql_fetch_array($result))
{
	$name = $zeile["name"];
	$counter = $zeile["counter"];
	echo "<br><a href = 'mail_check_standard.php?counter=$counter&action=standard'>" . $name . "</a>";
}

echo "<br><br><a href = 'menu.php'>Hauptmen&uuml;</a>";

echo "</center>";

include('util/footer.php');
?>
