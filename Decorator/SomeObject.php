<?php
class SomeObject
{
    protected $var_x;
    protected $var_y;

    public function __construct($x, $y)
    {
        $this->var_x = $x;
        $this->var_y = $y;
    }

    public function getX()
    {
        return $this->var_x;
    }

    public function getY()
    {
        return $this->var_y;
    }

}
