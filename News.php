<?php

final class News extends Database {
    use DataTraits;
    public function __construct(){
        parent::__construct();
        $this->table = 'news';
    } 

    public function getFeaturedNews($limit){
        $args = array(
            'where' => "is_featured = 1 AND status = 'active'",
            'limit' => ' 1, '.$limit
        );
        return $this->select($args);
    }

    public function getNewsById($news_id){
        $args = array(
            'where' => "id = '".$news_id."' AND status = 'active'"
        );
        return $this->select($args);
    }
    public function getTrendingNews($limit,$id){
        $args = array(
            'where' => "is_trending = 1 AND status = 'active' AND id !='".$id."'",
            'limit' => ' 1, '.$limit
        );
        return $this->select($args);
    }

    public function getNewsByCat($id){
        $args = array(
            'where' => "cat_id = '".$id."'"
        );
        return $this->select($args);
    }
}