<?php

declare(strict_types=1);

use App\Advertising;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'محمد',
                'family' => ' شهبازی',
                'email' => null,
                'phone_number' => '09390905201',
                'phone_token' => null,
                'phone_token_fails' => 0,
                'email_verified_at' => null,
                'password' => '$2y$10$6VpmkEgCln/jukRKlucinuBjmLW5r8MN.UPmCMo9bS7f8tnEZrwRC',
                'ip_adress' => null,
                'remember_token' => null,
            ],
            [
                'name' => 'ابراهیم',
                'family' => 'هاشمی',
                'email' => null,
                'phone_number' => '09197702700',
                'phone_token' => null,
                'phone_token_fails' => 0,
                'email_verified_at' => null,
                'password' => null,
                'ip_adress' => null,
                'remember_token' => null,
            ],
            [
                'name' => 'فرزاد',
                'family' => 'زینی',
                'email' => 'Fzeiny@yahoo.com',
                'phone_number' => '09121030720',
                'phone_token' => null,
                'phone_token_fails' => 0,
                'email_verified_at' => null,
                'password' => null,
                'ip_adress' => null,
                'remember_token' => null,
            ],
            [
                'name' => 'محمد حسین',
                'family' => 'احمدی',
                'email' => 'ahmadi.xperian@gmail.com',
                'phone_number' => '09359772992',
                'phone_token' => null,
                'phone_token_fails' => 0,
                'email_verified_at' => null,
                'password' => null,
                'ip_adress' => null,
                'remember_token' => null,
            ]
        ]);
    }
}
