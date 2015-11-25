<?php
include('util/dblogin.php');
include('util/header.php');

echo("<center>");
echo("<b>Hinweis: Mail-Funktion aus Sicherheitsgr&uuml;nden deaktiviert</b><br><br>");

$counter_sign = $_GET["counter"];				// Nummer der Signatur
$sql_sign = "SELECT * FROM mailSignatures WHERE counter = '$counter_sign'";
$result_sign = mysql_query($sql_sign);
$zeile_sign = mysql_fetch_array($result_sign);
$signatur = $zeile_sign["signatur"];
$absender = $zeile_sign["mail_sign"];

$sql = "SELECT * FROM mailinglist";
$result = mysql_query($sql);

while ($zeile = mysql_fetch_array($result)) {
	$queryStr = "recipient_" . $zeile["counter"];
	
	if(isset($_POST[$queryStr])) {
		$ClanName = $zeile["ClanName"];
		$Mail = $zeile["Mail"];
		$counter = $zeile["counter"];
		
		// define the mail text content
		$text =
"
Hallo $ClanName-Clan

Sucht ihr noch einen leistungsfähigen Gameserver,
IRC-Bouncer oder Voiceserver für euren Clan und das zu einem guten Preis?

Dann schaut doch mal bei www.company.com vorbei.

Eure Vorteile bei uns sind:

-Top Erreichbarkeit
-Perfekte Performance
-Bewährte Technik
-Kompetenter Support
-10 GB Map und Modspace
-Keine Einrichtungsgebühren
-Voiceserver inklusive (gleiche Slotsanzahl wie Gameserver)
-Voller Adminzugriff
-Easy-Changing Webinterface zum Wechseln der gewünschten Games ist vorhanden
-FTP-Zugang zu allen Game-Files
-Keine Traffic-Limite

Mit freundlichen Grüssen

$signatur
";
		
		$sql_update = "UPDATE `mailinglist` SET `sent` = '1' WHERE `counter` = '$counter'";
		mysql_query($sql_update);
		echo "Mail versendet an: $Mail<br>";
	}
}

echo("<br>Folgende Mail wurde versendet: <br>");
echo("<textarea name='mail_content' cols='50' rows='10'>");
echo $text;
echo("</textarea>");

echo "<br><a href = 'menu.php'>Hauptmenü</a>";
echo "</center>";

include('util/footer.php');

?>
