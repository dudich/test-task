<?php
use Illuminate\Database\Seeder;
use App\User as User;

class UsersTableSeeder extends Seeder {

    public function run() {
        //User::truncate();
        User::create( [
            'email' => 'test@test.com' ,
            'password' => Hash::make( 'password' ) ,
            'name' => 'adudich' ,
        ] );
    }
}

