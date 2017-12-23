# block_countries

Block access from some countries using Geolocation.

## Dependencies

* UliCMS 2018.1
* geoPlugin

## Installation

1. Install "geoPlugin" package
2. Install "block_countries"

## Configuration

Add blocked_countries to **cms-config.php**.

```php
var $blocked_countries = ["Vietnam", "China", "Pakistan", "Hong Kong", "Russian Federation", "India"];
```