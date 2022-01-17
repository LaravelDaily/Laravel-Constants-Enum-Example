<?php

namespace App\Models;

use App\Helpers\TicketStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status'];
    protected $casts = ['status' => TicketStatus::class];

    public function getIsOpenAttribute(): bool
    {
        return $this->status == TicketStatus::Open;
    }

    public function getIsClosedAttribute(): bool
    {
        return $this->status == TicketStatus::Closed;
    }
}
