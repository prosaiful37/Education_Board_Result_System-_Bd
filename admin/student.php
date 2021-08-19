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
    <div id="add_student_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-info text-dark">
                <h2>Add New Student</h2>
                <div class="student-mess"></div>
                <hr>
            </div>
            <div style="background-color:#FAFF7F;" class="modal-body">
                <form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group text-dark">
                        <label for="">Name</label>
                        <input name="name" class="form-control" type="text">
                    </div>
                    <div class="form-group text-dark">
                        <label for="">Roll</label>
                        <input name="roll" class="form-control" type="text">
                    </div>
                    <div class="form-group text-dark">
                        <label for="">Reg</label>
                        <input name="reg" class="form-control" type="text">
                    </div>
                    <div class="form-group text-dark">
                        <label for="">Board</label>
                        <select  class="form-control" name="board" id="">
                          <option value="" selected="">Select One</option>
                          <option value="barisal">Barisal</option>
                          <option value="chittagong">Chittagong</option>
                          <option value="comilla">Comilla</option>
                          <option value="dhaka">Dhaka</option>
                          <option value="dinajpur">Dinajpur</option>
                          <option value="jessore">Jessore</option>
                          <option value="rajshahi">Rajshahi</option>
                          <option value="sylhet">Sylhet</option>
                          <option value="madrasah">Madrasah</option>
                          <option value="tec">Technical</option>
                          <option value="dibs">DIBS(Dhaka)</option>
                        </select>
                    </div>
                    <div class="form-group text-dark">
                        <label for="">Institute</label>
                        <input name="inst" class="form-control" type="text">
                    </div>
                    <div class="form-group text-dark">
                        <label for="">Year</label>
                        <select class="form-control" name="year" id="">
                            <option value="0000" selected="">Select One</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                        </select>
                    </div>
                    <div class="form-group text-dark">
                        <label for="">Exam</label>
                        <select class="form-control" name="exam" id="">
                            <option value="hsc">HSC/Alim/Equivalent</option>
                            <option value="jsc">JSC/JDC</option>
                            <option value="ssc">SSC/Dakhil</option>
                            <option value="ssc_voc">SSC(Vocational)</option>
                            <option value="hsc">HSC/Alim</option>
                            <option value="hsc_voc">HSC(Vocational)</option>
                            <option value="hsc_hbm">HSC(BM)</option>
                            <option value="hsc_dic">Diploma in Commerce</option>
                            <option value="hsc">Diploma in Business Studies</option>
                        </select>
                    </div>
                    <div class="form-group text-dark">
                        <label for="">Photo</label>
                        <input name="photo" class="form-control" type="file">
                    </div>
                    <div class="form-group">
                        <input name="add" class="btn btn-info btn-block" type="submit" value="Add Student">
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
            <a id="add_student_btn" class="btn btn-sm btn-info" href="#">Add New Student</a>
            <br>
            <br>
    <section class="panel panel-default">
        <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> ALL Student</header>
        <table class="table table-striped m-b-none">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Regstration</th>
                    <th>Board</th>
                    <th>Institute</th>
                    <th>Exam</th>
                    <th>Year</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="student_alls">
           

            </tbody>
        </table>
    </section>
</div>



    </div>

   

    <!-- single student modal -->

    <div id="view_single_student" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-info text-dark">
                <h2>The single data of : Saiful islam</h2>
                <hr>
            </div>
            <div style="background-color:#FAFF7F;" class="modal-body">
               <img style="width: 250px; height: 250px; border: 7px solid white; border-radius: 50%;>" class="d-block mx-auto shadow" src="media/img/student/" alt="">
                <br>
                <h1 style="text-align: center; font-family: Inconsolata; color: #FFC107;"></h1>
                <table class="table">
                    <tr style="background-color: #CFD5EA;">
                        <td>Name</td>
                        <td>name</td>
                    </tr>
                    <tr style="background-color: #E9EBF5;">
                        <td>E-mail </td>
                        <td></td>
                    </tr>
                    <tr style="background-color: #CFD5EA;">
                        <td>Cell </td>
                        <td></td>
                    </tr>
            </div>
               <!--  <div class="modal-footer"></div> -->
            </div>
        </div>
    </div>





                </section>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>









<?php include_once "tamplates/footer.php"; ?>