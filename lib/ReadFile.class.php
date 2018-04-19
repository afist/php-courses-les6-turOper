<?php
/**
*
*/
namespace lib\ReadFile;

class ReadFile
{
    private $file_way;
    private $file = "";

    public function __construct($file_way)
    {
        $this->file_way = $file_way;
    }
    private function readFileJson()
    {
        $file = "";
        $file_open = fopen($this->file_way, 'r');
        if ($file_open) {
            while (!feof($file_open)) {
                $mytext = fgets($file_open, 999);
                $file .=$mytext;
            }
        }
        fclose($file_open);
        return $file;
    }
    private function converJsonToPhp($json)
    {
        return json_decode($json, true);
    }

    public function readFile()
    {
        return $this->converJsonToPhp($this->readFileJson());
    }
}
