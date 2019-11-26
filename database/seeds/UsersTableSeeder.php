<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Dr H',
            'email' => 'a@a.a',
            'password' => bcrypt('12345678'),
        ]);

        factory(App\User::class, 3)->create()->each(function ($user) {
            $user->posts()->save(factory(App\Post::class)->make());
        });
    }
}
