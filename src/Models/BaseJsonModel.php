<?php

namespace LaravelJsonStorage\Models;

use Illuminate\Support\Str;
use LaravelJsonStorage\Exceptions\PageNotFoundException;
use LaravelJsonStorage\Exceptions\ServerErrorException;

class BaseJsonModel
{
    /**
     * We specify the name of the folder for saving model files with
     * '/' at the end of the title
     * */
    protected $dataDir = '';
    protected $dataPath = storage_path('data/');

    public function filePath($name)
    {
        return ($this->dataDir !== '')
            ? $this->dataPath . $this->makeDirectory($this->dataDir) . '/' . $name . '.json'
            : $this->dataPath . $name . '.json';
    }

    public function fileNameGenerate()
    {
        return Str::uuid();
    }

    /**
     * @throws PageNotFoundException
     */
    public function get($fileName = '')
    {
        try {
            if ($fileName === '' || !$this->checkFile($this->filePath($fileName))) {
                throw new PageNotFoundException('FileName need');
            }

            $jsonContents = file_get_contents($this->filePath($fileName));
            return json_decode($jsonContents, true);

        } catch (\Exception $exception) {
            throw new PageNotFoundException('FileName need');
        }
    }

    /**
     * @throws PageNotFoundException
     */
    public function getOrCreate($fileName = '')
    {
        try {
            if ($fileName === '') {
                throw new PageNotFoundException('FileName need');
            }
            $this->checkOrCreateFile($this->filePath($fileName));
            $jsonContents = file_get_contents($this->filePath($fileName));

            $data = json_decode($jsonContents, true);

            return (is_null($data)) ? [] : $data;

        } catch (\Exception $exception) {
            throw new PageNotFoundException('FileName need');
        }
    }

    public function create(array $data)
    {
        $fileName = $this->fileNameGenerate();
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($this->filePath($fileName), $jsonData);
        return $fileName;
    }

    public function update($fileName, array $data)
    {
        try {

            $fileData = $this->get($fileName);

            $newFileData = array_merge($fileData, $data);
            $newJsonContents = json_encode($newFileData, JSON_PRETTY_PRINT);

            file_put_contents($this->filePath($fileName), $newJsonContents);

            return $newFileData;

        } catch (\Exception $exception) {
            throw new ServerErrorException($exception->getMessage());
        }
    }

    public function checkFile($filePath)
    {
        return file_exists($filePath);
    }

    public function checkOrCreateFile($filePath)
    {
        if (!file_exists($filePath)) {
            touch($filePath);
        }
        return $filePath;
    }

    public function makeDirectory($dataDir)
    {
        $this->createDirectoryTree($this->dataPath . $dataDir);
        return $dataDir;
    }

    public function createDirectoryTree($path)
    {
        if (!is_dir($path)) {
            // Створюємо директорію, якщо вона не існує
            mkdir($path, 0775, true);
        }
    }

//    // Рекурсивно створюємо дерево папок
//    function createTree($tree, $path) {
//        foreach ($tree as $folderName => $subTree) {
//            $folderPath = $path . '/' . $folderName;
//            createDirectoryTree($folderPath);
//
//            if (!empty($subTree)) {
//                createTree($subTree, $folderPath);
//            }
//        }
//    }
}
