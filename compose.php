<?php
include "init.php";
//$database =new Database();
echo 'hello there';
//
//$sql = "SELECT * FROM users";
//$user_result=$database->query($sql);
//$users=mysqli_fetch_array($user_result);

//$user = new Email();
//$user->title= 'NBC';
//$user->sender='louis';
//$user->subject='employment letter';
//$user->content='adejoh93@email.com';
//$user->create();
//

//$user = User::find_by_id(4);
//
//$user->delete();


//$user = new User();
//$user->first_name= 'Mona';
//$user->save();

//$user =new User()
$user_email='adejoh93@email.com ';
//$user_email='adejoh';
$emil = Email::find_mail_by_user_mail($user_email);

echo "<pre>";
var_dump($emil);
echo"</pre>" ;