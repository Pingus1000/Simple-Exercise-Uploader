import os,sys,hashlib
pwdest = "/etc/Simple-Exercise-Uploader/password.txt" # Ändere diese Zeile, wenn die Datei wo anders gespeichert ist!
print ("Dieser Script ändert das Passwort für die Lehrer")
pwfirst = "einSicheresPasswort69"
pwsec = "einSicheresPasswort69"

print ("Bitte gib das neue Passwort ein.")
pwfirst = input()
print ("Wiederhole das Passwort.") 
pwsec = input()

if (pwfirst != pwsec):
    print("Die Passwörter sind unterschiedlich. Bitte versuche es erneut")
    lol = input()
    sys.exit("Starte einfach das Programm neu")
else:
    print("Passwort wird geändert")
    hash_obj = hashlib.md5(pwfirst.encode())
    pwhash = hash_obj.hexdigest()
    f = open(pwdest, "w")
    f.write(pwhash)
    f.close
    print("Passwort wurde geändert")
    lol = input()
