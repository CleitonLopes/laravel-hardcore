<?php
/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 13/01/2017
 * Time: 14:28
 */

namespace Confee\Units\Authentication\Http\Controllers;


use Confee\Support\Http\Controllers\Controller;
use Confee\Units\Authentication\Http\Services\TypeFilesService;
use Confee\Units\ExceptionHandler as Exception;
use Illuminate\Http\Request;


class TypeFilesController extends Controller
{

    /**
     * @var TypeFilesService
     */
    private $typeFilesService;

    public function __construct(TypeFilesService $typeFilesService)
    {

        $this->typeFilesService = $typeFilesService;
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

    public function create(Request $request)
    {
        try
        {
            $data = $this->typeFilesService->create($request->all());

            return response()->json([$data], 200);
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