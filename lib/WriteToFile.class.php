<?php
namespace lib\WriteToFile;

class WriteToFile
{
    private $_file_way;
    private $_need_text;

    // public function __construct( $file_way = '1.txt')
    // {
    //     $this->file_way = $file_way;
    // }
    public function writeToFile($need_text, $file_way = '1.txt')
    {
        file_put_contents($file_way, $need_text);
    }
}
