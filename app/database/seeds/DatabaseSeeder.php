<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

        //Create Default Admin User
        if(User::count()==0)
        {
            User::create(array(
                'fullname'=>'Administrator',
                'email'=>'admin@example.com',
                'password' => '123456'));
        }
	}

}
