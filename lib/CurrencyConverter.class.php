<?php

namespace lib\CurrencyConverter;

class CurrencyConverter
{
    private $_array;
    private $_file;
    private $_currency_from_val = 1;
    private $_currency_to_val = 1;
    private $_amount_from;
    private $_currency_to_txt;
    private $_currency_from_txt;


    public function __construct($array, $file)
    {
        $this->_array = $array;
        $this->_file = $file;
        $this->_amount_from = $array[2];
    }
    private function _getConvertCurs()
    {
        foreach ($this->_file as $value) {
            foreach ($value as $k => $v) {
                if ($v == $this->_array[0]) {
                    $this->_currency_from_val = $value['rate'];
                    // $this->currency_from_txt = $value['txt'];
                }
                if ($v == $this->_array[1]) {
                    $this->_currency_to_val = $value['rate'];
                    // $this->currency_to_txt = $value['txt'];
                }
            }
        }
    }
    public function getVal()
    {
        $this->_getConvertCurs();
        return $this->_currency_from_val / $this->_currency_to_val * $this->_amount_from;
    }

    // public function getCurrencyToTxt()
    // {
    //     return $this->currency_to_txt;
    // }

    // public function getCurrencyFromTxt()
    // {
    //     return $this->currency_from_txt;
    // }
}
