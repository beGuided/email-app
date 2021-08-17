<?php
include_once('init.php');

if(!$session->is_signed_in()){ redirect("login.php");}

// get signed in user information
$sender = User::find_by_id($_SESSION['user_id']);
$sender_email = $sender->user_email;
$sender_name = $sender->first_name;


$email= new Email();


if(isset($_POST['Send'])){
    $email->sender_name=$sender_name ;
    $email->sender_id=$sender_email;
    $email->receiver_email_id=strtolower($_POST['receiver_email_id']);
    $email->subject=$_POST['subject'];
    $email->content=$_POST['content'];

    $email->create();
    redirect('create_mail.php');

}

?>



<?php include_once('includes/header.php');?>
<!-- sidebar  -->
<div class="container">
    <div class="main-wrapper">

        <?php include_once('includes/sidebar.php');?>


        <div class="form-container">
            <div class="header">

            </div>
            <form action="" method="post">
                <div>
                    From:
                    <input type="text" name="" value="<?php echo $sender_email;?>">

                </div>
                <hr>
                <div>
                    To:
                    <input type="text" name="receiver_email_id" value="">
                </div>
                <hr>
                <div>
                    Subject:
                    <input type="text" name="subject" value="">
                </div>
                <hr>

                <textarea placeholder="compose mail" name="content"   >
    </textarea>
<input type="submit"  value="Send" name="Send">
            </form>

        </div>
        </main>

    </div>

</div>

</body>

</html>