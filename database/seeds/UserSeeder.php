<?php

use Illuminate\Database\Seeder;
use App\User; // User モデル読み込み
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User:: truncate();
        factory(User::class,50)->create();
        $this->call(UserSeeder::class);
    }
}
