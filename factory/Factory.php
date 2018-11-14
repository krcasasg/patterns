<?php
class Factory
{
    public $var;

    public static function create($type, $var)
    {
        switch ($type) {
            case 'TypeA':
                return new TypeA($var);
                break;
            case 'TypeB':
                return new TypeB($var);
            default:

                break;
        }
    }

    public function getType()
    {
        return get_class($this);
    }
}
