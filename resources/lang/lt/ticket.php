<?php

use App\Helpers\Constant;

return [
    // Crud
    'ticket'  => 'Kortelė',
    'tickets' => 'Kortelės',

    // Fields
    'id'          => 'ID',
    'title'       => 'Pavadinimas',
    'description' => 'Aprašymas',
    'status'      => 'Statusas',

    // Actions
    'open'       => 'Sukurti naują kortelę',
    'submit'     => 'Išsaugoti kortelę',
    'select'     => '- Pasirinkinte statusą -',
    'edit'       => 'Redaguoti kortelę',
    'edit_short' => 'Redaguoti',
    'update'     => 'Atnaujinti kortelę',

    'notifications' => [
        'open'    => 'Nauja kortelė sukurta sėkmingai.',
        'updated' => 'Kortelė atnaujinta sėkmingai.',
    ],
    'statuses' => [
        Constant::TICKET_STATUS['closed'] => 'Uždaryta',
        Constant::TICKET_STATUS['open']   => 'Atvira',
    ],
];
