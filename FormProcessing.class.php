<?php

class FormProcessing
{
    private $currency_from;
    private $currency_to;
    private $amount_from;

    public function __construct($array)
    {
        $this->currency_from = $this->checkInput($array['currency_from']);
        $this->currency_to   = $this->checkInput($array['currency_to']);
        $this->amount_from   = $this->checkNumeric($this->checkInput($array['amount_from']));
    }

    private function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    private function checkNumeric($amount_from)
    {
        
        if ((!preg_match("|^[\d]+$|", $amount_from)) or (1000000<$amount_from)) {
            $amount_from = 0;
        }

        return $amount_from;
    }

    public function getData()
    {
        return [$this->currency_from, $this->currency_to, $this->amount_from];
    }
}

$a = new FormProcessing([currency_from=>7, currency_to=>6, amount_from=>2]);

var_dump($a->getData());
