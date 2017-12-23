# block_countries

Block access from some countries using Geolocation.

## Dependencies

* UliCMS 2018.1
* geoPlugin Module

## Installation

1. Install "geoPlugin" package
2. Install "block_countries"

## Configuration

Add the array **$blocked_countries** to the file **cms-config.php**.

```php
var $blocked_countries = ["Vietnam", "China", "Pakistan", "Hong Kong", "Russian Federation", "India"];
```