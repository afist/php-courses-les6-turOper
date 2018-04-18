<?php
/**
*
*/
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
        return json_decode($json);
    }

    public function readFile()
    {
        return $this->converJsonToPhp($this->readFileJson());
    }
}

function nicePrint($str)
{
    echo "<pre>";
    print_r($str);
    echo "</pre>";
}
$a = new ReadFile('database.json');
$array = $a->readFile();
// nicePrint($array);





foreach ($array as $key => $value) {
   
}
nicePrint($key);
