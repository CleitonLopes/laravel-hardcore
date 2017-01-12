<?php

	namespace Confee\Domains\Users\Database\Seeders;

	use Illuminate\Database\Seeder;
	use Confee\Domains\Users\User;


	class UserSeeders extends Seeder
	{

		public function run()
		{

			Factory(User::class)
				->times(30)
				->create();
		}

	}