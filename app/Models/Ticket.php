<?php

namespace App\Models;

use App\Helpers\Constant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status'];

    public function getIsOpenAttribute(): bool
    {
        return (int) $this->status === Constant::TICKET_STATUS['open'];
    }

    public function getIsClosedAttribute(): bool
    {
        return (int) $this->status === Constant::TICKET_STATUS['closed'];
    }
}
