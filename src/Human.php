<?php

namespace src;

class Human
{
    public $name;
    public $hobbies = [];
    //멤버변수를 선언할 때는 접근저에자와 변수이름만을 사용하면된다.
    //코딩, 게임, 먹기

    public function __construct(string $name, array $hobbies)
    {
        $this->name = $name;
        $this->hobbies = $hobbies;
    }

    //타입이 있는 강형 언어들(c, java) => 타입을 없애버렸어(php, 파이썬, 자바스크립트)
    public function hasHobby(string $name) : bool
    {
        return in_array($name, $this->hobbies);
    }

    public function insertHobby(string $hobby)
    {
        $this->hobbies[] = $hobby;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
