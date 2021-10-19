<?php

 /**
  * Database connection
  */
  function connect(){
      return new mysqli(HOST, USER, PASS, DB);
  }
/**
 * create
 */
  function create($sql){
    connect()->query($sql);
  }


/**
 * get all data
 */
  function all($table, $order= "ASC"){
    return connect()->query("SELECT * FROM {$table}");
  }
  /**
   * delete
   */
  function delete($table,$id){
    return connect()->query("DELETE FROM {$table} WHERE id='$id'  ");
  }

 /**
  * Data exists check
  */
  function dataCheck($table, $col, $val){
    $data = connect()->query("SELECT {$col} FROM {$table} WHERE {$col}='$val'");

    if($data->num_rows > 0){
      return false;
    }else{
      return true;
    }
  }