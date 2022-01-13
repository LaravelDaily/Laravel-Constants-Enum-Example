<?php

use App\Helpers\Constant;

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
        'created' => 'New ticket has been opened successfully.',
        'updated' => 'Ticket has been updated successfully.',
    ],
    'statuses' => [
        Constant::TICKET_STATUS['closed'] => 'Closed',
        Constant::TICKET_STATUS['open']   => 'Open',
    ],
];
