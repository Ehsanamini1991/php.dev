<?php
class Db{
    public $table;

    public function all(){

        return "SELECT *FROM {this->table} ";

    }

    public function find($id,$columns=null){

     $columns=array('users','id');
        $columns=!is_null($columns) ? implode(',',$columns) :'*';
       echo "SELECT {$columns} FROM {$this->table} WHERE id={$id}";
    }

    public function delete($id){

        return "SELECT FROM {$this->table} WHERE id={$id}";

    }

    private function check_array(){

    }
}


$connection=new Db;
$connection->table="users";
$connection->find(1);
?>