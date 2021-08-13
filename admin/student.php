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
                    <h3 class="m-b-xs text-black">All Student</h3>
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
                <h3>Add New Student</h3>
                <div class="mess"></div>
                <hr>
            </div>
            <div style="background-color:#1AAE88;" class="modal-body">
             <form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input name="name" class="form-control" type="text" placeholder="Name">
                </div>
                <div class="form-group">
                    <input name="roll" class="form-control" type="text" placeholder="Roll">
                </div>
                <div class="form-group">
                    <input name="email" class="form-control" type="text" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <input name="cell" class="form-control" type="text" placeholder="Cell">
                </div><!-- 
                <div class="form-group" style="font-size:30px; cursor: pointer;">
                    <img style="display: block; width: 250px; height:auto;" id="student_photo_load" src="" alt="">
                    <input name="photo" style="display: none;" type="file" id="student_photo">
                    <label for="student_photo"><i class="fas fa-photo-video"></i></label>
                </div> -->
                <div class="form-group">
                    <input name="photo" type="file">
                </div>
                <div class="form-group">
                    <input class="btn btn-dark btn-block" type="submit" value="Add User">
                </div>
             </form>
            </div>
               <!--  <div class="modal-footer"></div> -->
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-10">
            <a id="add_user_btn" class="btn btn-sm btn-info" href="#">Add New Student</a>
            <br>
            <br>
    <section class="panel panel-default">
        <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> ALL Student</header>
        <table class="table table-striped m-b-none">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Cell</th>
                    <th>Role</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Saiful Islam</td>
                    <td>saiful@gmail.com</td>
                    <td>01636758237</td>
                    <td>admin</td>
                    <td><img style="width: 50px; height: 40px; " src="images/aa.jpg" alt=""></td>
                    <td>Active</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="#">View</a>
                        <a class="btn btn-sm btn-warning" href="#">Edit</a>
                        <a class="btn btn-sm btn-danger" href="#">Delete</a>

                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Saiful Islam</td>
                    <td>saiful@gmail.com</td>
                    <td>01636758237</td>
                    <td>admin</td>
                    <td><img style="width: 50px; height: 40px; " src="images/aa.jpg" alt=""></td>
                    <td>Active</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="#">View</a>
                        <a class="btn btn-sm btn-warning" href="#">Edit</a>
                        <a class="btn btn-sm btn-danger" href="#">Delete</a>

                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Saiful Islam</td>
                    <td>saiful@gmail.com</td>
                    <td>01636758237</td>
                    <td>admin</td>
                    <td><img style="width: 50px; height: 40px; " src="images/aa.jpg" alt=""></td>
                    <td>Active</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="#">View</a>
                        <a class="btn btn-sm btn-warning" href="#">Edit</a>
                        <a class="btn btn-sm btn-danger" href="#">Delete</a>

                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Saiful Islam</td>
                    <td>saiful@gmail.com</td>
                    <td>01636758237</td>
                    <td>admin</td>
                    <td><img style="width: 50px; height: 40px; " src="images/aa.jpg" alt=""></td>
                    <td>Active</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="#">View</a>
                        <a class="btn btn-sm btn-warning" href="#">Edit</a>
                        <a class="btn btn-sm btn-danger" href="#">Delete</a>

                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Saiful Islam</td>
                    <td>saiful@gmail.com</td>
                    <td>01636758237</td>
                    <td>admin</td>
                    <td><img style="width: 50px; height: 40px; " src="images/aa.jpg" alt=""></td>
                    <td>Active</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="#">View</a>
                        <a class="btn btn-sm btn-warning" href="#">Edit</a>
                        <a class="btn btn-sm btn-danger" href="#">Delete</a>

                    </td>
                </tr>
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