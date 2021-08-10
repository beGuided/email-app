<?php

class User extends Db_object {
    protected static $db_table = "users";
    protected static $db_table_field = array( 'first_name','last_name','user_email','user_password');

    public $id;
    public $first_name;
    public $last_name;
    public $user_email;
    public $user_password;



    public static function verify_user($user_email, $user_password){
        global $database;
        $user_email = $database->escape_string($user_email);
        $user_password = $database->escape_string($user_password);

        $sql= "SELECT * FROM " .self::$db_table ." WHERE ";
        $sql.= "user_email = '{$user_email}' ";
        $sql.= "AND user_password ='{$user_password}' ";
        $sql.="LIMIT 1";

        $query_result =self::find_query($sql);
        return !empty($query_result)? array_shift($query_result) : false;


    }





}