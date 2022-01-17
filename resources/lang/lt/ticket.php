<?php

use App\Enums\TicketStatus;

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
        TicketStatus::Closed->name => 'Uždaryta',
        TicketStatus::Open->name   => 'Atvira',
    ],
];
