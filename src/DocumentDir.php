<?php

namespace App;

class DocumentDir
{
    protected string $dir;

    public function __construct($dir)
    {
        $this->dir = $dir;
    }


    public function downloadFile($filename): void
    {
        //$path = dirname(__DIR__, 3).'/uploads/'.$filename;
        $path = $this->dir.'/instructions/'.$filename;
        if(file_exists($path)){

            header('Content-Type: application/octet-stream');
            header('Content-Disposition: filename="'.basename($path).'"');
            header("Expires: 0");
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: '. filesize($path));
            readfile($path);
            exit();
        }
    }

}