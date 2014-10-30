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
                'first_name'=>'Fakhar',
                'last_name'=>'Khan',
                'email'=>'fakhar@softpyramid.com',
                'password' => '123456'));
        }
	}

}
