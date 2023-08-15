<?php

namespace LaravelJsonStorage\Interfaces;

interface ModelFactory
{
    public function get(string $fileName);

    public function create(array $data, string $fileName);

    public function update(string $fileName, array $data);
}
