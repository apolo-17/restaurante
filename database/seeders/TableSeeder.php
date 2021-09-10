<?php

namespace Database\Seeders;

use App\Models\BusinessCenter;
use App\Models\Room;
use App\Models\Table;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Table::create([
            'number' => '1',
            'room_id' => '1'
        ]);
        Table::create([
            'number' => '2',
            'room_id' => '1'
        ]);

        Table::create([
            'number' => '3',
            'room_id' => '1'
        ]);

        Table::create([
            'number' => '4',
            'room_id' => '1'
        ]);

        Table::create([
            'number' => '5',
            'room_id' => '1'
        ]);

        Table::create([
            'number' => '6',
            'room_id' => '2'
        ]);

        Table::create([
            'number' => '7',
            'room_id' => '2'
        ]);

        Table::create([
            'number' => '8',
            'room_id' => '2'
        ]);

        Table::create([
            'number' => '9',
            'room_id' => '2'
        ]);

        Table::create([
            'number' => '10',
            'room_id' => '2'
        ]);

        Table::create([
            'number' => '11',
            'room_id' => '2'
        ]);

        Table::create([
            'number' => '12',
            'room_id' => '2'
        ]);

        Table::create([
            'number' => '13',
            'room_id' => '3'
        ]);

        Table::create([
            'number' => '14',
            'room_id' => '3'
        ]);

        Table::create([
            'number' => '15',
            'room_id' => '3'
        ]);

        # Centro

        Table::create([
            'number' => '1',
            'room_id' => '4'
        ]);
        Table::create([
            'number' => '2',
            'room_id' => '4'
        ]);

        Table::create([
            'number' => '3',
            'room_id' => '4'
        ]);

        Table::create([
            'number' => '4',
            'room_id' => '4'
        ]);

        Table::create([
            'number' => '5',
            'room_id' => '4'
        ]);

        Table::create([
            'number' => '6',
            'room_id' => '4'
        ]);

        Table::create([
            'number' => '7',
            'room_id' => '4'
        ]);

        Table::create([
            'number' => '8',
            'room_id' => '5'
        ]);

        Table::create([
            'number' => '9',
            'room_id' => '5'
        ]);

        Table::create([
            'number' => '10',
            'room_id' => '5'
        ]);

        Table::create([
            'number' => '11',
            'room_id' => '5'
        ]);

        Table::create([
            'number' => '12',
            'room_id' => '6'
        ]);

        Table::create([
            'number' => '13',
            'room_id' => '6'
        ]);

        Table::create([
            'number' => '14',
            'room_id' => '6'
        ]);

        Table::create([
            'number' => '15',
            'room_id' => '6'
        ]);

        # Pensiones

        Table::create([
            'number' => '1',
            'room_id' => '9'
        ]);
        Table::create([
            'number' => '2',
            'room_id' => '9'
        ]);

        Table::create([
            'number' => '3',
            'room_id' => '9'
        ]);

        Table::create([
            'number' => '4',
            'room_id' => '8'
        ]);

        Table::create([
            'number' => '5',
            'room_id' => '8'
        ]);

        Table::create([
            'number' => '6',
            'room_id' => '8'
        ]);

        Table::create([
            'number' => '7',
            'room_id' => '8'
        ]);

        Table::create([
            'number' => '8',
            'room_id' => '8'
        ]);

        Table::create([
            'number' => '9',
            'room_id' => '8'
        ]);

        Table::create([
            'number' => '10',
            'room_id' => '7'
        ]);

        Table::create([
            'number' => '11',
            'room_id' => '7'
        ]);

        Table::create([
            'number' => '12',
            'room_id' => '7'
        ]);

        Table::create([
            'number' => '13',
            'room_id' => '7'
        ]);

        Table::create([
            'number' => '14',
            'room_id' => '7'
        ]);

        Table::create([
            'number' => '15',
            'room_id' => '7'
        ]);
    }
}
