<?php

namespace Database\Seeders;

use App\Models\BusinessCenter;
use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Rooms de sucursla norte
        Room::create([
            'name' => 'Zona Ventanas',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugit eum officia quos non fuga esse cum magni? Placeat temporibus consequatur ullam culpa consectetur consequuntur recusandae odit iusto? Fuga, laudantium?',
            'business_center_id' => BusinessCenter::where('name', 'Norte')->first()->id
        ]);

        Room::create([
            'name' => 'Zona Pasillo',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugit eum officia quos non fuga esse cum magni? Placeat temporibus consequatur ullam culpa consectetur consequuntur recusandae odit iusto? Fuga, laudantium?',
            'business_center_id' => BusinessCenter::where('name', 'Norte')->first()->id
        ]);

        Room::create([
            'name' => 'Zona Jardín',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugit eum officia quos non fuga esse cum magni? Placeat temporibus consequatur ullam culpa consectetur consequuntur recusandae odit iusto? Fuga, laudantium?',
            'business_center_id' => BusinessCenter::where('name', 'Norte')->first()->id
        ]);

        # Rooms de sucursal centro
        Room::create([
            'name' => 'Zona Ventanas',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugit eum officia quos non fuga esse cum magni? Placeat temporibus consequatur ullam culpa consectetur consequuntur recusandae odit iusto? Fuga, laudantium?',
            'business_center_id' => BusinessCenter::where('name', 'Centro')->first()->id
        ]);

        Room::create([
            'name' => 'Zona Pasillo',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugit eum officia quos non fuga esse cum magni? Placeat temporibus consequatur ullam culpa consectetur consequuntur recusandae odit iusto? Fuga, laudantium?',
            'business_center_id' => BusinessCenter::where('name', 'Centro')->first()->id
        ]);

        Room::create([
            'name' => 'Zona Jardín',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugit eum officia quos non fuga esse cum magni? Placeat temporibus consequatur ullam culpa consectetur consequuntur recusandae odit iusto? Fuga, laudantium?',
            'business_center_id' => BusinessCenter::where('name', 'Centro')->first()->id
        ]);

        # Rooms de sucursal pension
        Room::create([
            'name' => 'Zona Ventanas',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugit eum officia quos non fuga esse cum magni? Placeat temporibus consequatur ullam culpa consectetur consequuntur recusandae odit iusto? Fuga, laudantium?',
            'business_center_id' => BusinessCenter::where('name', 'Pension')->first()->id
        ]);

        Room::create([
            'name' => 'Zona Pasillo',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugit eum officia quos non fuga esse cum magni? Placeat temporibus consequatur ullam culpa consectetur consequuntur recusandae odit iusto? Fuga, laudantium?',
            'business_center_id' => BusinessCenter::where('name', 'Pension')->first()->id
        ]);

        Room::create([
            'name' => 'Zona Jardín',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugit eum officia quos non fuga esse cum magni? Placeat temporibus consequatur ullam culpa consectetur consequuntur recusandae odit iusto? Fuga, laudantium?',
            'business_center_id' => BusinessCenter::where('name', 'Pension')->first()->id
        ]);
    }
}
