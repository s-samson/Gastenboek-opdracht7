<?php

class gastenboek
{
    public $id;
    public $naam;
    public $bericht;
    public $datumtijd;

    public function __construct(){
        settype($this->id,'integer');
    }


}