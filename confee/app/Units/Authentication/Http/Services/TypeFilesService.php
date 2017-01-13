<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 13/01/2017
 * Time: 15:38
 */

namespace Confee\Units\Authentication\Http\Services;

use Confee\Units\ExceptionHandler as Exception;

class TypeFilesService
{

    public function __construct()
    {

    }

    public function findAll()
    {
        try
        {

        }
        catch(Exception $e)
        {

        }
    }

    public function findById()
    {
        try
        {

        }
        catch(Exception $e)
        {

        }
    }

    public function create(Array $data)
    {
        try
        {
            dd($data);
        }
        catch(Exception $e)
        {
            return response()->json(['error' => $e], 500);
        }
    }

    public function update()
    {
        try
        {

        }
        catch(Exception $e)
        {

        }
    }

    public function delete()
    {
        try
        {

        }
        catch(Exception $e)
        {

        }
    }



}