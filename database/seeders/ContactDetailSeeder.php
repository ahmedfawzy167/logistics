<?php

namespace Database\Seeders;

use App\Models\ContactDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactDetail::create([
            'type' => 'address',
            'value' => '25/B Milford, New York, USA',
        ]);

        ContactDetail::create([
            'type' => 'phone',
            'value' => '+2 123 4565 789',
        ]);

        ContactDetail::create([
            'type' => 'email',
            'value' => 'info@example.com',
        ]);

        ContactDetail::create([
            'type' => 'hours',
            'value' => 'Mon - Sat (10.00AM - 05.30PM)',
        ]);
    }
}
