<?php
include('util/header.php');

echo
"
<center>
<form method = 'POST' action = 'mail_signatur_standard.php'>
<input type = 'submit' value = 'Standard Mail an alle Clans aus der Liste'>
</form>
<br>
<form method = 'POST' action = 'mail_signatur_own.php'>
<input type = 'submit' value = 'Eigenes Mail an alle Clans aus der Liste'>
</form>
<br>
<br><a href = 'menu.php'>Hauptmen&uuml;</a>
";
echo "
</center>
";

include('util/footer.php');

?>
