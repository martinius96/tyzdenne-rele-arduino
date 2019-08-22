# Týždenné relé
**Používaním projektu sa osoba zaväzuje k dodržiavaniu zmluvných podmienok MIT licencie, pod ktorou je projekt šírený! Uvedomuje si riziká, obmedzenia a svoje povinnosti. Všeobecne o MIT licencii: https://sk.wikipedia.org/wiki/MIT_licencia**
#
**Stručný popis:**
* Týždenné riadenie relé s nastavením času zapnutia
* Relé sú aktívne v nastavenom čase vo web rozhraní vo všetkých dňoch počas týždňa.
* Ovládanie až 16 relé výstupov s centrálnou webaplikáciou, možno použiť jedno/dve Arduiná
* Login systém s možnosťou zmeny mena a hesla
#
**Hardvér pre projekt:**
* <img src="https://www.arduino-board.com/images/thumbs/mega2560.jpg" width="64" height="64"> Arduino Mega 2560
* <img src="https://images.ua.prom.st/553985637_w128_h128_cid2424009_pid346622822-69b058aa.jpg" width="64" height="64"> Ethernet W5100
* <img src="https://tshop.r10s.com/52a/df7/aedb/26ae/5056/dc90/08e7/11c2e7bc142c600c737637.jpg?_ex=128x128" width="64" height="64"> 16 kanálové relé (10A pri 230V max)
# Podporte projekt
* https://www.paypal.me/chlebovec
#
**Inštalácia systému**
* Stiahnuť repozitár
* Nahrať súbory webovej časti na FTP
* Upraviť Arduino program (dostupný vo web rozhraní) na svoju doménu, umiestnenie súborov v rámci priečinka s projektom
* Prípadne možno použiť testovacie webové rozhranie na ktoré je Arduino program nastavený https://arduino.php5.sk/rele2/
* Prihlasovacie meno a heslo **admin**
* Arduino sa pripája do webového rozhrania raz za 5 minút, kedy načíta a aplikuje všetky stavy pre relé
# Screenshoty
<img src="https://i.imgur.com/luH290O.png" style="display: block; max-width: 100%; height: auto;" alt="Týždenné relé cez Arduino - webaplikácia" title="Týždenné relé cez Arduino - webaplikácia">
<img src="https://i.imgur.com/nsZmsoF.png" style="display: block; max-width: 100%; height: auto;" alt="Týždenné relé cez Arduino - webaplikácia" title="Týždenné relé cez Arduino - webaplikácia">
<img src="https://i.imgur.com/KLHSjfj.png" style="display: block; max-width: 100%; height: auto;" alt="Týždenné relé cez Arduino - webaplikácia" title="Týždenné relé cez Arduino - webaplikácia">
