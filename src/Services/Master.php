<?php


namespace App\Services;


class Master
{

        private $transform;
    /**
     * Master constructor.
     */
    public function __construct(ITransform $transform)
    {
        $this->transform = $transform;
    }
}
