<?php
class Adapter
{
    public $var;

    public function __construct($v)
    {
        $this->var = $v;
    }

    public function AdapterMethod($u, $s, $t = '')
    {
        echo '------------------------------------------------------------------ <br>';
        if( $t != '' ){
            $this->method_U_S_T($u, $s, $t);
        }else{
            $this->method_U_S($u, $s);
        }

    }

    public function method_U_S_T($u, $s, $t){
        echo 'call method UST whith follow variables: $u: ' . $u . ' $s: ' . $s . ' $t: ' . $t . '<br>';
        echo '------------------------------------------------------------------ <br>';
    }

    public function method_U_S($u, $s){
        echo 'call method US whith follow variables: $u: ' . $u . ' $s: ' . $s . '<br>';
        echo '------------------------------------------------------------------ <br>';
    }

}
