
<?php
$domain = file_get_contents('../config/domain.txt');
$programmname = "megz";
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
	header("Location: http://$domain/$programmname/schüler/aufgaben.php"); 
	
}
?> 
