<?php

class Model
{
    protected $db = null;
    public function __construct(){
        $this->db = DB::connection_to_DB();
    }
}