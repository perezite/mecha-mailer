<?php
include('util/header.php');

echo
"<center><br><br>Neuen Empf&auml;nger eintragen<br>
(Wichtig: z.B nicht XYZ-Clan sondern XYZ (Beim Mail wird sonst das 'Clan' verdoppelt!))<br><br>
<form method = 'POST' action = 'check.php'>
Name des Clans      : <input type = 'text' name = 'ClanName'><br>
Name des Clan-Tags: <input type = 'text' name = 'Tag'><br>
E-Mail des Clans    : <input type = 'text' name = 'Mail'><br>
<input type = 'submit' value = 'abschicken'>
</form>
<br><a href = 'menu.php'>Hauptmen&uuml;</a>
";

include('util/footer.php');
?>
