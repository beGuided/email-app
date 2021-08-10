
<?php  include_once('init.php');

if(!$session->is_signed_in()){ redirect("login.php");}

if(empty($_GET['id'])) {
    redirect("index.php");
}else{
    $mail_id= $_GET['id'];
}
// select all where from  email sender= user_email
$email = Email::find_by_id($mail_id)
?>


<?php include_once('includes/header.php');?>
<!-- sidebar  -->
<div class="container">
    <div class="main-wrapper">

        <?php include_once('includes/sidebar.php');?>

        <?php
        echo "$email->subject";
        ?>

    </div>

    </main>



</div>

</div>

</body>

</html>