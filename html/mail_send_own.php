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

$text = $_POST["text"];							// Text der E-Mail
$add_sign = isset($_POST["add_sign"]);			// Signatur anhängen?
if ($add_sign){
	$text = $text . "\n\n" . $signatur;
}

$sql = "SELECT * FROM mailinglist";
$result = mysql_query($sql);

while ($zeile = mysql_fetch_array($result)) {
	$queryStr = "recipient_" . $zeile["counter"];
	
	if(isset($_POST[$queryStr])) {
		$ClanName = $zeile["ClanName"];
		$Mail = $zeile["Mail"];
		$counter = $zeile["counter"];
		$sql_update = "UPDATE `mailinglist` SET `sent` = '1' WHERE `counter` = '$counter'";
		mysql_query($sql_update);
		echo "Mail versendet an: $Mail<br>";
	}
}

echo("<br>Folgende Mail wurde versendet: <br>");
echo("<textarea name='mail_content' cols='50' rows='10'>");
echo $text;
echo("</textarea>");

echo "<br><a href = 'menu.php'>Hauptmen&uuml;</a>";
echo "</center>";

include('util/footer.php');

?>
