# PHP Project

## Specifikáció
A webalkalmazás feladata, hogy adatbázis csatalkazással felhasználók adatait tárolja és belépést biztosítson a számukra. Amennyiben nincs megadva az adatbázis elérhetőségéhez a config.ini fájl, ezen a telepítőn vezet végig minket az alkalmazás. Amennyiben a telepítés sikeres a bejelentkezés felületre érkezünk ahol beléphetünk a telepítés során létrehozott felhasználónkkal. Sikeres bejelentkezés esetén a helyi dátumot láthatjuk és az admin felületen a felhasználók adatait.

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
