<html>
 <head>
     <title>Dateien werden hochgeladen</title>
</head>
<body>       
<?php 

$allowTypes = array("1" => "application/vnd.oasis.opendocument.text", "2" => "application/pdf", "3" => "image/jpeg", "4" => "image/png", "5" => "application/vnd.oasis.opendocument.spreadsheet", "6" => ".txt = text/plain");
$klasse = htmlspecialchars($_POST['klasse']); // Angegeben Klasse
$fach = htmlspecialchars($_POST['fach']); // Angegebens Fach
$abgabe = htmlspecialchars($_POST['abgabe']); //Abgabedatum
$datei = $_FILES['userfile']['name']; // Name der Datei
$dateipfad = "uploads/files/$datei"; //pfad von Anhang
$dateitype = $_FILES['userfile']['type'];
$filename = "uploads/$klasse.json";
$uploaddir = "/var/www/html/megz/lehrer/uploads/files/";
$filecontent = "<a href=\"http://192.168.2.107/megz/lehrer/$dateipfad\">$fach bis zum $abgabe</a> </br>

";

$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


    
if (empty($abgabe)) {
    echo "Du musst einen Abgabetermin definieren! <a href=\"./upload.php\">Pobiere es nochmal.</a>";
    return;
}
if (in_array($dateitype, $allowTypes)) {
    echo "Der Dateityp ist erlaubt </br>";
}
else {
    echo "Das hat nicht geklappt. Es ist nur eine bestimmte Auswahl von Dateitypen erlaubt, um einen Angriff zu verhindern. </br> Du denkst dein Dateityp sollte auf die Liste gesetzt werden? Dann konkatire den Admin. </br> Der Dateityp ist auf der Liste? Es könnte auch sein, dass die Datei zu groß ist und vom Server nicht hochgeladen werden kann. Versuche die Datei zu komprimieren!";
    return;
}


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    
    echo "Die Datei wurde erfolgreich hochgeladen.\n";
} else {
    echo "<pre>";
    echo "Da ist etwas schief gelaufen und die Datei konnte nicht hochgeladen werden. Das Problem kann am Server liegen. Bitte kontaktiere den Administrator.\n";
    echo 'Fehlercode: ';
    print_r($_FILES['userfile']['error']);
    echo "</pre>";
}

file_put_contents($filename, $filecontent, FILE_APPEND); //Inhalt der Datei

?>
</body>
</html>
