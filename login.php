<?php
require_once('init.php');

if($session->is_signed_in()){
    redirect("login.php");
}


if(isset($_POST['submit'])){
    $user_email = trim($_POST['user_email']);
    $user_password = trim($_POST['user_password']);

    //method to check and return database user
    $user_found = user::verify_user($user_email, $user_password);


    if($user_found){
        $session->login($user_found);
        redirect("index.php");
    }else{
     $the_message = "your password or user_email are incorrect";
    }

}else{
    $user_email ="";
    $user_password = "";
    $the_message="";
}

?>

        <!-- End Navbar -->
        <div class="container m-5">

            <div class="col-md-8 col-md-offset-3 ">

                <h4 class="bg-danger"><?php echo $the_message; ?></h4>

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


</div>

