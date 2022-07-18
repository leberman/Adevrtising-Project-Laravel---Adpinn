<?php

declare(strict_types=1);

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
        $this->call(UserTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ModelsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(ProductionsTableSeeder::class);
        $this->call(TownTableSeeder::class);
//        $this->call(PackagesCarTableSeeder::class);
        $this->call(BodyStatusTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(PackagesTableSeeder::class);
        $this->call(TimesTableSeeder::class);
        $this->call(PlaceStainesTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(ChassisTypeTableSeeder::class);
//        $this->call(AdverTableSeeder::class);
        Artisan::call('passport:client --name=adpin --no-interaction --personal');
//        $this->call(BrandModelTableSeeder::class);
    }
}
