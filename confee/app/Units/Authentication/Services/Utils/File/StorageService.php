<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 17/01/2017
 * Time: 11:16
 */

namespace Confee\Units\Authentication\Services\Utils\File;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Filesystem\Factory as Storage;

class StorageService
{
    /**
     * @var Filesystem
     */
    private $filesystem;
    /**
     * @var Storage
     */
    private $storage;

    public function __construct(Filesystem $filesystem, Storage $storage)
    {
        $this->filesystem = $filesystem;
        $this->storage = $storage;
    }

    public function getFileData($fileData)
    {
        return $this->filesystem->get($fileData);
    }

    public function storeFile($file, $fileData, $fileExtension = '', $folder = '')
    {

        $fileName = $folder . '/' . $file;

        if($fileExtension !== '')
        {
            $fileName .= '.'.$fileExtension;
        }

        $this->storage->disk()->put($fileName, $this->getFileData($fileData));
    }

}