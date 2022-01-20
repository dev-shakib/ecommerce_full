<?php

namespace Modules\Support;

class Country
{
    /**
     * Path of the resource.
     *
     * @var string
     */
    const RESOURCE_PATH = __DIR__ . '/Resources/countries.php';
    const COUNTRY_WITH_PHONE_PATH = __DIR__ . '/Resources/countries_with_phone_code.php';

    /**
     * Array of all countries.
     *
     * @var array
     */
    private static $countries;
    private static $countriesWithCode;

    /**
     * Array of supported countries by the app.
     *
     * @var array
     */
    private static $supported;

    /**
     * Get all countries.
     *
     * @return array
     */
    public static function all()
    {
        if (is_null(self::$countries)) {
            self::$countries = require self::RESOURCE_PATH;
        }

        return self::$countries;
    }

    public static function allWithCode()
    {
        if (is_null(self::$countriesWithCode)) {
            self::$countriesWithCode = require self::COUNTRY_WITH_PHONE_PATH;
        }

        return self::$countriesWithCode;
    }

    /**
     * Get all supported countries.
     *
     * @return array
     */
    public static function supported()
    {
        if (! is_null(self::$supported)) {
            return self::$supported;
        }

        $supportedCountries = setting('supported_countries');

        return self::$supported = array_filter(static::all(), function ($code) use ($supportedCountries) {
            return in_array($code, $supportedCountries);
        }, ARRAY_FILTER_USE_KEY);
    }

    /**
     * Get all country codes.
     *
     * @return array
     */
    public static function codes()
    {
        return array_keys(self::all());
    }

    /**
     * Get supported country codes.
     *
     * @return array
     */
    public static function supportedCodes()
    {
        return array_keys(self::supported());
    }

    /**
     * Get name of the given country code.
     *
     * @param string $code
     * @return string
     */
    public static function name($code)
    {
        return array_get(self::all(), $code);
    }
}
