<?php

use App\User;
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
        factory(User::class, 1)->create([
            "email" => "edu@email.com"
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
