<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name" => "Nicholas Romiti",
                "email" => "romitinicholas1991@gmail.com",
                "password" => Hash::make("Prova123")
            ]
        ];

        foreach($users as $user) {
            $newUser = new User();
            $newUser->name = $user["name"];
            $newUser->email = $user["email"];
            $newUser->password = $user["password"];
            $newUser->save();
        }
    }
}
