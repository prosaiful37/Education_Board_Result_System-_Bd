<?php include_once "tamplates/header.php"; ?>


                    <section id="content">
                        <section class="hbox stretch">
                            <section>
                                <section class="vbox">
                                    <section class="scrollable padder">
                                        <section class="row m-b-md">
                                            <div class="col-sm-6">
                                                <h3 class="m-b-xs text-black">Dashboard</h3>
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
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="panel b-a">
                                                    <div class="row m-n">
                                                        <div class="col-md-6 b-b b-r">
                                                            <a href="#" class="block padder-v hover">
                                                                <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i> <i class="i i-plus2 i-1x text-white"></i> </span>
                                                                <span class="clear"> <span class="h3 block m-t-xs text-danger">2,000</span> <small class="text-muted text-u-c">New Visits</small> </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 b-b">
                                                            <a href="#" class="block padder-v hover">
                                                                <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i> <i class="i i-users2 i-sm text-white"></i> </span>
                                                                <span class="clear"> <span class="h3 block m-t-xs text-success">75%</span> <small class="text-muted text-u-c">Bounce rate</small> </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 b-b b-r">
                                                            <a href="#" class="block padder-v hover">
                                                                <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i> <i class="i i-location i-sm text-white"></i> </span>
                                                                <span class="clear">
                                                                    <span class="h3 block m-t-xs text-info">25 <span class="text-sm">m</span></span> <small class="text-muted text-u-c">location</small>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 b-b">
                                                            <a href="#" class="block padder-v hover">
                                                                <span class="i-s i-s-2x pull-left m-r-sm"> <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i> <i class="i i-alarm i-sm text-white"></i> </span>
                                                                <span class="clear"> <span class="h3 block m-t-xs text-primary">9:30</span> <small class="text-muted text-u-c">Meeting</small> </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="panel b-a">
                                                    <div class="panel-heading no-border bg-primary lt text-center">
                                                        <a href="#"> <i class="fa fa-facebook fa fa-3x m-t m-b text-white"></i> </a>
                                                    </div>
                                                    <div class="padder-v text-center clearfix">
                                                        <div class="col-xs-6 b-r">
                                                            <div class="h3 font-bold">42k</div>
                                                            <small class="text-muted">Friends</small>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="h3 font-bold">90</div>
                                                            <small class="text-muted">Feeds</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="panel b-a">
                                                    <div class="panel-heading no-border bg-info lter text-center">
                                                        <a href="#"> <i class="fa fa-twitter fa fa-3x m-t m-b text-white"></i> </a>
                                                    </div>
                                                    <div class="padder-v text-center clearfix">
                                                        <div class="col-xs-6 b-r">
                                                            <div class="h3 font-bold">27k</div>
                                                            <small class="text-muted">Tweets</small>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="h3 font-bold">15k</div>
                                                            <small class="text-muted">Followers</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 hide">
                                                <section class="panel b-a">
                                                    <header class="panel-heading b-b b-light">
                                                        <ul class="nav nav-pills pull-right">
                                                            <li>
                                                                <a href="ajax.pie.html" class="text-muted" data-bjax data-target="#b-c"> <i class="i i-cycle"></i> </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="panel-toggle text-muted"> <i class="i i-plus text-active"></i> <i class="i i-minus text"></i> </a>
                                                            </li>
                                                        </ul>
                                                        Connection
                                                    </header>
                                                    <div class="panel-body text-center bg-light lter" id="b-c">
                                                        <div
                                                            class="easypiechart inline m-b m-t"
                                                            data-percent="60"
                                                            data-line-width="4"
                                                            data-bar-Color="#23aa8c"
                                                            data-track-Color="#c5d1da"
                                                            data-color="#2a3844"
                                                            data-scale-Color="false"
                                                            data-size="120"
                                                            data-line-cap="butt"
                                                            data-animate="2000"
                                                        >
                                                            <div>
                                                                <span class="h2 m-l-sm step"></span>%
                                                                <div class="text text-xs">completed</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </section>
                                </section>
                            </section>
                            <!-- side content -->
                            <aside class="aside-md bg-black hide" id="sidebar">
                                <section class="vbox animated fadeInRight">
                                    <section class="scrollable">
                                        <div class="wrapper"><strong>Live feed</strong></div>
                                        <ul class="list-group no-bg no-borders auto">
                                            <li class="list-group-item">
                                                <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-success"></i> <i class="fa fa-reply fa-stack-1x text-white"></i> </span>
                                                <span class="clear"> <a href="#">Goody@gmail.com</a> sent your email <small class="icon-muted">13 minutes ago</small> </span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-file-o fa-stack-1x text-white"></i> </span>
                                                <span class="clear"> <a href="#">Mide@live.com</a> invite you to join a meeting <small class="icon-muted">20 minutes ago</small> </span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-map-marker fa-stack-1x text-white"></i> </span>
                                                <span class="clear"> <a href="#">Geoge@yahoo.com</a> is online <small class="icon-muted">1 hour ago</small> </span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-info fa-stack-1x text-white"></i> </span>
                                                <span class="clear">
                                                    <a href="#"><strong>Admin</strong></a> post a info <small class="icon-muted">1 day ago</small>
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="wrapper"><strong>Friends</strong></div>
                                        <ul class="list-group no-bg no-borders auto">
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <span class="pull-left thumb-sm avatar"> <img src="images/a3.png" alt="..." class="img-circle" /> <i class="on b-black bottom"></i> </span>
                                                    <div class="media-body">
                                                        <div><a href="#">Chris Fox</a></div>
                                                        <small class="text-muted">about 2 minutes ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <span class="pull-left thumb-sm avatar"> <img src="images/a2.png" alt="..." /> <i class="on b-black bottom"></i> </span>
                                                    <div class="media-body">
                                                        <div><a href="#">Amanda Conlan</a></div>
                                                        <small class="text-muted">about 2 hours ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <span class="pull-left thumb-sm avatar"> <img src="images/a1.png" alt="..." /> <i class="busy b-black bottom"></i> </span>
                                                    <div class="media-body">
                                                        <div><a href="#">Dan Doorack</a></div>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <span class="pull-left thumb-sm avatar"> <img src="images/a0.png" alt="..." /> <i class="away b-black bottom"></i> </span>
                                                    <div class="media-body">
                                                        <div><a href="#">Lauren Taylor</a></div>
                                                        <small class="text-muted">about 2 minutes ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>
                                </section>
                            </aside>
                            <!-- / side content -->
                        </section>
                        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                    </section>









<?php include_once "tamplates/footer.php"; ?>