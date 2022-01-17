<?php

use App\Helpers\TicketStatus;

return [
    // Crud
    'ticket'  => 'Ticket',
    'tickets' => 'Tickets',

    // Fields
    'id'          => 'ID',
    'title'       => 'Title',
    'description' => 'Description',
    'status'      => 'Status',

    // Actions
    'open'       => 'Open new ticket',
    'submit'     => 'Submit ticket',
    'select'     => '- Select ticket status -',
    'edit'       => 'Edit ticket',
    'edit_short' => 'Edit',
    'update'     => 'Update ticket',

    'notifications' => [
        'open'   => 'New ticket has been opened successfully.',
        'closed' => 'Ticket has been closed successfully.',
    ],
    'statuses' => [
        TicketStatus::Closed->name => 'Closed',
        TicketStatus::Open->name   => 'Open',
    ],
];
