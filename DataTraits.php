<?php

trait DataTraits {
    final public function getRowById($id){
        $args = array(
            'where' => array(
                'id' => $id
            )
        );
        return $this->select($args);
    }
    final public function selectAllrow(){
        return $this->select();
    }
    final public function deleteRowById($id){
        $args = array(
            'where' => array(
                'id' => $id
            )
        );
        return $this->delete($args);
    }
    final public function updateData($data,$user_id){
        //UPDATE table SET col_name = value, col_name = value WHERE id = id;
        $args = array(
            'where' => array(
                'id' => $user_id
            )
        );
        $status = $this->update($data,$args);
        if($status){
            return $user_id;
        }else {
            return false;
        }
    }
    public function insertData($data){
        return $this->insert($data);
    }
    public function getAllRows(){
        return $this->select();
    }
}