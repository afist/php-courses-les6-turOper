<?php

namespace lib\ReadFile;

class ReadFile
{
    private $_file_way;
    private $_file = "";

    public function __construct($file_way)
    {
        $this->_file_way = $file_way;
    }
    private function _readFileJson()
    {
        $file = "";
        $file_open = fopen($this->_file_way, 'r');
        if ($file_open) {
            while (!feof($file_open)) {
                $mytext = fgets($file_open, 999);
                $file .=$mytext;
            }
        }
        fclose($file_open);
        return $file;
    }

    public function readFile()
    {
        return json_decode($this->_readFileJson(), true);
    }
}

// $file = '1.txt';
// header('Content-Type: txt');
// header('Content-Disposition: attachment; filename="1.txt"');
// readfile($file);
