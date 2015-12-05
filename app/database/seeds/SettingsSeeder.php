<?php

class SettingsSeeder extends Seeder{
	public function run(){
		DB::table('settings')->insert(array(
				'title'	=>	'',
				'logo'	=>	'',
				'about'	=>	'',
				'address'	=>	'',
				'phone'	=>	'',
				'email'	=>	'',
				'location'	=>	'',
			));
	}
}