<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(10)->create();
        User::create([
            'name' => 'Apolinar',
            'last_name' => 'Morales',
            'rfc' => 'AOMA940814N35',
            'born_date' => '1994-08-14',
            'phone_number' => '5579703259',
            'email' => 'apolinar.morales.a@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $this->call(BusinessCenterSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(TableSeeder::class);
    }
}
