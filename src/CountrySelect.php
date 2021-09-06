<?php

namespace Enmaboya\CountrySelect;

use Laravel\Nova\Fields\Select;
use Enmaboya\CountrySelect\Traits\CountryTrait;

class CountrySelect extends Select
{
    use CountryTrait;
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'country-select';

    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->options($this->getCountriesList());
    }

    public function only(array $countries)
    {
        $countries = $this->toLower($countries);

        return $this->options(collect($this->meta['options'] ?? [])->filter(function (array $option) use ($countries) {
            return in_array(strtolower($option['value']), $countries);
        })->toArray());
    }

    public function except(array $countries)
    {
        $countries = $this->toLower($countries);

        return $this->options(collect($this->meta['options'] ?? [])->filter(function (array $option) use ($countries) {
            return !in_array(strtolower($option['value']), $countries);
        })->toArray());
    }

    public function onlyContinents(array $continents)
    {
        return $this->options(collect($this->getCountriesListWithContinent() ?? [])->filter(function (array $continent, $continent_code) use ($continents) {
            return in_array($continent_code, $continents);
        })->collapse()->toArray());
    }

    public function exceptContinents(array $continents)
    {
        return $this->options(collect($this->getCountriesListWithContinent() ?? [])->filter(function (array $continent, $continent_code) use ($continents) {
            return !in_array($continent_code, $continents);
        })->collapse()->toArray());
    }
}
