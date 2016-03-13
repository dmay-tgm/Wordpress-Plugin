#Einleitung
Stoesst man bei der Verwendung eines CMS an die Grenzen der verfuegbaren Erweiterungen (Plugins,Extensions,Module,...), bieten alle gaengigen CMS Systeme Schnittstellen zur Anpassung an. Zum Beispiel stellt die Integration externer Datenquellen eine solche Herausforderung dar.

#Ziel
Es soll eine Wordpress-Seite aufgesetzt werden, die Daten aus der SchokoDB anzeigen kann, sowohl statisch als auch interaktiv abhaengig von Benutzereingaben.

#Aufgabenstellung
Installiere und konfiguriere eine Wordpress-Seite fuer unsere Schokofabrik. Die Seite muss keine besonderen statischen Inhalte aufweisen.
Entwickle ein Wordpress-Plugin [1], dass du verwendest, das auf zwei Seiten eingebunden wird:

1. Schnäppchen sind entweder Kunstwerke mit einem Schätzwert unter 2000 Euro oder Süßigkeiten unter 3 Euro. Gib auf der Seite eine Liste von Schnäppchen (bezeichnung und gewicht) aus. Vermerke dabei auch in einer eigenen Spalte, ob es sich um ein Kunstwerk oder ein Produkt aus dem Standardsortiment handelt. 

2. Auf einer anderen Seite soll der Benutzer die Moeglichkeit haben, eine der in der Datenbank angelegten Kunstschauen auszuwaehlen. Anschlieszend soll zur gewaehlten Kunstschau eine Liste mit allen ausgestellten Kunstwerken samt erreichten Plaetzen angezeigt werden.

#Hinweise
* Verwende dazu die mysql-Version der schokoDB (ist im Kurs hochgeladen).
* Nutze Statements um sql injections zu vermeiden.
* Abzugeben sind ein Arbeitsprotokoll sowie das php Plugin

[1] https://codex.wordpress.org/Writing_a_Plugin
