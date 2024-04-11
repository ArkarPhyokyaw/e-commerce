<?php
namespace App\Classes;
class UpdateFile{
    protected $filename;
    protected $maxSize= 2000000;
    public function setName($file,$name="")
    {
        if($name===""){
            $name=pathinfo($file->file->tmp_name,PATHINFO_FILENAME);
        }
        $name = strtolower(str_replace(["_",""],"-",$name));

        $hash=md5(microtime());
        $ext=pathinfo($file->file->name,PATHINFO_EXTENSION);

        return "{$name}-{$hash}.{$ext}";
        
    }


    public function checkSize($file)
    {
       return  $file->file->size > $this->maxSize ? true: false;
    }


    public function isImage($file)
    {
        $ext=pathinfo($file->file->name,PATHINFO_EXTENSION);
        $validExt = ["jpg", "png", "gif", "jpeg", "bmp"];
        return in_array($ext, $validExt);
    }

    public function getPath($file)
    {
        return ($file->file->tmp_name);
    }


    public function move($file,$final_name="")
    {
         $name=$this->setName($file);
         return $name;
    }
}
?>