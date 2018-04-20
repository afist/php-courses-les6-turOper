<?php
namespace lib\FormProcessing;

class FormProcessing
{
    private $_currency_from;
    private $_currency_to;
    private $_amount_from;

    public function __construct($array)
    {
        $this->_currency_from = $this->_checkInput($array['currency_from']);
        $this->_currency_to   = $this->_checkInput($array['currency_to']);
        $this->_amount_from   = $this->_checkNumeric($this->_checkInput($array['amount_from']));
    }

    private function _checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    private function _checkNumeric($amount_from)
    {
        
        if ((!preg_match("|^[\d]+$|", $amount_from)) or (1000000<$amount_from)) {
            $amount_from = 0;
        }

        return $amount_from;
    }

    public function getData()
    {
        return [$this->_currency_from, $this->_currency_to, $this->_amount_from];
    }
}
