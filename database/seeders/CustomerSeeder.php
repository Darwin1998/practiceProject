<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'first_name' => 'darwin',
            'last_name' => 'pogi',
            'contact_number' => '09xxxxxxxxx',
            'address' => 'kilim',
            'internetPlan_id' => '1'
        ]);
    }
}
