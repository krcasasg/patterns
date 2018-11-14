<?php
class Strategy
{
    protected $some = null;

    public function __construct($some)
    {
        $this->some = $some;
    }

    public function setStrategy($some)
    {
        $this->some = $some;
    }

    public function dosomething()
    {
        return $this->some->output();
    }
}
