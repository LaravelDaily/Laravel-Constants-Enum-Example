<?php

use App\Helpers\TicketStatus;

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
        'open'   => 'Nauja kortelė sukurta sėkmingai.',
        'closed' => 'Kortelė uždaryta sėkmingai.',
    ],
    'statuses' => [
        TicketStatus::Closed->name => 'Uždaryta',
        TicketStatus::Open->name   => 'Atvira',
    ],
];
