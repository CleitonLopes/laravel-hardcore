<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 17/01/2017
 * Time: 09:02
 */

namespace Confee\Units\Authentication\Services\Utils\File;

use Confee\Units\Authentication\Services\Utils\File\StorageService;
use Confee\Units\Authentication\Validators\FileServiceValidator;

use Prettus\Validator\Exceptions\ValidatorException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileService
{

    /**
     * @var FileServiceValidator
     */
    private $fileServiceValidator;
    /**
     * @var StorageFile
     */
    private $storageService;

    public function __construct(FileServiceValidator $fileServiceValidator, StorageService $storageService)
    {
        $this->fileServiceValidator = $fileServiceValidator;
        $this->storageService = $storageService;
    }

   public function getFileInfo(UploadedFile $file, $data)
   {
       $this->fileServiceValidator->with(['file' => $file])->passesOrFail(FileServiceValidator::RULE_CREATE);

       $arrayProperties = [];
       $arrayProperties['arquivo'] = $file;
       $arrayProperties['nomeOriginal'] =  $file->getClientOriginalName();
       $arrayProperties['extensao'] = $file->getClientOriginalExtension();
       $arrayProperties['mime'] = $file->getMimeType();
       $arrayProperties['tamanho'] = $file->getSize();

       $arrayProperties = array_merge($arrayProperties, $data);

       return $arrayProperties;

   }

    public function storeFile(Array $fileArray)
    {
        try
        {
            $file = [];

            // faz o hash com o conteudo do arquivo
            $file['arquivo'] = hash('sha256', $this->storageService->getFileData($fileArray['arquivo']));
            $file['pasta'] = $fileArray['id'];

            $this->storageService->storeFile($file['arquivo'], $fileArray['arquivo'], '', $file['pasta']);

            return $file;
        }
        catch(ValidatorException $e)
        {
            throw $e;
        }


    }

}