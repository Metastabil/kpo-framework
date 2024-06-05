# KPO Framework

## Inhaltsverzeichnis
- [Einleitung](#einleitung)
- [Installation](#installation)
- [System helper methods](#system-helper-methods)
  - [Array helper](#array-helper)
    - [array_to_json(array $data) :string](#array_to_jsonarray-data-string)
  - [Form helper](#form-helper)
    - [form_input(array $params, string|null $value = '') :string](#form_inputarray-params-stringnull-value---string)
    - [is_post() :bool](#is_post-bool)
    - [is_get() :bool](#is_get-bool)
    - [get_input(string $name, string $method = 'POST') :string](#get_inputstring-name-string-method--post-string)
    - [check_for_required_fields(array $fields, string $method = 'POST') :bool](#check_for_required_fieldsarray-fields-string-method--post-bool)
  - [HTTP helper](#http-helper)
    - [get_http_response_code(string $url) :string](#get_http_response_codestring-url-string)
  - [Language helper](#language-helper)
    - [get_language(string $locale = 'de') :array](#get_languagestring-locale--de-array-)
  - [String helper](#string-helper)
    - [esc(string $string) :string](#escstring-string-string-)
    - [format_timestamp(string $timestamp, string $format = 'd.m.Y') :string](#format_timestampstring-timestamp-string-format--dmy-string)
  - [URL helper](#url-helper)
    - [base_url(string $uri = '') :string](#base_urlstring-uri---string)
    - [redirect(string $url) :void](#redirectstring-url-void)
    - [router(string $route, mixed $callback) :bool](#routerstring-route-mixed-callback-bool)

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
### Array helper
#### `array_to_json(array $data) :string`
Diese Funktion wandelt das übergebene Array in einen JSON-String um und gibt diesen zurück. Sollte dabei ein
Fehler auftreten, so wird dieser angezeigt, wenn die Runtime-Konstante `ENVIRONMENT` auf `development` steht.
Andernfalls wird auf eine Fehlerseite weitergeleitet.

### Form helper
#### `form_input(array $params, string|null $value = '') :string`
Diese Funktion generiert auf Basis der übertragenen Parameter einen HTML-String und gibt diesen zurück. 
Dabei können dem Array `$params` alle [HTML Input Attribute](https://www.w3schools.com/html/html_form_attributes.asp)
hinzugefügt werden. Der Parameter `$value` beinhaltete den Wert, den das Input-Feld haben soll.

#### `is_post() :bool`
Diese Funktion überprüft, ob die aktuelle HTTP-Anfrage eine POST-Anfrage ist und gibt entsprechend
`true` oder `false` zurück.

#### `is_get() :bool`
Diese Funktion überprüft, ob die aktuelle HTTP-Anfrage eine GET-Anfrage ist und gibt entsprechend
`true` oder `false` zurück.

#### `get_input(string $name, string $method = 'POST') :string`
Diese Funktion ermöglicht das Abrufen von Eingabewerten aus HTTP-Requests, entweder aus POST- 
oder GET-Anfragen. Dabei wird über die Variable `$name` der Name des Eingabewerts übergeben und über die
Variable `$method`, welche standardmäßig auf `POST` steht, wird die Methode übergeben.

#### `check_for_required_fields(array $fields, string $method = 'POST') :bool`
Diese Funktion überprüft, ob alle angegebenen Felder in einer POST- oder GET-Anfrage vorhanden 
und nicht leer sind. Sobald ein Feld leer ist, wird `false` zurückgegeben.

### HTTP helper
#### `get_http_response_code(string $url) :string`
Diese Funktion fragt den HTTP Response Code der übergebenen URL ab und gibt diesen als String zurück.

### Language helper
#### `get_language(string $locale = 'de') :array` 
Diese Funktion lädt die Sprachdatei mit dem übergebenen Namen und gibt den Inhalt als Array zurück. 
Standardmäßig wird dabei nach einer deutschen Übersetzungsdatei gesucht. Sollte dabei ein Fehler auftreten, 
so wird dieser angezeigt, wenn die Runtime-Konstante `ENVIRONMENT`auf `development` steht. Andernfalls 
wird auf eine Fehlerseite weitergeleitet.

### String helper
#### `esc(string $string) :string` 
Diese Funktion hat die Aufgabe, eine Zeichenkette so zu kodieren, dass sie sicher in HTML-Ausgabe 
eingebettet werden kann. 

#### `format_timestamp(string $timestamp, string $format = 'd.m.Y') :string`
Diese Funktion formatiert den übergebenen Zeitstempel als `DD.MM.YYYY`. Alternativ kann über den Parameter
`$format` eine andere Formatierung übergeben werden.

### URL helper
#### `base_url(string $uri = '') :string`
Die Funktion generiert eine vollständige URL, indem sie eine Basis-URL mit einem optionalen 
URI-Teil kombiniert und diese als String zurückgibt. 

#### `redirect(string $url) :void`
Diese Funktion leitet an die übergebene URL weiter.

#### `router(string $route, mixed $callback) :bool`
Diese Funktion überprüft, ob die aktuelle URL mit einer definierten Route übereinstimmt und führt 
eine zugehörige Callback-Funktion aus, wenn dies der Fall ist.