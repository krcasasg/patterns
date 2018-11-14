<?php
include_once 'SomeObject.php';
class Decorator
{
    protected $so = null;

    public function __construct(SomeObject $some){
        $this->so = $some;
    }
//EXTRA FUNCTIONALITY
    public function getFirstX(){
        echo "first x: " . $this->so->getX() . ' after y: ' . $this->so->getY() . '<br>';
    }

    public function getFirstY(){
        echo "first y: " . $this->so->getY() . ' after x: ' . $this->so->getX() . '<br>';
    }
}
