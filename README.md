# Country Select for Laravel Nova

This package provides a customizable select field.

# Installation

```
composer require enmaboya/country-select
```
## Basic usage

```php
use Enmaboya\CountrySelect\CountrySelect;
	
CountrySelect::make('Country', 'county_code')
```
### Available settings

 1. #### only - only countries from the list will be displayed
 ```php
use Enmaboya\CountrySelect\CountrySelect;
	
CountrySelect::make('Country', 'county_code')->only(['US', 'RU'])
```
 3. #### except - excludes countries from the list
 ```php
use Enmaboya\CountrySelect\CountrySelect;
	
CountrySelect::make('Country', 'county_code')->except(['BY', 'CN'])
```
 5. #### onlyContinents - only сontinents from the list will be displayed
  ```php
use Enmaboya\CountrySelect\CountrySelect;
	
CountrySelect::make('Country', 'county_code')->onlyContinents(['EU', 'AS'])
```
 7. #### exceptContinents - excludes сontinents from the list
 ```php
use Enmaboya\CountrySelect\CountrySelect;
	
CountrySelect::make('Country', 'county_code')->except(['SA', 'NA', 'OC'])
```

Available list of continents:

 - AF - Africa
 - AS - Asia
 - EU - Europe
 - NA - North America
 - OC - Oceania
 - SA - South America

## Make the field dependent
You can make this field dependent and use it together with the "[Laravel Nova Place Input field](https://github.com/enmaboya/nova-place-input)".

In this case the search will be limited to the country selected in the "Select Country field".

## License

The MIT License (MIT). Please see [License File](https://github.com/enmaboya/nova-country-select/blob/main/LICENSE) for more information.
