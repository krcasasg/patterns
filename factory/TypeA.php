<?php
class TypeA extends Factory
{
        public function __construct($var)
        {
            $this->var = $var;
            echo "create type A with var: " . $this->var . '<br>';
        }
}
