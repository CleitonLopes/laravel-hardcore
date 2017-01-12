<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 23/12/2016
 * Time: 11:46
 */

namespace Confee\Support\Http\Routing;

abstract class RoutesFile
{
    /**
     * @var array
     */
    protected $options;

    /**
     * @var
     */
    protected $router;

    public function __construct($options = [])
    {
        $this->options = $options;

        $this->router = app('router');
    }

    public function register()
    {
        $this->router->group($this->options, function(){

            $this->routes();
        });
    }

    abstract protected function routes();
}