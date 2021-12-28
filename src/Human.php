<?php
namespace src;
 

class Human
{
    public $a;
    public $hobbies = [];
    // 멤버변수를 선언할 때는 접근제어자와 변수이름만 사용하면된다.
    
    public function __construct (string $name, array $hobbies)
    {
        $this->name = $name;
        $this->hobbies = $hobbies;
    }
    
    // 메서드
    public function hasHoddy(string $name) : bool
    {
        return in_array($name, $this->hobbies);
    }

    public function insertHobby(string $hobby){
        $this->hobbies[] = $hobby;
    }
    
    public function setName(string $name)
    {
        $this->name = $name;
    }

}
