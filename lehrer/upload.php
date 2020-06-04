
<?php
$pwdest = "/etc/Simple-Exercise-Uploader/password.txt";
echo "<form  method=\"post\" name=\"aufgabe\" action=\"\">
	<label for \"pw\">Passwort:</label>
	<input type=\"password\" name=\"pw\" id=\"pw\" \>
	<input type=\"submit\" value=\"Senden\">
</form>
";
$pw = htmlspecialchars($_POST['pw']);
$setpw = file_get_contents($pwdest);
$pwhash = md5($pw);
//echo($setpw); 

//echo($pwhash);
if ($setpw == $pwhash) {
echo "
<html>
<head>
<title>Aufgaben hochladen</title>
<meta charset=\"utf-8\">
</head>

<body>
<h1 style=\"color:red;\">Wichtig! Erst lesen!</h1> 
<p style=\"color:red;\">
Wie lade ich Aufgaben hoch? </br>
Du füllst <b>alle</b> Felder in dem Fomular aus und drückst dann auf \"Senden\".</br>
Es ist wichtig, dass deine Datei nach diesem Schema benannt ist: \"Klasse_Fach_Lehrerkürzel_Datum\"<br>
</br>

Ich habe einen Fehler gemacht (falsche Datei hochgeladen, falsche Klasse etc..). Was soll ich tun? </br>
Bitte kontatiere den Administrator. Dann kann dir geholfen werden.</br>
</br>
Warum ist diese Seite so hässlich? </br>
Der Programmcode für diese Seite war mir wichtiger als das Aussehen und ich hatte absolut keine Zeit.  </br>

</p>
<form enctype=\"multipart/form-data\"  method=\"post\" name=\"aufgabe\" action=\"./action.php\">
 <label for=\"klasse\">Klasse:</label>
	<select id=\"klasse\" name=\"klasse\">
		<option value=\"5a\">5a</option>
		<option value=\"6b\">6b</option>
		<option value=\"7c\">7c</option>
		<option value=\"8c\">8c</option>
	</select> </br>
	<label for=\"fach\">Fach:</label>
	<select id=\"fach\" name=\"fach\">
		<option value=\"Deutsch\">Deutsch</option>
		<option value=\"Mathe\">Mathe</option>
		<option value=\"Englisch\">Englisch</option>
		<option value=\"Informatik\">Informatik</option>
	</select> </br>
	<label for=\"userfile\">Anhang</label>
	<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"30000000\" />
	<input type=\"file\" name=\"userfile\" id=\"userfile\" /> </br>
	<label for=\"abgabe\">Abgabedatum</label>
	<input type=\"date\" name=\"abgabe\" id=\"abgabe\"></br>
	<input type=\"submit\" value=\"Senden\">
</form>

</body>

</html>  
";
}

?>
