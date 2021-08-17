<?php

class Email extends Db_object {
    protected static $db_table = "emails";
    protected static $db_table_field = array( 'sender_name','sender_id','subject','time()','content','receiver_email_id','status');

    public $id;
    public $sender_name;
    public $sender_id;
    public $subject;
    public $time;
    public $content;
    public $receiver_email_id;
    public $status;

//    public static function create_comment($photo_id, $author='john', $body=''){
//        if(!empty($photo_id) && !empty($author) && !empty($body)){
//            $comment = new Comment();
//            $comment->photo_id= (int)$photo_id;
//            $comment->author =$author;
//            $comment->body =$body;
//
//            return $comment;
//        }else{
//            return false;
//        }
//
//    }
    public static function find_mail_by_user_mail($user_email=""){
        global $database;
        $user_email = $database->escape_string((string)$user_email);
        $sql = "SELECT * FROM " . self::$db_table;
        $sql .= " WHERE receiver_email_id = '$user_email' ";
        $sql .=" ORDER BY id DESC";
        $sql .=" LIMIT 15";

        return self::find_query($sql);

    }




}