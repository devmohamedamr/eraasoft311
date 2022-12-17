<?php


class export{
    private $data;
    private $type;
    public function __construct($data,$type)
    {
        $this->data = $data;
        $this->type = $type;          
    }

    public function handle(){
        $type = new $this->type;
        $type->run();
    }
}