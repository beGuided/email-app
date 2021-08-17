
<?php  include_once('init.php');

if(!$session->is_signed_in()){ redirect("login.php");}

if(empty($_GET['id'])) {
    redirect("index.php");
}else{
    $mail_id= $_GET['id'];
}

$email = Email::find_by_id($mail_id)
?>


<?php include_once('includes/header.php');?>
    <!-- sidebar  -->
    <div class="container">
        <div class="main-wrapper">

        <?php include_once('includes/sidebar.php');?>

    <p class="large-font">  <?php echo "$email->subject"; ?></p>
            <div class="contain">
                  <span class="bold"><?php echo "$email->sender_name"?></span>
                    <span class="to-right "><?php echo "$email->time"; ?></span>
                    <span>icon</span>
                    <span>icon</span>
                    <span>icon</span>
                </div>
                    <p>to me</p>
            <p><?php echo "$email->content"; ?></p>

                </div>
            </div>



        </div>

        </main>



    </div>

    </div>

</body>

</html>