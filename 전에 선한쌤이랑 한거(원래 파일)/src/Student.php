<?php
namespace src;

class Student extends Human
{
    public $code;

    public function __construct(string $name, array $hobbies, int $code)
    {
        parent::__construct($name, $hobbies);
        $this->code = $code;
    }

    public function setCode(int $code)
    {
        $this->code = $code;
    }
}