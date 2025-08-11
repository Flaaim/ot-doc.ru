<?php

namespace App\Model;

use App\Model\Template\Template;

final class Download
{
    protected string $upload_dir;
    protected Template $template;
    protected string $mime;

    public function __construct(string $upload_dir, Template $template, string $mime)
    {
        $this->upload_dir = $upload_dir;;
        $this->template = $template;
        $this->mime = $mime;
    }
    public function download($filename): void
    {
        $path = $this->upload_dir.  $this->template->slug . '/'. $filename.'.'.$this->mime;
        if(!file_exists($path)){
            throw new \Exception('File not found', 404);
        }
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