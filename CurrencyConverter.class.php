<?php

class CurrencyConverter
{
    private $array;
    private $file;
    private $currency_from_val;
    private $currency_to_val;
    private $amount_from;

    public function __construct($array, $file)
    {
        $this->array = $array;
        $this->file = $file;
        $this->amount_from = $array[2];
    }
    private function convert()
    {
    	foreach ($this->file as $value) {
    	    foreach ($value as $k => $v) {
    	        if ($v == $this->array[0]) {
    	            $this->currency_from_val = $value['rate'];
                }
                if ($v == $this->array[1]) {
                    $this->currency_to_val = $value['rate'];
                }
            }
        }
    }
    private function convert2()
    {

    }

}

$a = new CurrencyConverter([currency_from=>7, currency_to=>6, amount_from=>2], "1,2,3,4,5,6");
