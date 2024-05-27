# KPO Framework

## Inhaltsverzeichnis
- [Einleitung](#einleitung)
- [Installation](#installation)
- [System helper methods](#system-helper-methods)
  - [URL Helper](#url-helper)

## Einleitung
Das KPO Framework ist ein selbst entwickeltes Framework, welches CodeIgniter ablösen
soll. Der Grundgedanke dabei ist eine einfache Wartung und Aktualisierung, um auch
zukünftig neue PHP-Versionen abdecken zu können, ohne in das Risiko zu laufen, alle
Projekte neu entwickeln zu müssen. 

## Installation
1. Lade dir das Framework vom DevOps-Server herunter
2. Entpacke die ZIP-Datei in einen beliebigen Ordner
3. Öffne die Datei `index.php` im Hauptverzeichnis und setze die Base-URL
4. Öffne die Datei `system/classes/Database.php` und passe die Verbindungsdaten an
5. Starte den Server mit `php -S localhost:8000 -t ./`

## System helper methods
### URL Helper