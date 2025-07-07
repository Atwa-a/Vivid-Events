<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EventSeeder extends Seeder {
    public function run(): void {
        DB::table('events')->insert([
            [
                'name' => 'Birthday Bash',
                'type' => 'Personal',
                'price' => 299.99,
                'review' => 'Amazing celebration!',
                'date' => now()
            ],
            [
                'name' => 'Charity Gala',
                'type' => 'Fundraiser',
                'price' => 1499.00,
                'review' => 'Fantastic turnout.',
                'date' => now()
            ]
        ]);
    }
}
