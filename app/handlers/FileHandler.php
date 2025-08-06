<?php

namespace app\handlers;

class FileHandler{

    private string $name;
    private string $type;
    private string $size;
    private string $tmpName;
    private array $typeFileAllowed = [
        'image/png',
        'image/jpeg',
        'image/webp'
    ];
    private int $limiteOfMB = 5;


    public function __construct($file)
    {
        $this->name = $file['name'];
        $this->type = $file['type'];
        $this->size = $file['size'];
        $this->tmpName = $file['tmp_name'];

    }

    public function getNameFile() : string {
        return $this->name;
    }

    public function getTypeFile() : string {
        return $this->type;
    }
    
    public function getSizeFile() : string {
        return $this->size;
    }
    
    public function getTmpNameFile() : string {
        return $this->tmpName;
    }

    public function moveUploadedFile($destination) : bool{
        return move_uploaded_file($this->tmpName, $destination);
    }

    public function isTypeFileAllowed(){
        return in_array($this->type, $this->typeFileAllowed);
    }

    public function inLimiteOfMB(){
        return $this->size < $this->limiteOfMB * 1000000;
    }

    
}
