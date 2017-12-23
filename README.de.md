# block_countries

Blockieren Sie den Zugriff aus bestimmten Ländern per Geolocation.

## Abhängigkeiten

* UliCMS 2018.1
* geoPlugin Modul

## Installation

1. Installieren Sie das Modul "geoPlugin".
2. Installieren Sie das Modul "block_countries"

## Konfiguration

Fügen Sie die das Array **$block_countries** zur Datei **cms-config.php** hinzu.

```php
var $blocked_countries = ["Vietnam", "China", "Pakistan", "Hong Kong", "Russian Federation", "India"];
```