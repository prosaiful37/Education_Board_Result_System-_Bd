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
                    <h3 class="m-b-xs text-black">All Result</h3>
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
    <div id="add_result_modal" class="modal fade shadow">
        <div class="modal-dialog">
            <div class="modal-content"></div>
            <div style="background-color:#405453;" class="modal-body ">
                <h3 class="text-warning">Add New Result</h3>
                <div class="mess"></div>
                <hr>
                <div class="student_res_data">
                    <img style="width: 200px;height: 200px;border: 10px solid gray;display: block;margin: auto; " src="" alt="">
                    <h2 class="text-center text-warning"><h2>
                    <h4 class="text-center text-warning"></h4>
                </div>
             <form id="add_student_result" action="" method="POST">
                <div class="form-group text-warning">
                    <div class="stu_res"></div>
                    <label id="idStudnet" for="">Search Student</label>
                    <input id="student_search" name="student_id" class="form-control" type="text">
                </div>
                <div class="form-group text-warning">
                    <label for="">Bangla</label>
                    <input name="bangla" class="form-control" type="text">
                </div>
                <div class="form-group text-warning">
                    <label for="">English</label>
                    <input name="english" class="form-control" type="text">
                </div>
                <div class="form-group text-warning">
                    <label for="">Math</label>
                    <input name="math" class="form-control" type="text">
                </div>
                <div class="form-group text-warning">
                    <label for="">Social Science</label>
                    <input name="social" class="form-control" type="text">
                </div>
                <div class="form-group text-warning">
                    <label for="">Science</label>
                    <input name="science" class="form-control" type="text">
                </div>
                <div class="form-group text-warning">
                    <label for="">Religion</label>
                    <input name="religion" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <input name="add" class="btn btn-info btn-block" type="submit" value="Add Result">
                </div>
             </form>
            </div>
               <!--  <div class="modal-footer"></div> -->
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <a id="add_result_btn" class="btn btn-sm btn-info" href="#">Add Student Result</a>
            <br>
            <br>
    <section class="panel panel-default">
        <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> ALL Result</header>
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