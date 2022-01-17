<?php

namespace App\Enums;

enum TicketStatus: int {
    case Open   = 1;
    case Closed = 2;
}
