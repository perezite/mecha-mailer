<?php
include('util/header.php');
include('util/dblogin.php');

$ClanName = $_POST["ClanName"];
$Tag   = $_POST["Tag"];
$Mail     = $_POST["Mail"];
/////////////////////////////////////////////////////////////////////////////////////////////
$sql1 = "SELECT * FROM mailinglist WHERE ClanName LIKE '%$ClanName%'";
$sql2 = "SELECT * FROM mailinglist WHERE Tag LIKE '%$Tag%'";
$sql3 = "SELECT * FROM mailinglist WHERE Mail LIKE '%$Mail%'";
$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);
$result3 = mysql_query($sql3);
////////////////////////////////////////////////////////////////////////////////////////////
$count1 = mysql_num_rows($result1);
$count2 = mysql_num_rows($result2);
$count3 = mysql_num_rows($result3);
if ($count1 == 0 AND $count2 == 0 AND $count3 == 0)
{
	echo "
	<form method = 'POST' action = 'insert.php?ClanName=$ClanName&Tag=$Tag&Mail=$Mail'>
	<br><br>Vergleich mit Datenbank ausgef&uuml;hrt, keine &auml;hnlichen Eintr&auml;ge gefunden<br>
	<input type = 'submit' value = '-->Weiter'><br>
	</form>
	";
}
else
{
	echo "
	<form method = 'POST' action = 'insert.php?ClanName=$ClanName&Tag=$Tag&Mail=$Mail'>
	<input type = 'submit' value = 'Trotzdem weiter'>
	</form>
	";
	echo "========================================
	<b><br>$count1 &auml;hnliche(r) Clan-Namen wurden gefunden:<br><br></b>";
	while ($zeile = mysql_fetch_array($result1))
	{
		$AktClanName = $zeile["ClanName"];
		$AktTag = $zeile["Tag"];
		$AktMail = $zeile["Mail"];
		echo
		"<b>Clan-Name: $AktClanName</b><br>
		Tag: $AktTag<br>
		E-Mail: $AktMail<br><br>-----------------<br><br>
		";
	}
	echo "========================================
	<b><br>$count2 &auml;hnliche(r) Tag-Namen wurden gefunden:<br><br></b>";
	while ($zeile = mysql_fetch_array($result2))
	{
		$AktClanName = $zeile["ClanName"];
		$AktTag = $zeile["Tag"];
		$AktMail = $zeile["Mail"];
		echo
		"Clan-Name: $AktClanName<br>
		<b>Tag: $AktTag</b><br>
		E-Mail: $AktMail<br><br>-----------------<br><br>
		";
	}
	echo "========================================
	<b><br>$count3 &auml;hnliche E-Mails wurden gefunden:<br><br></b>";
	while ($zeile = mysql_fetch_array($result3))
	{
		$AktClanName = $zeile["ClanName"];
		$AktTag = $zeile["Tag"];
		$AktMail = $zeile["Mail"];
		echo "
		Clan-Name: $AktClanName<br>
		Tag: $AktTag<br>
		<b>E-Mail: $AktMail</b><br><br>-----------------<br><br>
		";
	}

	echo "
	<form method = 'POST' action = 'insert.php?ClanName=$ClanName&Tag=$Tag&Mail=$Mail'>
	<input type = 'submit' value = 'Trotzdem weiter'>
	</form>
	<br><a href = 'input.php'>Zur&uuml;ck</a>
	<br><a href = 'menu.php'>Hauptmen&uuml;</a>
	";
}

include('util/footer.php');
?>
