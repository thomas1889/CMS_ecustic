<?php

class DownloadFile{

    private $mimeType;

    private $filename;

    private $downloadName;

    public function __construct($file, $mimeType = '', $downloadName = '')

    {

        if(!file_exists($file)) return;

        $this->filename = $file;

        $this->mimeType = $mimeType;

        if($downloadName != '')

            $this->downloadName = $downloadName;

        else

            $this->downloadName = $file;

    }

    public function download()

    {

 
        header("Content-type: ".$this->mimeType);

        header("Content-length: ".filesize($this->filename));

        header("Content-Disposition: attachment; filename=\"".$this->downloadName."\n");

        readfile($this->filename);

    }

    public function setMimeType($mimeType)

    {

        $this->mimeType = $mimeType;

    }

    public function setDownloadName($downloadName)

    {

        $this->downloadName = $downloadName;

    }

}

?>
