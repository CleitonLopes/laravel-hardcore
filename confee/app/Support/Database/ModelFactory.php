<?php
/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 23/12/2016
 * Time: 15:42
 */

namespace Confee\Support\Database;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factory;


abstract class ModelFactory
{

    /**
     * @var classe factory
     */
    protected $factory;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var classe generator faker
     */
    protected $faker;


    /**
    *
    */
    public function __construct()
    {
        $this->factory = app()->make(Factory::class);
        $this->faker = app()->make(Generator::class );
    }


    /**
    *
    */
    public function define()
    {
        $this->factory->define($this->model, function(){

            return $this->fields();

        });
    }

    /**
     * @return array
     */
    abstract protected function fields();
}