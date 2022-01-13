<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Ticket::factory(10)->open()->create();
        Ticket::factory(10)->closed()->create();
    }
}
