<?php


namespace App\Entity;


use App\Services\ITransform;

class SpacesToDashes implements ITransform
{

    public function transform(string $string): string
    {
        // TODO: Implement transform() method.
        //might need to say $string instead of $_POST['input']
        str_replace(' ', '-', $_POST['input']);
    }
}
