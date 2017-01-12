<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 23/12/2016
 * Time: 16:36
 */

namespace Confee\Domains\Users\Database\Factories;

use Confee\Domains\Users\User;
use Confee\Support\Database\ModelFactory;

class UserFactory extends ModelFactory
{

    protected $model = User::class;

    /**
     * @return array
     */
    protected function fields()
    {
        static $password;

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
            'idcustomer' => 0
        ];
    }
}