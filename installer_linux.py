import os, sys, stat
import hashlib
print ("#BlackLivesMatter")
print ("Willkommen zum Installer von Simple-Exercise-Uploder(SEU). by Pingus1000")
print ("Folge einfach den Scritten um SEU auf deinem Server zu konfigurieren")
print ("Bitte gebe den Pfad an wo der SEU Ordner ist (Zum Beispiel: C:\\xampp\\htdocs\\ oder /var/www/html")
pfad = input() 
print ("Welche Domain oder IP verwendest du? (Zum Beispiel: sample.de oder 192.168.2.110)")
domain = input()
print ("Wähle ein Passwort für die Lehrer")
pw = input()
print ("Deine Informationen:")
print (pfad)
print (domain)
print (pw)

if confirm == "j":
    print("Die Installation wird gestartet")
elif confirm == "n":
    print("Bitte starte den Installationsprozess neu")
    lol = input()
    sys.exit("Installationsprozess abgebrochen")
else:
    print("???")
    sys.exit("Installationsprozess abgebrochen ")

pfad1 = pfad
pfad = pfad + "/Simple-Exercise-Uploader"

print("Erstelle Configordner")
config = pfad + "/config"
print (config)
os.mkdir(config)
print ("Schreibe Config")
f = open(pfad + "/config/domain.txt", "w")
f.write(domain)
f.close

f = open(pfad + "/config/path.txt", "w")
f.write(pfad1)
f.close

f = open(pfad + "/config/name.txt", "w")
f.write("Simple-Exercise-Uploader")
f.close
print("Fertig")


print("Erstelle Ordner")

os.mkdir(pfad + "/lehrer/uploads")
os.mkdir(pfad + "/lehrer/uploads/files")
print("Fertig")

print("Erstelle Passwortsetup")
os.mkdir("/etc/Simple-Exercise-Uploader")

hash_obj = hashlib.md5(pw.encode())
pwhash = hash_obj.hexdigest()

f = open("/etc/Simple-Exercise-Uploader/password.txt", "w")
f.write(pwhash)
f.close
print("Fertig")
print("Setze Brechtigungen")

os.chmod(pfad + "/lehrer/uploads", stat.S_IRWXO)
os.chmod(pfad + "/lehrer/uploads/files", stat.S_IRWXO)
os.chmod(pfad + "/config/name.txt", stat.S_IRWXO)
os.chmod("/etc/Simple-Exercise-Uploader/password.txt", stat.S_IRWXO)
print("Fertig")
print("Drücke Enter um die Installation abzuschlieÃŸen")
text = input() 



