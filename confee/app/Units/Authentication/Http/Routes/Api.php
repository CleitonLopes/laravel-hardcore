<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 23/12/2016
 * Time: 11:56
 */

namespace Confee\Units\Authentication\Http\Routes;

use Confee\Support\Http\Routing\RoutesFile;
use Illuminate\Http\Request;

class Api extends RoutesFile
{

    protected function routes()
    {
        $this->registeDefaultRoutes();
        $this->registerV1Routes();
    }

    protected function registeDefaultRoutes()
    {
        $this->userRoutes();
        $this->loginRoutes();
        $this->signUpRoutes();

        // type-files
        $this->typeFilesRoutes();

    }

    protected function registerV1Routes()
    {
        $this->router->group(['prefix' => 'v1'], function(){
            $this->registeDefaultRoutes();
        });
    }

    protected function userRoutes()
    {
        $this->router->get('user', function (Request $request) {
            return $request->user();
        })->middleware('auth:api');
    }

    protected function loginRoutes()
    {
        $this->router->post('login', 'LoginController@login');
    }

    protected function signUpRoutes()
    {
        $this->router->post('register', 'RegisterController@register');
    }

    protected function typeFilesRoutes()
    {

        $this->router->group(['prefix' => 'type-file'], function() {

            $this->router->get('', ['uses' => 'TypeFilesController@findAll']);
            $this->router->get('{id}', ['uses' => 'TypeFilesController@findById']);
            $this->router->post('', ['uses' => 'TypeFilesController@create']);
            $this->router->put('{id}', ['uses' => 'TypeFilesController@update']);
            $this->router->delete('{id}', ['uses' => 'TypeFilesController@delete']);

        });



    }
}