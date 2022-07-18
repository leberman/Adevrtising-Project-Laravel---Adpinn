<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expert_times')->truncate();

        DB::table('expert_times')->insert([
            [
                'time' => '10:00',
                'location_id' => 1,
                'limit' => 3,
            ],
            [
                'time' => '11:00',
                'location_id' => 1,
                'limit' => 3,
            ],
            [
                'time' => '12:00',
                'location_id' => 1,
                'limit' => 3,
            ],
            [
                'time' => '14:00',
                'location_id' => 1,
                'limit' => 3,
            ],
            [
                'time' => '15:00',
                'location_id' => 1,
                'limit' => 3,
            ],
            [
                'time' => '16:00',
                'location_id' => 1,
                'limit' => 3,
            ],
            [
                'time' => '17:00',
                'location_id' => 1,
                'limit' => 3,
            ]
        ]);
    }
}
