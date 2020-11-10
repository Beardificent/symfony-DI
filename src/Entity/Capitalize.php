<?php


namespace App\Entity;


use App\Services\ITransform;

class Capitalize implements ITransform
{

    public function transform(string $string): string
    {
        // TODO: Implement transform() method.
        //might need to say $string instead of $_POST['input']
        preg_replace('/(\w)(.)?/e', "strtoupper('$1').strtolower('$2')", $_POST['input']);
    }
}
