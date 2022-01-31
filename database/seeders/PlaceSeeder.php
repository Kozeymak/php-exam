<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $place = new Place();
        $place->name = 'Инвентарь';
        $place->description = 'Площадь для новых вещей';
        $place->repair = false;
        $place->work = false;
        $place->save();

        $work = new Place();
        $work->name = 'Работа';
        $work->description = 'Место для работы';
        $work->repair = false;
        $work->work = true;
        $work->save();

        $repair = new Place();
        $repair->name = 'Ремонт';
        $repair->description = 'Место где чинятся вещи';
        $repair->repair = true;
        $repair->work = false;
        $repair->save();
    }
}
