<?php

echo 'testtt<br/>';

class OrderShipped{

	protected $order;

	public function __construct($var)
    {
        $this->order = $var;
    }


    public function show(){


    	return $this->order;
    }
}


$exs = new OrderShipped('blabla');


echo $exs->show();