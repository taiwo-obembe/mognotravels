<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Taiwo Obembe';
        $user->email = 'admin.taiwoobembe@mognotravels.io';
        $user->password = bcrypt('123456');
        $user->roles = 'admin';
        $user->uuid = (string) \Str::uuid();
        $user->save();

        $user = new User;
        $user->name = 'Audrey Dennis';
        $user->email = 'user.audreydennis@mognotravels.io';
        $user->password = bcrypt('123456');
        $user->roles= 'member';
        $user->uuid = (string) \Str::uuid();
        $user->save();

        $user = new User;
        $user->name = 'Steve Morgan';
        $user->email = 'support.stevemorgan@mognotravels.io';
        $user->password = bcrypt('123456');
        $user->roles= 'support';
        $user->uuid = (string) \Str::uuid();
        $user->save();
    }
}
