<?php

namespace App\Helpers;

enum TicketStatus: int {
    case Open = 1;
    case Closed = 2;
}
