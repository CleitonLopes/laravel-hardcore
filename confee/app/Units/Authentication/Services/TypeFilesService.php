<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 13/01/2017
 * Time: 15:38
 */

namespace Confee\Units\Authentication\Services;

use Confee\Units\Authentication\Contracts\Repositories\TypeFileRepository;
use Confee\Units\Authentication\Validators\TypeFileValidator;
use Confee\Units\ExceptionHandler as Exception;

class TypeFilesService
{

    /**
     * @var TypeFileRepository
     */
    private $typeFileRepository;
    /**
     * @var TypeFileValidator
     */
    private $typeFileValidator;

    public function __construct(TypeFileRepository $typeFileRepository, TypeFileValidator $typeFileValidator)
    {

        $this->typeFileRepository = $typeFileRepository;
        $this->typeFileValidator = $typeFileValidator;
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
            $this->typeFileValidator->with($data)->passesOrFail(TypeFileValidator::RULE_CREATE);

            return $this->typeFileRepository->create($data);

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