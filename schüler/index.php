
<?php
if(!isset($_COOKIE['klasse'])) {
echo "<form method=\"post\" action=\"./aufgaben.php\">
<label for=\"klasse\">Klasse:</label>
	<select id=\"klasse\" name=\"klasse\">
		<option value=\"5a\">5a</option>
		<option value=\"6b\">6b</option>
		<option value=\"7c\">7c</option>
		<option value=\"8c\">8c</option>
	</select> </br>
    <input type=\"submit\" value=\"Senden\">

</form>";
return;
}
else {
	header('Location: http://192.168.2.107/megz/schüler/aufgaben.php'); 
	
}
?> 
