<?php

/**
 * Auth check
 */
function authCheck($table, $col, $data){
    $login_data = connect()->query("SELECT * FROM {$table} WHERE {$col}='$data'");

    if( $login_data-> num_rows == 1){
        return $login_data->fetch_object();
    }else{
        return false;
    }

}

/**
 * Password Check
 */
function passwordCheck($user_pass, $db_pass){
    $data = password_verify($user_pass, $db_pass);
    if($data == true){
        return true;
    }else{
        return false;
    }
}





?>>