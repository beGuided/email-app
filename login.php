
<?php
require_once('init.php');


// if($session->is_signed_in()){  redirect("login.php");}


if(isset($_POST['submit'])){
    $user_email = trim($_POST['user_email']);
    $user_password = trim($_POST['user_password']);

    //method to check and return database user
    $user_found = user::verify_user($user_email, $user_password);


    if($user_found){
        $session->login($user_found);
        redirect("index.php");
    }else{
     $the_message = " password or email are incorrect please try again";
    }

}else{
    $user_email ="";
    $user_password = "";
    $the_message="";
}

?>

<link rel="stylesheet" href="css/stylesheet.css">
        <!-- End Navbar -->
        <!-- <div class="container m-5">

            <div class="col-md-8 col-md-offset-3 ">

                <h4 class="bg-danger"></h4>

<form id="login-id" action="" method="post">

    <div class="form-group">
        <label for="user_email">user email</label>
        <input type="text" class="form-control" name="user_email" value="<?php echo htmlentities($user_email)?>">

    </div>

    <div class="form-group">
        <label for="user_password">Password</label>
        <input type="password" class="form-control" name="user_password" value="<?php echo htmlentities($user_password)?>">

                    </div>

                    <div class="form-group">
        <input type="submit" name="submit" value="log in" class="btn btn-primary">

    </div>

</form>
</div>


</div> -->



<div class="login-container">
<h4 class="error-message"><?php echo $the_message; ?></h4>
    <h3>Sign-in Your Account </h3>
            <div class="login-header">

            </div>
            <form action="" method="post">
                <div>
                    <label>Email:</label>
                    <input type="text"  name="user_email" value="<?php echo htmlentities($user_email)?>">

                </div>
                <hr>
                <div>
                        <label>Password:</label>
                    <input type="password"  name="user_password" value="<?php echo htmlentities($user_password)?>">
                </div>
                <hr>
             
<input type="submit"  value="Sign in" name="submit"> 
<a href="sign-up.php" style="text-decoration: none; color:red;">  <span >sign up</span></a>
            </form>

        </div>