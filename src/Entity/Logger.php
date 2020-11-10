<?php


namespace App\Entity;


class Logger
{
    public function log($message)
    {
        file_put_contents(__DIR__, $message, FILE_APPEND);
   }
}
