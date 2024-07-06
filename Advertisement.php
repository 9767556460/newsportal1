<?php

final class Advertisement extends Database {
    use DataTraits;
    public function __construct(){
        parent::__construct();
        $this->table = 'ads';
    } 

    function getAdsbyPosition($position){
        $args = array(
            'where' => "posn = '".$position."' AND status = 'active' AND DATE(start_date) <= '".date('Y-m-d')."' AND DATE(end_date) >= '".date('Y-m-d')."'",
            'order_by' => "id DESC",
            'limit' => '0,1'
        );
        return $this->select($args);
    }
}