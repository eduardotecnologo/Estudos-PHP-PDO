<?php

use Illuminate\Database\Seeder;

use Edu\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();


        $user = new User();

        $user->name = 'Eduardo Alexandre';

        $user->email = 'eduardotecnologo@hotmail.com';

        $user->password = bcrypt(123456);

        $user->save();



        factory(User::class, 20)->create();
    }
}
