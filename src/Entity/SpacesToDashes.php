<?php


namespace App\Entity;


use App\Services\ITransform;

class SpacesToDashes implements ITransform
{

    public function transform(string $string): string
    {
        // TODO: Implement transform() method.
        str_replace(' ', '-', $string);
    }
}
