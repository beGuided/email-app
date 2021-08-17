
<?php
include_once('init.php');

if(!$session->is_signed_in()){ redirect("login.php");}

$user = User::find_by_id($_SESSION['user_id']);
$user_email = $user->user_email;

$emails = Email::find_mail_by_user_mail($user_email);


?>

<?php include_once('includes/header.php');?>
    <!-- sidebar  -->
    <div class="container">
        <div class="main-wrapper">

        <?php include_once('includes/sidebar.php');?>


                <!-- 2nd row -->
                <div class="row">
                    <div class="nav">
                        <ul>
                            <li class="header1"> <i class="fa fa-angle-up"></i> unread</li>
                            <li class="push"> <a href="#"></a> 2018-03-13</li>
                            <li class="more"> <a href="#"> <i class="f	fa fa-ellipsis-v"></i></a></li>
                        </ul>
                    </div>
                    <hr>

                    <table>
                        <?php foreach ($emails as $mail):?>
                        <tr>
                            <td><a href=""> <input type="checkbox"></a></td>
                            <td> <a href="view_mail.php?id=<?php echo $mail->id ?>"><i class="material-icons">star_outline</i></a></td>
                            <td><a href="view_mail.php?id=<?php echo $mail->id ?>"> <span><?php echo $mail->sender_name?></span></a></td>
                            <td class="tb-padding"><a href="view_mail.php?id=<?php echo $mail->id ?>"> <?php echo $mail->subject?> <span class="msg"><?php echo $mail->content?></span></a></td>
                            <td><a href="view_mail.php?id=<?php echo $mail->id ?>"><?php echo $mail->time?></a></td>


                        </tr>
                        <?php endforeach;?>

                    </table>
                </div>

                <!-- 3rd row -->
                <!-- <div class="row">
                    <div class="nav">

                        <ul>
                            <li class="header1"> <i class="fa fa-angle-up"></i> Everything else</li>
                            <li class="push"> <a href="#"></a> 2018-03-13</li>
                            <li class="more"> <a href="#"> <i class="fa fa-ellipsis-v"></i></a></li>
                        </ul>
                    </div>
                    <hr>

                    <table>

                        <tr>
                            <td><a href=""> <input type="checkbox"></a></td>
                            <td> <a href=""><i class="material-icons">star_outline</i></a></td>
                            <td><a href=""><span>Facebook</span></a></td>
                            <td class="tb-padding"><a href="">Aui-4602-Aui-4602- first first cut<span class="msg">atfirst first cut atfirst first cut at first firstfirst first cut at first firstfirst first cut at outputing</span></a></td>
                            <td><a href="">2018-03-13</a></td>


                        </tr>


                    </table>

                </div> -->

            </main>

        </div>

    </div>

</body>

</html>