<?php

final class Videos extends Database {
    use DataTraits;
    public function __construct(){
        parent::__construct();
        $this->table = 'videos';
    } 
}