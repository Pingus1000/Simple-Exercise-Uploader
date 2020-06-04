import os, sys, stat
print ("#BlackLivesMatter")
print ("Willkommen zum Installer von Simple-Exercise-Uploder(SEU). by Pingus1000")
print ("Folge einfach den Scritten um SEU auf deinem Server zu konfigurieren")
print ("Bitte gebe den Pfad an wo der SEU Ordner ist (Zum Beispiel: C:\\xampp\\htdocs\\ oder /var/www/html")
pfad = input() 
print ("Welche Domain oder IP verwendest du? (Zum Beispiel: sample.de oder 192.168.2.110)")
domain = input()
print ("Deine Informationen:")
print (pfad)

print (domain)
print ("Sind die Informationen korrekt? (j|n)")
confirm = input()
if confirm == "j":
    print("Die Installation wird gestartet")
else:
    print("Bitte schreibe welche Information falsch ist?")
    print("Domain")
    print("Pfad")
    print("Nichts")
    wrong = input()
    if wrong == "Domain":
        print ("Welche Domain oder IP verwendest du? (Zum Beispiel: sample.de oder /192.168.2.110)")
        domain = input() 
    elif wrong == "Pfad":
        print ("Bitte gebe den Pfad an wo der SEU Ordner ist (Zum Beispiel: C:\\xampp\\htdocs\\ oder /var/www/html")
        pfad = input()
    else:
        print ("Es scheint alles korrekt zu sein. Starte Installation") 

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
os.mkdir("C:\\xampp\\config")

hash_obj = hashlib.md5(pw.encode())
pwhash = hash_obj.hexdigest()

f = open("C:\\xampp\\config\\password.txt", "w")
f.write(pwhash)
f.close
print("Fertig")

print("Drücke Enter um die Installation abzuschließen")
text = input() 



