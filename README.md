# Weboldal
## Bevezetés
A weboldal a játék statisztikai adatinak megjelenítéséhez készült. Ezen keresztül lehet beregisztrálni, és csapatot választani. Továbbá megtalálható rajta két eredménytábla is, amin az egyiken  csapatok pontszáma a másikon pedig a játékosok pontszáma van. Játékos be tud regisztrálni az oldalon, és be tud jelentkezni. Meg tudja nézni a saját és csapata statisztikáját.

## Elvárások
-	Bejelentkezés
-	Leaderboards
-	Regisztráció
-	Felhasználó statisztikái
-	Csapatok statisztikái

## Szoftver környezet
Ingyenes tárhelyet használunk a nethely.hu-t, ami rendelkezik 5MB ingyenes adatbázissal. Php 8.0, Laravel 9.x, ngnix ami egy web szerver, html, bootstrap 5, és saját css. Local környezethez PhpStorm, Docker az adatbázishoz, npm, composer-t.

## Use case Diagram
![image](https://user-images.githubusercontent.com/33898680/168993878-eaecd65e-6f45-49a4-9723-c0bdfadbace0.png)

## Local Környezet felállítása

Szükséges egy fejlesztői környezet, ingyenes és javasolt a Visual Studi Code de nagyon ajánlott a PhpStorm.
- PhpStorm https://www.jetbrains.com/idea/ 
- Visual Studio Code https://code.visualstudio.com/

Kell telepíteni Git Bash-t ez hasznos lesz parncsok futtatására (ajánlott hozzá a WIndows Terminal a Microsoft Store-ból)
Kell telepíteni composert-t https://getcomposer.org/ v2.3.5 ez a PHP függőségek telelpítéséhez kell.
Majd Node.js https://nodejs.org/en/ v16.15 ez pedig javascript fügőségek miatt.
Kell továbbá docker-t is telelpíteni https://www.docker.com/ és megfelelően be konfigurálni, ehhez sok youtube videót lehet találni.

Ha ezek megvannak akkor a /rogue-hero/docker mappában nyitni kell egy git-bash console-t és kiadni a 
```
docker-compose up 
```
parancsot ezzel elindul a MySql szerver.

Ezután fel kell csatlakozni az adatbázira egy adatbázis kezelő szoftver segítségével, ajánlott a https://www.heidisql.com/.
A csaktalkozáshoz szükséges adatok:
```
ip: 127.0.0.1
Felhasználónév: root
Jelszó: 123456
```

Ha sikerült csatlakozni akkor le kell futattni a rogue-hero.sql fájlban található SQL lekérdezéseket.

Ha ezek is megvannak akkor nyitni kell egy git-bash console-t a rogu-hero mappábanés kiadni ezt a őarancsot:
```
php artisan serve
```

Ilyenkor elindul a szerver és elérhető lesz a http://127.0.0.1:800 linken.
