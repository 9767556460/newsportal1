<?php

final class Galleries extends Database {
    use DataTraits;
    public function __construct(){
        parent::__construct();
        $this->table = 'galleries';
    } 
}