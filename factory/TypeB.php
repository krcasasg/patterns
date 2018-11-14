<?php
class TypeB extends Factory
{
        public function __construct($var)
        {
            $this->var = $var;
            echo "create type B with var: " . $this->var .'<br>';
        }
}
