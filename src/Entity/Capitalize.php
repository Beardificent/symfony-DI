<?php


namespace App\Entity;


use App\Services\ITransform;

class Capitalize implements ITransform
{

    public function transform(string $string): string
    {
        // DOESN'T WORK, outdated for symfony apprantly. will write one later. test with
        //spacestodashes
        preg_replace('/(\w)(.)?/e', "strtoupper('$1').strtolower('$2')", $string);
       // preg_replace('/(\w)(.)?/e', "strtoupper('$1').strtolower('$2')", $_POST['input']);
    }
}
