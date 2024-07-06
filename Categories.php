<?php

final class Categories extends Database {
    use DataTraits;
    public function __construct(){
        parent::__construct();
        $this->table = 'categories';
    } 

    public function getAllMenu(){
        $args = array(
            'where' => "status = 'published'",
            'order_by' => "categories ASC"
        );
        return $this->select($args);
    }
}