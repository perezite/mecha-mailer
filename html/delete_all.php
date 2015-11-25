<?php
include('util/dblogin.php');
include('util/header.php');

$sql = "DELETE * FROM mailinglist";
$result = mysql_query($sql);

echo "<center>";
echo "Mailing-Liste gel&ouml;scht!";

echo "<br><br><a href = 'menu.php'>Hauptmen&uuml;</a>";
echo "</center>";

include('util/footer.php');
?>
