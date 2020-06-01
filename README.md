# Simple-Exercise-Uploader
Der Simple Exercise Uploader ist eine einfache und kostenlose Möglichkeit für Schulen Aufgaben hochzuladen <br>
## Wichtiger Hinweis! Zurzeit ist der Uploadbereich noch ungeschützt und jeder kann Dateien hochladen. In einem update wird dies behoben!
## Wie installiere ich SEU?
Ganz einfach. Unter Linux nutzt du in dem Ordner von deinem Webserver (Bei Apache2 findest du den Order zum Beispiel hier: `/var/www/html`) `git clone https://github.com/Pingus1000/Simple-Exercise-Uploader.git`, wechselst dann mit `cd Simple-Exercise-Uploader`das Verzeichnis und führst den Installer mit `sudo python3 installer_linux.py`aus. Der Installer füht dich dann durch die Installation.

Unter Windows ist es etwas anders. Du musst dir ZIP Datei runterladen und in dem Ordner von deinem Webserver entpacken (Zum Beipspiel xampp). Dann ist es wichtig, dass der Ordner `Simple-Exercise-Uploader` heißt und nicht anders. Führe dann den Installer für Windows aus. Auch hier führ dich der Installer duch die Installation.

Unter Mac... Nö!

Du vertraust dem Installer nicht oder hast kein Python installiert? Kein Problem! Du kannst auch alles per Hand installieren. Lege dazu folgende Ordnerstruktur an. 
```
Simple-Exercise-Uploader
|
|---config
|     `
|     |--domain.txt
|     |--name.txt
|     `--path.txt
|
|--lehrer
|     `uploads
|         `files
|
|--schüler
```
In die `domain.txt` muss deine verwendete Domain oder IPv4-Adresse. </br>
In die `name.txt`muss der Name des Ordners (Standart `Simple-Exercise-Uploader`). </br>
In die `path.txt`muss der Pfad zu dem Programmordner (Zum Beispiel `/var/www/html`). </br>


## Wie nutze und konfiguriere ich SEU?
<b> Noch in Bearbeitung </b>
