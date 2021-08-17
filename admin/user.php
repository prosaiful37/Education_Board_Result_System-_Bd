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
                    <h3 class="m-b-xs text-black">All Users</h3>
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
     

    <!-- modal -->
    <div id="add_user_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3>Add New User</h3>
               <!--  <div class="mess"></div> -->
                <hr>
            </div>
            <div style="background-color:#1AAE88;" class="modal-body">
             <form id="add_user_form" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group text-dark">
                    <label for="">Name</label>
                    <input name="name" class="form-control" type="text">
                </div>
                <div class="form-group text-dark">
                    <label for="">Username</label>
                    <input name="uname" class="form-control" type="text">
                </div>
                <div class="form-group text-dark">
                    <label for="">E-mail</label>
                    <input name="email" class="form-control" type="text">
                </div>
                <div class="form-group text-dark">
                    <label for="">Cell</label>
                    <input name="cell" class="form-control" type="text">
                </div>
                <div class="form-group text-dark">
                    <label for="">Role</label>
                    <select class="form-control" name="role" id="">
                        <option value="">-select-</option>
                        <option value="Admin">Admin</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Staff">Staff</option>
                    </select>
                </div>
                <div class="form-group">
                    <input name="add" class="btn btn-dark btn-block" type="submit" value="Add User">
                </div>
             </form>
            </div>
               <!--  <div class="modal-footer"></div> -->
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="mess"></div>
            <a id="add_user_btn" class="btn btn-sm btn-info" href="#">Add New User</a>
            <br>
            <br>
    <section class="panel panel-default">
        <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> ALL Users</header>
        <table class="table table-striped m-b-none">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>Cell</th>
                    <th>Role</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="all_users_tbody">
                
            </tbody>
        </table>
    </section>
</div>



    </div>

   






                </section>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>









<?php include_once "tamplates/footer.php"; ?>