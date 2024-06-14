<?php

namespace App\Interfaces;

interface ResourceCollectionInterface
{
    public function transformCollection($collection): array;
}
