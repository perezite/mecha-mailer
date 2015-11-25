<?php
include('util/header.php');

echo
"
<center>
Hauptmen&uuml;:<br><br>
<form method = 'POST' action = 'input.php'>
<input type = 'submit' value = 'Neuer Eintrag'>
</form>
<br>
<form method = 'POST' action = 'update_get.php'>
<input type = 'submit' value = 'Eintrag &auml;ndern/l&ouml;schen'>
</form>
<br>
<form method = 'POST' action = 'mail_menu.php'>
<input type = 'submit' value = 'Mailing-Liste versenden'>
</form>
<br>
</center>
";

include('util/footer.php');
?>
