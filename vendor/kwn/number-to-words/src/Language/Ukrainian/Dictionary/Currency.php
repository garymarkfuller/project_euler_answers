<?php

namespace Kwn\NumberToWords\Language\Ukrainian\Dictionary;

use Kwn\NumberToWords\Grammar\Slavonic\Dictionary\Currency as SlavonicCurrency;

class Currency extends SlavonicCurrency
{
    protected $units = [
        'PLN' => ['злотий', 'злотих', 'злотих'],
        'EUR' => ['євро', 'євро', 'євро'],
        'GBP' => ['фунт', 'фунти', 'фунтів'],
        'USD' => ['долар', 'долари', 'доларів'],
        'CHF' => ['франк', 'франки', 'франків'],
        'RON' => ['лей', 'леї', 'леїв'],
        'HUF' => ['форинт', 'форинти', 'форинтів'],
        'CZK' => ['крона', 'крони', 'крон'],
        'DKK' => ['крона', 'крони', 'крон'],
        'SEK' => ['крона', 'крони', 'крон'],
        'UAH' => ['гривня', 'гривні', 'гривень'],
        'KZT' => ['тенге', 'тенге', 'тенге'],
        'RUB' => ['рубль', 'рублі', 'рублів'],
    ];

    protected $subunits = [
        'PLN' => ['пенні', 'пенні', 'пеннів'],
        'EUR' => ['євро цент', 'євро центи', 'євро центів'],
        'GBP' => ['пенс', 'пенси', 'пенсів'],
        'USD' => ['цент', 'центи', 'центів'],
        'CHF' => ['сантим', 'сантими', 'сантимів'],
        'RON' => ['бан', 'бани', 'банів'],
        'HUF' => ['філлер', 'філлери', 'філлерів'],
        'CZK' => ['геллер', 'геллери', 'геллерів'],
        'DKK' => ['оре', 'оре', 'оре'],
        'SEK' => ['оре', 'оре', 'оре'],
        'UAH' => ['копійка', 'копійки', 'копійок'],
        'KZT' => ['тіин', 'тіин', 'тіин'],
        'RUB' => ['копійка', 'копійки', 'копійок'],
    ];
}
