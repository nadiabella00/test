<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seat;

class SeatSeeder extends Seeder
{
    public function run(): void
    {
        $seats = [];
        foreach (range(1, 4) as $row) {
            foreach (['A', 'B', 'C', 'D'] as $col) {
                $seats[] = [
                    'seat_code' => "{$row}{$col}",
                    'is_reserved' => false,
                ];
            }
        }

        Seat::insert($seats);
    }
}
