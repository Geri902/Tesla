# NGiNX és PHP 8.2 webszerver docker alapokon

## Előkészítés

1. Hozzon létre egy `www` mappát. Ez lesz DocumentRoot. Az oldal tartalma ide kerüljön.
A weboldal tartalmát a későbbiekben majd ide kell belemásolni.

2. Másolja le a `.env-example` fájlt `.env` néven. Amennyiben szükséges állítsa be portot (`PORT_WEB`).

## Indítás

Az indításhoz futtassa az a,lábbi parancsot:

```bash
docker compose up -d
```

 - Az `up` indítja el a konténereket, ha még nem volt build, akkor a build is lefut.

 - A `-d` hatására a háttérben indul, visszakapjuk a konzolt.

A parancs kiadásához abban a mappában kell lenni, ahol a .env fájlt található, hogy az abban lévő beállításokat használja.

## Leállítás és törlés


```bash
docker compose stop
```

A `stop` leállítja az éppen futó konténereket.

```bash
docker compose down
```

A `down` nem csak leállítja, hanem törli is  akonténereket.

## Csatlakozás a konténerhez

```bash
docker compose exec app fish
```

Az `app` helyére a szolgáltatása neve kerül: `app` vagy `web` attól függően, hogy melyik konténert szeretnénk elérni.
Kilépni az `exit` paranccsal lehet.

## Hibakeresés és logolás

A futó konténerek ellenőrzése:

```bash
docker compose ps
```

Amennyiben nem fut a kettő (`web`,`app`) közül az egyik, úgy érdemes megnézni a logfájlokat.

```bash
docker compose logs
```

A fenti parancs az összes konténer által logolt adatot megmutatja.

```bash
docker compose logs web -f
```

A fenti parancs folyamatosan mutatja a `web` szolgáltatása, azaz a webszerver log adatait.
Itt látható, ha valaki betölti valamelyik oldalt.
Kilépni a `ctrl`+`c`-vel lehet.