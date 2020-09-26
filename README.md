# On-line munkaidő nyilvántartás

A dolgozók (mint felhasználók), bejelentkezést követően megadhatják hogy mettől meddig dolgoztak az adott napon, a tárolt adatokból pedig hónap végén létrejön a "jelenléti ív", azaz a munkaidő nyilvántartás.

A munkaidő csak a helyi hálózatról kezdhető meg, megadni pedig 10 percnél korábbi időpontot nem lehet megadni, de a munkaidő bármikor lezárható korlátozás nélkül, a mentett adatokat nem lehet módosítani, azokra csak módosítási kérelmet lehet rögzíteni, amit az adminisztrátori jogosultságú felhaszálók tudnak jóváhagyni.


---

## Telepítés és függőségek 

- PHP 7+
- Apache mod_rewrite
- MySQL

### Adatbázis

A bejelentkezéshez szükséges egy **auth** nevű tábla az alábbiak szerint:

```sql
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Tábla szerkezet ehhez a táblához `auth`
--

CREATE TABLE `auth` (
  `id` int(100) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_first` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_last` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_dp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastlogin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `authkey` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- A tábla indexei `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name_dp` (`name_dp`) USING BTREE;


--
-- AUTO_INCREMENT a táblához `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
```

---


- JQuery ([JS](/scripts/vendor/jquery/))
- Bootstrap ([JS](/scripts/vendor/bootstrap/), [CSS](/styles/vendor/bootstrap/))
- Normalize ([CSS](/styles/vendor/normalize/))
- Reset ([CSS](/styles/vendor/reset/))
- Popper JS ~~~https://unpkg.com/@popperjs/core@2~~~
