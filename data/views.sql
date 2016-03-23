-- Schnaeppchen Query:
SELECT bezeichnung, gewicht, 'Kunstwerk' AS ist
FROM Kunstwerk NATURAL JOIN Produkt
WHERE schaetzwert < 2000
UNION
SELECT bezeichnung, gewicht, 'Standardsortiment' AS ist
FROM Standardsortiment NATURAL JOIN Produkt
WHERE preis < 3;
-- View der Schnaeppchen:
CREATE VIEW schokofabrik.schnaeppchen
AS SELECT bezeichnung, gewicht, 'Kunstwerk' AS ist
FROM Kunstwerk NATURAL JOIN Produkt
WHERE schaetzwert < 2000
UNION
SELECT bezeichnung, gewicht, 'Standardsortiment' AS ist
FROM Standardsortiment NATURAL JOIN Produkt
WHERE preis < 3;
-- SELECT Rechte fuer die View fuer den Wordpress User
GRANT SELECT ON schokofabrik.schnaeppchen TO schokowpuser@localhost;

-- View aller Kunstschauen
CREATE VIEW schokofabrik.kunstview AS SELECT datum,name FROM Kunstschau;
GRANT SELECT ON schokofabrik.kunstview TO schokowpuser@localhost;

-- View aller Platzierungen auf Kunstschauen
CREATE VIEW schokofabrik.platzierung AS SELECT datum,name,platz,kunstwerknummer FROM zeigt;
GRANT SELECT ON schokofabrik.platzierung TO schokowpuser@localhost;

-- View aller Produkte
CREATE VIEW schokofabrik.prodview AS SELECT nummer,bezeichnung FROM Produkt;
GRANT SELECT ON schokofabrik.prodview TO schokowpuser@localhost;

-- Prepared Statement fuer die 2. Seite
SELECT bezeichnung, platz
FROM platzierung JOIN prodview ON platzierung.kunstwerknummer=prodview.nummer
WHERE name=? AND datum=?;