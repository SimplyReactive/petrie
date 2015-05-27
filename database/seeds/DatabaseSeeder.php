<?php

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        $this->call('UserSeeder');
	    $this->call('GroupSeeder');
	    $this->call('UserGroupSeeder');
    }
}

class UserSeeder extends Seeder
{
    public function run()
    {
	    DB::table('users')->delete();

	    Sentry::getUserProvider()->create(array(
		    'email'    => 'admin@local.com',
		    'username' => 'Admin',
		    'password' => 'admin123',
		    'activated' => 1,
	    ));

	    Sentry::getUserProvider()->create(array(
		    'email'    => 'user@local.com',
		    'username' => 'User',
		    'password' => 'user1234',
		    'activated' => 1,
	    ));
    }
}

class GroupSeeder extends Seeder
{
	public function run()
	{
		DB::table('groups')->delete();

		Sentry::getGroupProvider()->create(array(
			'name'        => 'Users',
			'permissions' => array(
				'admin' => 0,
				'users' => 1,
			)));

		Sentry::getGroupProvider()->create(array(
			'name'        => 'Admins',
			'permissions' => array(
				'admin' => 1,
				'users' => 1,
			)));
	}
}

class UserGroupSeeder extends Seeder
{
	public function run()
	{
		DB::table('users_groups')->delete();

		$userUser = Sentry::getUserProvider()->findByLogin('user@local.com');
		$adminUser = Sentry::getUserProvider()->findByLogin('admin@local.com');

		$userGroup = Sentry::getGroupProvider()->findByName('Users');
		$adminGroup = Sentry::getGroupProvider()->findByName('Admins');

		// Assign the groups to the users
		$userUser->addGroup($userGroup);
		$adminUser->addGroup($userGroup);
		$adminUser->addGroup($adminGroup);
	}
}