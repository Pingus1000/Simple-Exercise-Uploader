<html>
<head>
<title>Aufgaben</title>
</head>
<body>
<?php
$klasse = htmlspecialchars($_POST['klasse']);

if(!isset($_COOKIE['klasse'])) {
setcookie("klasse", $klasse, time()+60*60*24*7);
}
else{

    $klasse = $_COOKIE['klasse'];

}
$dir = "../lehrer/uploads/$klasse.json";
if(!file_exists($dir)) {
echo "Für deine Klasse gibt es keine Aufgaben";
echo "</br><a href=\"http://192.168.2.107/megz/schüler/reset.php\">Zurück zur Auswahl</a>";
return;
}
echo "<p>Deine ausgewählte Klasse: $klasse</p> </br>";
$datei = file_get_contents($dir);
echo $datei;
echo "</br> <a href=\"http://192.168.2.107/megz/schüler/reset.php\">Zurück zur Auswahl</a>";




?>
</body>
</html>