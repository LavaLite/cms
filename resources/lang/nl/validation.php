<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'De :attribute moet geaccepteerd worden.',
    'active_url' => 'De :attribute ir geen geldige URL.',
    'after' => 'De :attribute moet een datum na :date zijn.',
    'alpha' => 'De :attribute mag enkel letters bevatten.',
    'alpha_dash' => 'De :attribute mag enkel letters, nummers en strepen bevatten.',
    'alpha_num' => 'De :attribute mag enkel letters en nummers bevatten.',
    'array' => 'De :attribute moet een array zijn.',
    'before' => 'De :attribute moet een datum voor :date zijn.',
    'between' => [
        'numeric' => 'De :attribute moet tussen :min en :max zijn.',
        'file' => 'De :attribute moet tussen :min en :max kilobytes zijn.',
        'string' => 'De :attribute moet tussen :min en :max karakters hebben.',
        'array' => 'De :attribute moet tussen :min en :max items hebben.',
    ],
    'boolean' => 'De :attribute veld moet true of false zijn.',
    'confirmed' => 'De :attribute bevestiging komt niet overeen.',
    'date' => 'De :attribute is geen geldige datum.',
    'date_format' => 'De :attribute voldoet niet aan volgend formaat: :format.',
    'different' => 'De :attribute en :other moeten verschillend zijn van elkaar.',
    'digits' => 'De :attribute moet :digits cijfers zijn.',
    'digits_between' => 'De :attribute moet tussen :min en :max cijfers zijn.',
    'email' => 'De :attribute moet een geldig emailadres zijn.',
    'exists' => 'De geselecteerde :attribute is ongeldig.',
    'filled' => 'De :attribute veld is vereisd.',
    'image' => 'De :attribute moet een afbeelding zijn.',
    'in' => 'De geselecteerde :attribute is ongeldig.',
    'integer' => 'De :attribute moet een integer zijn.',
    'ip' => 'De :attribute moet een geldig IP adres zijn.',
    'json' => 'De :attribute moet een geldige JSON string zijn.',
    'max' => [
        'numeric' => 'De :attribute mag niet groter dan :max zijn.',
        'file' => 'De :attribute mag niet groter dan :max kilobytes zijn.',
        'string' => 'De :attribute mag niet groter dan :max karakters hebben.',
        'array' => 'De :attribute mag niet meer dan :max items hebben.',
    ],
    'mimes' => 'De :attribute moet een bestand zijn van het type: :values.',
    'min' => [
        'numeric' => 'De :attribute moet minstens :min zijn.',
        'file' => 'De :attribute moet minstens :min kilobytes zijn.',
        'string' => 'De :attribute moet minstens :min karakters hebben.',
        'array' => 'De :attribute moet minstens :min items hebben.',
    ],
    'not_in' => 'De geselecteerde :attribute is ongeldig.',
    'numeric' => 'De :attribute moet een nummer zijn.',
    'regex' => 'De :attribute formaat in ongeldig.',
    'required' => 'De :attribute veld is vereist.',
    'required_if' => 'De :attribute veld is vereist als :other is :value.',
    'required_unless' => 'De :attribute veld is vereist, tenzij :other is in :values.',
    'required_with' => 'De :attribute veld is vereist :values aanwezig is.',
    'required_with_all' => 'De :attribute veld is vereist :values aanwezig is.',
    'required_without' => 'De :attribute veld is vereist :values niet aanwezig is.',
    'required_without_all' => 'De :attribute veld is vereist als geen enkele waarde van :values aanwezig is.',
    'same' => 'De :attribute en :other moeten overeen komen.',
    'size' => [
        'numeric' => 'De :attribute :size zijn.',
        'file' => 'De :attribute moet :size kilobytes zijn.',
        'string' => 'De :attribute moet :size karakters hebben.',
        'array' => 'De :attribute moet :size items bevatten.',
    ],
    'string' => 'De :attribute moet een string zijn.',
    'timezone' => 'De :attribute moet een geldige zone zijn.',
    'unique' => 'De :attribute is al ingenomen.',
    'url' => 'De :attribute formaat is ongeldig.',
    'recaptcha' => 'De :attribute veld is niet correct.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
