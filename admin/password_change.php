<?php include_once "tamplates/header.php"; ?>
<?php 

    use Edu\Board\Controller\User;

    $user = new User;
    



 ?>

<section id="content">
<section class="hbox stretch">
<section>
    <section class="vbox">
        <section class="scrollable padder">
            <section class="row m-b-md">
                <div class="col-sm-6">
                    <h3 class="m-b-xs text-black">Settings</h3>
                    <small>Welcome back, <?php echo $_SESSION['name']; ?>, <i class="fa fa-map-marker fa-lg text-primary"></i> <?php echo $_SESSION['email']; ?></small>
                </div>
                <div class="col-sm-6 text-right text-left-xs m-t-md">
                    <div class="btn-group">
                        <a class="btn btn-rounded btn-default b-2x dropdown-toggle" data-toggle="dropdown">Widgets <span class="caret"></span></a>
                        <ul class="dropdown-menu text-left pull-right">
                            <li><a href="#">Notification</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Analysis</a></li>
                            <li class="divider"></li>
                            <li><a href="#">More settings</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-icon b-2x btn-default btn-rounded hover"><i class="i i-bars3 hover-rotate"></i></a>
                </div>
            </section>

    <!-- Our site content -->
        <?php 

            if (isset($_POST['pass'])) {

                // Get value 
                $old_pass  = $_POST['old_pass'];
                $new_pass  = $_POST['new_pass'];
                $conf_pass  = $_POST['conf_pass'];
                $user_id = $_SESSION['id'];

                // //check old password
                // $user ->checkOldPass($old_pass, $user_id);

                //confirm password check
                if ($new_pass == $conf_pass) {
                    $cpass = true;
                }else{
                    $cpass = false;
                }


                //old password check
                if (password_verify($old_pass, $_SESSION['pass']) ) {
                    $old_pass_check = true;
                }else{
                    $old_pass_check = false;
                }







                if (empty($old_pass) || empty($new_pass) || empty($conf_pass) ) {
                    $mess =  "<p class=\"alert alert-danger\"> All Filds Are Required! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
                }elseif($cpass == false){
                    $mess =  "<p class=\"alert alert-warning\"> Password Not Match! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
                }elseif($old_pass_check == false){
                    $mess =  "<p class=\"alert alert-warning\"> Old Password Not Match! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
                }else{
                    $mess = $user -> passwordChange($user_id, $new_pass);

                }
            }











         ?>






        <div class="col-sm-10">

                <?php 

                    
                        if (isset($mess)) {
                            echo $mess;
                        } 

                    ?>
            <section class="panel panel-default">
                <header class="panel-heading font-bold">Change Password</header>
                <div class="panel-body">
                    <form class="bs-example form-horizontal" action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="POST">


                        <div class="form-group">
                            <label class="col-lg-2 control-label">Old Password</label>
                            <div class="col-lg-10"><input name="old_pass" type="password" class="form-control" /> </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">New Password</label>
                            <div class="col-lg-10"><input name="new_pass" type="password" class="form-control" /></div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Confirm Password</label>
                            <div class="col-lg-10"><input name="conf_pass" type="password" class="form-control"/></div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10"><button name="pass" type="submit" class="btn btn-sm btn-default">Change Password</button></div>
                        </div>

                    </form>
                </div>
                </section>
            </div>





                </section>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>









<?php include_once "tamplates/footer.php"; ?>