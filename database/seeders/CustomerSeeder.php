<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Durval',
            'email' => 'durval@rocketseat.com',
            'phone' => '1311t414641'
        ]);


        Customer::create([
            'name' => 'Pereira',
            'email' => 'pereira@rocketseat.com',
            'phone' => '1331331131'
        ]);
    }
}
