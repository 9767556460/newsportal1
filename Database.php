<?php

abstract class Database{
    protected $conn = null;
    protected $sql = null;
    protected $stmt = null;
    protected $table = null;
    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";",DB_USER,DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $this->sql = "SET NAMES utf8";
            $this->stmt = $this->conn ->prepare($this->sql);
            $this->stmt->execute();
        }catch(PDOException $e){
            $msg = date("Y-m-d H:i:s")."Connection(PDO): ".$e->getMessage()."\r\n";
            error_log($msg, 3, ERROR_PATH);
        }catch(Exception $e){
            $msg = date("Y-m-d H:i:s")."Connection(General ): ".$e->getMessage()."\r\n";
            error_log($msg, 3, ERROR_PATH);
        }
    }
    final protected function select($args = array(),$is_debug = false){
        try{
            //SELECT * FROM tables WHERE email = ...
            $this->sql = "SELECT ";

            if(isset($args,$args['fields']) && !empty($args['fields'])){
                if(is_string($args['fields'])){
                    $this->sql .= $args['fields'];
                }else {
                    $this->sql .= implode(', ',$args['fields']);
                }
            }else {
                $this->sql .= " * ";
            }
            if(!$this->table){
                throw new Exception("Table not set");
            }
            $this->sql .= " FROM ".$this->table;

            //JOIN

            //WHERE

            if(isset($args,$args['where']) && !empty($args['where'])){
                if(is_string($args['where'])){
                    $this->sql .= " WHERE ".$args['where'];
                }else {
                    $temp = array();
                    foreach($args['where'] as $col_name => $value){
                        $str = $col_name." = :".$col_name;
                        $temp[] = $str;
                    }
                    $this->sql .= " WHERE ".implode(" AND ",$temp);
                }
            }

            if($is_debug){
                debug($args);
                debug($this->sql,true);
            }
            $this->stmt = $this->conn->prepare($this->sql);
            if(isset($args['where']) && !empty($args['where']) && is_array($args['where'])){
                foreach($args['where'] as $col_name => $value){
                    if(is_int($value)){
                        $param = PDO::PARAM_INT;
                    }elseif(is_null($value)){
                        $param = PDO::PARAM_NULL;
                    }elseif(is_bool($value)){
                        $param = PDO::PARAM_BOOL;
                    }else {
                        $param = PDO::PARAM_STR;
                    }
                    if($param){
                        $this->stmt->bindValue(":".$col_name,$value,$param);
                    }
                }
            }

            $this->stmt->execute();
            $data = $this->stmt->fetchAll(PDO::FETCH_OBJ);
            return $data;

        }catch(PDOException $e){
            $msg = date("Y-m-d H:i:s")."Select(PDO): ".$e->getMessage()."\r\n";
            error_log($msg, 3, ERROR_PATH);
        }catch(Exception $e){
            $msg = date("Y-m-d H:i:s")."Select(General ): ".$e->getMessage()."\r\n";
            error_log($msg, 3, ERROR_PATH);
        }
    }
    final protected function update($data = array(),$args = array(),$is_debug = false){
        try{
            //UPDATE users SET
            //col_name = value,
            //col_name = value,
            //WHERE id = ....;
            $this->sql = "UPDATE ";

            if(!$this->table){
                throw new Exception("Table not set");
            }
            $this->sql .= $this->table.' SET ';
            
            if(isset($data) && !empty($data)){
                if(is_string($data)){
                    $this->sql .= $data;
                }else {
                    $temp = array();
                    foreach($data as $col_name => $value){
                        $str = $col_name." = :_".$col_name;
                        $temp[] = $str;
                    }
                    $this->sql .= implode(" , ",$temp);
                }
            }else {
                throw new Exception("Data not Set");
            }
            //WHERE

            if(isset($args,$args['where']) && !empty($args['where'])){
                if(is_string($args['where'])){
                    $this->sql .= " WHERE ".$args['where'];
                }else {
                    $temp = array();
                    foreach($args['where'] as $col_name => $value){
                        $str = $col_name." = :".$col_name;
                        $temp[] = $str;
                    }
                    $this->sql .= " WHERE ".implode(" AND ",$temp);
                }
            }

            if($is_debug){
                debug($args);
                debug($this->sql,true);
            }
            $this->stmt = $this->conn->prepare($this->sql);

            if(isset($data) && !empty($data) && is_array($data)){
                foreach($data as $col_name => $value){
                    if(is_int($value)){
                        $param = PDO::PARAM_INT;
                    }elseif(is_null($value)){
                        $param = PDO::PARAM_NULL;
                    }elseif(is_bool($value)){
                        $param = PDO::PARAM_BOOL;
                    }else {
                        $param = PDO::PARAM_STR;
                    }
                    if($param){
                        $this->stmt->bindValue(":_".$col_name,$value,$param);
                    }
                }
            }

            if(isset($args['where']) && !empty($args['where']) && is_array($args['where'])){
                foreach($args['where'] as $col_name => $value){
                    if(is_int($value)){
                        $param = PDO::PARAM_INT;
                    }elseif(is_null($value)){
                        $param = PDO::PARAM_NULL;
                    }elseif(is_bool($value)){
                        $param = PDO::PARAM_BOOL;
                    }else {
                        $param = PDO::PARAM_STR;
                    }
                    if($param){
                        $this->stmt->bindValue(":".$col_name,$value,$param);
                    }
                }
            }

            return $this->stmt->execute();

        }catch(PDOException $e){
            $msg = date("Y-m-d H:i:s")."Update(PDO): ".$e->getMessage()."\r\n";
            error_log($msg, 3, ERROR_PATH);
        }catch(Exception $e){
            $msg = date("Y-m-d H:i:s")."Update(General ): ".$e->getMessage()."\r\n";
            error_log($msg, 3, ERROR_PATH);
        }
    }
    final protected function insert($data = array(),$is_debug = false){
        try{
            //UPDATE users SET
            //col_name = value,
            //col_name = value,
            //WHERE id = ....;
            $this->sql = "INSERT INTO ";

            if(!$this->table){
                throw new Exception("Table not set");
            }
            $this->sql .= $this->table.' SET ';
            
            if(isset($data) && !empty($data)){
                if(is_string($data)){
                    $this->sql .= $data;
                }else {
                    $temp = array();
                    foreach($data as $col_name => $value){
                        $str = $col_name." = :_".$col_name;
                        $temp[] = $str;
                    }
                    $this->sql .= implode(" , ",$temp);
                }
            }else {
                throw new Exception("Data not Set");
            }

            if($is_debug){
                debug($this->sql,true);
            }
            $this->stmt = $this->conn->prepare($this->sql);

            if(isset($data) && !empty($data) && is_array($data)){
                foreach($data as $col_name => $value){
                    if(is_int($value)){
                        $param = PDO::PARAM_INT;
                    }elseif(is_null($value)){
                        $param = PDO::PARAM_NULL;
                    }elseif(is_bool($value)){
                        $param = PDO::PARAM_BOOL;
                    }else {
                        $param = PDO::PARAM_STR;
                    }
                    if($param){
                        $this->stmt->bindValue(":_".$col_name,$value,$param);
                    }
                }
            }

            $this->stmt->execute();
            return $this->conn->lastInsertId();

        }catch(PDOException $e){
            $msg = date("Y-m-d H:i:s")."Insert(PDO): ".$e->getMessage()."\r\n";
            error_log($msg, 3, ERROR_PATH);
        }catch(Exception $e){
            $msg = date("Y-m-d H:i:s")."Insert(General ): ".$e->getMessage()."\r\n";
            error_log($msg, 3, ERROR_PATH);
        }
    }
    final protected function delete($args = array(),$is_debug = false){
        try{
            //DELETE FROM table WHERE id = id
            $this->sql = "DELETE ";

            if(!$this->table){
                throw new Exception("Table not set");
            }
            $this->sql .= " FROM ".$this->table;

            //WHERE

            if(isset($args,$args['where']) && !empty($args['where'])){
                if(is_string($args['where'])){
                    $this->sql .= " WHERE ".$args['where'];
                }else {
                    $temp = array();
                    foreach($args['where'] as $col_name => $value){
                        $str = $col_name." = :".$col_name;
                        $temp[] = $str;
                    }
                    $this->sql .= " WHERE ".implode(" AND ",$temp);
                }
            }

            if($is_debug){
                debug($args);
                debug($this->sql,true);
            }
            $this->stmt = $this->conn->prepare($this->sql);
            if(isset($args['where']) && !empty($args['where']) && is_array($args['where'])){
                foreach($args['where'] as $col_name => $value){
                    if(is_int($value)){
                        $param = PDO::PARAM_INT;
                    }elseif(is_null($value)){
                        $param = PDO::PARAM_NULL;
                    }elseif(is_bool($value)){
                        $param = PDO::PARAM_BOOL;
                    }else {
                        $param = PDO::PARAM_STR;
                    }
                    if($param){
                        $this->stmt->bindValue(":".$col_name,$value,$param);
                    }
                }
            }

            return $this->stmt->execute();

        }catch(PDOException $e){
            $msg = date("Y-m-d H:i:s")."Delete(PDO): ".$e->getMessage()."\r\n";
            error_log($msg, 3, ERROR_PATH);
        }catch(Exception $e){
            $msg = date("Y-m-d H:i:s")."Delete(General ): ".$e->getMessage()."\r\n";
            error_log($msg, 3, ERROR_PATH);
        }
    }
}