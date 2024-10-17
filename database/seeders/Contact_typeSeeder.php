<?php

namespace Database\Seeders;

use App\Models\Contact_type;
use Illuminate\Database\Seeder;

class Contact_typeSeeder extends Seeder
{
    public function run(): void
    {
        Contact_type::factory(10)->create();
    }
}
