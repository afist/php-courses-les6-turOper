<?php

namespace lib\CurrencyConverter;

class CurrencyConverter
{
    private $array;
    private $file;
    private $currency_from_val = 1;
    private $currency_to_val = 1;
    private $amount_from;
    private $amount;




    public function __construct($array, $file)
    {
        $this->array = $array;
        $this->file = $file;
        $this->amount_from = $array[2];
    }
    private function getConvertCurs()
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
    private function convert()
    {
        $this->getConvertCurs();
        $this->amount = $this->currency_from_val / $this->currency_to_val * $this->amount_from;
    }
    public function getVal()
    {
        $this->convert();
        return $this->amount;
    }
}
