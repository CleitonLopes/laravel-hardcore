<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 13/01/2017
 * Time: 15:38
 */

namespace Confee\Units\Authentication\Services;

use Confee\Units\Authentication\Contracts\Repositories\TypeFileRepository;
use Confee\Units\Authentication\Services\Utils\File\FileService;
use Confee\Units\Authentication\Validators\TypeFileValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Symfony\Component\HttpFoundation\File\UploadedFile;


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
    /**
     * @var FileService
     */
    private $fileService;

    public function __construct(TypeFileRepository $typeFileRepository, TypeFileValidator $typeFileValidator, FileService $fileService)
    {

        $this->typeFileRepository = $typeFileRepository;
        $this->typeFileValidator = $typeFileValidator;
        $this->fileService = $fileService;
    }

    public function findAll()
    {
        try
        {

        }
        catch(ValidatorException $e)
        {

        }
    }

    public function findById()
    {
        try
        {

        }
        catch(ValidatorException $e)
        {

        }
    }

    public function create(Array $data)
    {
        try
        {

            $this->typeFileValidator->with($data)->passesOrFail(TypeFileValidator::RULE_CREATE);

            return $this->createFile($data['arquivo'], $data);

        }
        catch(ValidatorException $e)
        {
            return response()->json(['message' => $e]);
        }
    }

    public function createFile(UploadedFile $arquivo, $data)
    {
        try
        {
            // Pega as informações do arquivo
            $fileInfo = $this->fileService->getFileInfo($arquivo, $data);

            // Guarda o arquivo localmente
            $storeFile = $this->fileService->storeFile($fileInfo);

            // Grava o registro do arquivo
            return $this->typeFileRepository->create(array_merge($fileInfo, $storeFile));

        }
        catch(ValidatorException $e)
        {
            throw $e;
        }
    }

    public function update()
    {
        try
        {

        }
        catch(ValidatorException $e)
        {

        }
    }

    public function delete()
    {
        try
        {

        }
        catch(ValidatorException $e)
        {

        }
    }



}