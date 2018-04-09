# PHP Project

## Specifikáció
PHP fejlesztői feladat: 
A feladat egy felhasználói beléptető portál elkészítése, tetszőleges kinézettel, a megadott programnyelvekkel.
A portálon belépve különböztessük meg az admin és az átlag felhasználókat. Ezen kívül az adminok kezelhessék a felhasználókat az oldalon.

Alább specifikáljuk a feladatot.

### Elvárások
  1. Saját készítésű program beadása.
  2. Objektum Orientáltság.
  3. Használható programnyelvek: HTML, SQL, PHP, JavaScript (JQuery), CSS 
  4. A programban az elérések relatívak legyenek.

### Program könyvtár felépítése

   - classes : PHP osztályokat tartalmaz
   - js : JavaScript fájlokat tartalmaz
   - template: képek, CSS fájlok stb. tartalmaz

A program az index.php fájlból indul, ami a főkönyvtárban helyezkedik el.

### A program fő elemei

  - Telepítés: Az első oldallátogatásnál bejelentkezés és regisztrációs oldal helyett egy 3 lépésből álló telepítő jelenjen meg. Az első lépésnél az oldal tartalmazzon  egy tájékoztató szöveget a program működéséről és tartalmazza azt, hogy milyen programozási eszközök segítségével hoztuk létre az oldalt. A második lépésnél az oldalon jelenjen meg egy adatbázis regisztrációs form, ahol egy adatbázis csatlakozáshoz szükséges adatokat adhatjuk meg, mint cím, felhasználónév, jelszó és adatbázis neve. Az adatbázis csatlakozást mentsük el - például egy config.ini fájlban - , csatlakozzunk az adatbázishoz és hozzunk létre az adatbázisban egy táblát. A táblát a következőképpen nevezzük el: vezeteknev_keresztnev_Users. A táblában lehessen megkülönböztetni az admin és a normál felhasználókat. Mentsük el a regisztráció idejét és a belépés időpontját. A harmadik lépés pedig egy olyan felület, ahol felvihetjük az admint és az első normál felhasználót. (Ha létezik az adatbázis kapcsolat a config.ini fájlunkban , akkor irányítsuk a felhasználót a bejelentkezés és regisztrációs felületre, ne a telepítőire.)

  - Sikeres telepítés után dobjon minket a kezdőoldalra, ahol lehetőségünk van belépni, vagy egy új felhasználót regisztrálni.
  - Regisztrációnál jól ellenőrizzük le, hogy megfelelően lettek-e az adatok megadva, törekedjünk a biztonságra. Regisztrációnál szükségünk lesz a felhasználó nevére, email címére.
  - Belépésnél figyeljük, hogy admin vagy normál felhasználó lépett-e be. Ha normál, akkor csupán üdvözöljük az új oldalunkon. Adjunk neki kilépési lehetőséget, és írjuk ki a képernyő közepére a felhasználó nevét, és hogy mennyi az idő.
  - Ha adminnal lépünk be, akkor legyen egy listázó gombunk, amit ha lekattintunk, akkor előjön egy lista az aktuális regisztrált felhasználókkal, belépési idejükkel, regisztráció idejével és rangjukkal. Legyen lehetőségünk bannolni, törölni és admin jogot adni. 

Megjegyzés: Az értékelés során a részfeladatokat is figyelembe vesszük, tehát nem jelent kizáró okot, ha a program egészében nem működik!

## Telepítés

Telepítés előtt bizonyosodjon meg róla, hogy joga van írni és olvasni fájlokat a webszerveren, valamint hogy az összes függőséget megfelelően letöltötte. Majd haladjon végig a telepítő lépésein.

A függőségeket a terminálban, vagy a Command Promptban kiadott ```composer install``` paranccsal tölthei le. Amennyiben a composer nincs telepítve ide kattintva kaphat útmutatást.

## Követelmények

Az alkalmazás a következő függőségeket, vagy alternatíváit követeli meg:

1. Apache2 webszerver
2. PHP 7
3. MySQL adatbázis szerver
4. Composer dependenciakezelő

## Implementáció
Az alkalmazás PHPStorm fejlesztői környezetben készült.
