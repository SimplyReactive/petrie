<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {
	public function run()
	{
		Model::unguard();
		$this->call('UserTableSeeder');
	}
}

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();
        $admin = new User;
        $admin->username = "Admin";
        $admin->email = "admin@test.com";
        $admin->password = Hash::make('cg4dmin!');
        $admin->save();
    }
}
