<?php

class CurrencyConverter
{
    private $array;
    private $file;

    public function __construct($array, $file)
    {
        $this->array = $array;
        $this->file = $file;
    }
    public function convert(){
    	
    }

}

$a = new CurrencyConverter([currency_from=>7, currency_to=>6, amount_from=>2], "1,2,3,4,5,6");
