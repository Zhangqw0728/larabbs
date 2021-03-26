<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();

        $user = User::find(1);
        $user->name = 'zqw';
        $user->email = '1051791947@qq.com';
        $user->avatar = 'http://larabbs.test/uploads/images/avatar2021/03/26/1_1616743927_30vV44Lxu6.jpg';
        $user->save();
    }
}
