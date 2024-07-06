<?php

final class Gallary extends Database {
    use DataTraits;
    public function __construct(){
        parent::__construct();
        $this->table = 'gallary';
    } 
    public function getAllImageFromGallary($gallary_id){
        $args = array(
            'where' => array(
                'gallary_id'=>$gallary_id
            )
        );
        return $this->select($args);
    }

    public function deleteImageById($del_image_name){
        //debug($del_image_name,true);
        $args = array(
            'where' => array(
                'image'=>$del_image_name
            )
        );
        return $this->delete($args);
    }

    
}
