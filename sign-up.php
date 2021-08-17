
<?php
require_once('init.php');

// if($session->is_signed_in()){  redirect("login.php");}

$user  = new User();

if(isset($_POST['submit'])){

    $user_email = trim($_POST['user_email']);

    //method to check and return database user
    $user_found = user::verify_if_email_exist($user_email);


    if($user_found){
        $the_message = "this email already exist try another";     
    }
    
    else{   
     $the_message = "Account Created Successfully <a href= 'login.php'> click here to login </a>"; 

    $user->first_name = $_POST['first_name'];
    $user->last_name = $_POST['last_name'];
    $user->user_email = strtolower($_POST['user_email']);
    $user->user_password = $_POST['user_password'];    
    $user->create();
            
    //  redirect("login.php");
    
    }

}else{
   
    $user->first_name = "";
    $user->last_name = "";
    $user->user_email = "";
    $user->user_password ="";   
    $the_message="";
  
}

?>

<link rel="stylesheet" href="css/stylesheet.css">


<div class="login-container">
<p class="success-message"><?php echo $the_message; ?></p>
    <h3>Create Your Account </h3>
            <div class="login-header">

            </div>
            <form action="" method="post">
            <div>
                    <label>First Name:</label>
                    <input type="text"  name="first_name" required value="">

                </div>
                <hr>
                <div>
                    <label>Last Name:</label>
                    <input type="text"  name="last_name" required value="">

                </div>
                <hr>
                <div>
                    <label>Set Email:</label>
                    <input type="text"  name="user_email" required value="">

                </div>
                <hr>
                <div>
                        <label>Set Password:</label>
                    <input type="password"  name="user_password" required value="">
                </div>
                <hr>
             
<input type="submit"  value="Sign up" name="submit">
<a href="login.php" style="text-decoration: none; color:red;">  <span>sign in</span></a>
</form>

        </div>