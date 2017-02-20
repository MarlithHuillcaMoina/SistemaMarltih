<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Director | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">

          </style>
      </head>
      <body class="skin-black">

                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="small-stat clearfix">
                                <span class="small-stat-icon orange"><i class="fa fa-gavel"></i></span>
                                <div class="small-stat-info">
                                    <span>320</span>
                                    New Order Received
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="small-stat clearfix">
                                <span class="small-stat-icon tar"><i class="fa fa-tag"></i></span>
                                <div class="small-stat-info">
                                    <span>22,450</span>
                                    Copy Sold Today
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="small-stat clearfix">
                                <span class="small-stat-icon pink"><i class="fa fa-money"></i></span>
                                <div class="small-stat-info">
                                    <span>34,320</span>
                                    Dollar Profit Today
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="small-stat clearfix">
                                <span class="small-stat-icon green"><i class="fa fa-eye"></i></span>
                                <div class="small-stat-info">
                                    <span>32720</span>
                                    Unique Visitors
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main row -->
                    <div class="row">

                        <div class="col-md-8">
                            <!--earning graph start-->
                            <section class="panel">
                                <header class="panel-heading">
                                    Earning Graph
                                </header>
                                <div class="panel-body">

                                    <div id="graph-area" class="main-chart">
                                    </div>
                                    <div class="region-stats">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="reg-earn-stat">
                                                    This year total earning <span>$68,4545,454</span>
                                                </div>
                                                <ul class="clearfix loc-earn-stat">
                                                    <li class="stat-divider">
                                                        <span class="first-city">$734503</span>
                                                        Rocky Mt,NC </li>
                                                        <li class="stat-divider">
                                                            <span class="second-city">$734503</span>
                                                            Dallas/FW,TX </li>
                                                            <li>
                                                                <span class="third-city">$734503</span>
                                                                Millville,NJ </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div id="world-map" class="vector-stat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!--earning graph end-->

                                    </div>
                                    <div class="col-lg-4">

                                        <!--chat start-->
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Chat
                                            </header>
                                            <div class="panel-body" id="chat-box">
                                                <div class="chat-conversation">
                                                    <ul class="chat-list">
                                                        <li class="clearfix">
                                                            <div class="chat-avatar">
                                                                <img class="img-rounded" src="img/avatar5.png" alt="male">
                                                                <i>10:00</i>
                                                            </div>
                                                            <div class="conversation-text">
                                                                <div class="ctext-wrap chat-primary">
                                                                    <!-- <i>John Carry</i> -->
                                                                    <p>
                                                                        Hello, How are you?
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="clearfix odd">
                                                            <div class="chat-avatar">
                                                                <img class="img-rounded" src="img/avatar5.png" alt="female">
                                                                <i>10:00</i>
                                                            </div>
                                                            <div class="conversation-text">
                                                                <div class="ctext-wrap">
                                                                    <!-- <i>Lisa Peterson</i> -->
                                                                    <p>
                                                                        I'm Fine. What about you?
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="clearfix">
                                                            <div class="chat-avatar">
                                                                <img class="img-rounded" src="img/avatar5.png" alt="male">
                                                                <i>10:00</i>
                                                            </div>
                                                            <div class="conversation-text">
                                                                <div class="ctext-wrap chat-indigo">
                                                                    <!-- <i>John Carry</i> -->
                                                                    <p>
                                                                        Yeah I'm fine too. Everything is going fine here.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="clearfix odd">
                                                            <div class="chat-avatar">
                                                                <img class="img-rounded" src="img/avatar5.png" alt="female">
                                                                <i>10:00</i>
                                                            </div>
                                                            <div class="conversation-text">
                                                                <div class="ctext-wrap">
                                                                    <!-- <i>Lisa Peterson</i> -->
                                                                    <p>
                                                                        Wow that's great
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="clearfix">
                                                            <div class="chat-avatar">
                                                                <img class="img-rounded" src="img/avatar5.png" alt="male">
                                                                <i>10:00</i>
                                                            </div>
                                                            <div class="conversation-text">
                                                                <div class="ctext-wrap chat-midnightblue">
                                                                    <!-- <i>John Carry</i> -->
                                                                    <p>
                                                                        Yeah I'm fine too. Everything is going fine here.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="clearfix odd">
                                                            <div class="chat-avatar">
                                                                <img class="img-rounded" src="img/avatar5.png" alt="female">
                                                                <i>10:00</i>
                                                            </div>
                                                            <div class="conversation-text">
                                                                <div class="ctext-wrap">
                                                                    <!-- <i>Lisa Peterson</i> -->
                                                                    <p>
                                                                        Wow that's great
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="clearfix">
                                                            <div class="chat-avatar">
                                                                <img class="img-rounded" src="img/avatar5.png" alt="male">
                                                                <i>10:00</i>
                                                            </div>
                                                            <div class="conversation-text">
                                                                <div class="ctext-wrap chat-primary">
                                                                    <!-- <i>John Carry</i> -->
                                                                    <p>
                                                                        Yeah I'm fine too. Everything is going fine here.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="panel-footer chat-footer clearfix">
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control chat-input" placeholder="Enter your text">
                                                </div>
                                                <div class="col-xs-3 chat-send">
                                                    <button type="submit" class="btn btn-info">Send</button>
                                                </div>
                                            </div>
                                        </section>
                                        <!--chat end-->
                                        <section class="panel">
                                            <div class="weather-bg">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <i class="fa fa-cloud"></i>
                                                            California
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="degree">
                                                              24°
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>



                            </section>



                      </div>


                  </div>
                    <div class="row">

                        <div class="col-md-8">
                            <section class="panel">
                              <header class="panel-heading">
                                  Work Progress
                            </header>
                            <div class="panel-body">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Project</th>
                                      <th>Manager</th>
                                      <!-- <th>Client</th> -->
                                      <th>Deadline</th>
                                      <!-- <th>Price</th> -->
                                      <th>Status</th>
                                      <th>Progress</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Facebook</td>
                                  <td>Mark</td>
                                  <!-- <td>Steve</td> -->
                                  <td>10/10/2014</td>
                                  <!-- <td>$1500</td> -->
                                  <td><span class="label label-danger">in progress</span></td>
                                  <td><span class="badge badge-info">50%</span></td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Twitter</td>
                                  <td>Evan</td>
                                  <!-- <td>Darren</td> -->
                                  <td>10/8/2014</td>
                                  <!-- <td>$1500</td> -->
                                  <td><span class="label label-success">completed</span></td>
                                  <td><span class="badge badge-success">100%</span></td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Google</td>
                                  <td>Larry</td>
                                  <!-- <td>Nick</td> -->
                                  <td>10/12/2014</td>
                                  <!-- <td>$2000</td> -->
                                  <td><span class="label label-warning">in progress</span></td>
                                  <td><span class="badge badge-warning">75%</span></td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>LinkedIn</td>
                                  <td>Allen</td>
                                  <!-- <td>Rock</td> -->
                                  <td>10/01/2015</td>
                                  <!-- <td>$2000</td> -->
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-info">65%</span></td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>Tumblr</td>
                                  <td>David</td>
                                  <!-- <td>HHH</td> -->
                                  <td>01/11/2014</td>
                                  <!-- <td>$2000</td> -->
                                  <td><span class="label label-warning">in progress</span></td>
                                  <td><span class="badge badge-danger">95%</span></td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>Tesla</td>
                                  <td>Musk</td>
                                  <!-- <td>HHH</td> -->
                                  <td>01/11/2014</td>
                                  <!-- <td>$2000</td> -->
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-success">95%</span></td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>Tesla</td>
                                  <td>Musk</td>
                                  <!-- <td>HHH</td> -->
                                  <td>01/11/2014</td>
                                  <!-- <td>$2000</td> -->
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-success">95%</span></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </section>


          </div><!--end col-6 -->
          <div class="col-md-4">
            <section class="panel">
                <header class="panel-heading">
                    Twitter Feed
                </header>
                <div class="panel-body">
                    <div class="twt-area">
                        <form action="#" method="post">
                            <textarea class="form-control" name="profile-tweet" placeholder="Share something on Twitter.." rows="3"></textarea>

                            <div class="clearfix">
                                <button class="btn btn-sm btn-primary pull-right" type="submit">
                                    <i class="fa fa-twitter"></i>
                                    Tweet
                                </button>
                                <a class="btn btn-link btn-icon fa fa-location-arrow" data-original-title="Add Location" data-placement="bottom" data-toggle="tooltip" href=
                                "#" style="text-decoration:none;" title=""></a>
                                <a class="btn btn-link btn-icon fa fa-camera" data-original-title="Add Photo" data-placement="bottom" data-toggle="tooltip" href="#"
                                style="text-decoration:none;" title=""></a>
                            </div>
                        </form>
                    </div>
                    <ul class="media-list">
                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="img/26115.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small><em>30 min ago</em></small>
                                </span>
                                <a href="page_ready_user_profile.php">
                                    <strong>John Doe</strong>
                                </a>
                                <p>
                                    In hac <a href="#">habitasse</a> platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.
                                    <a href="#" class="text-danger">
                                        <strong>#dev</strong>
                                    </a>
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="img/26115.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small><em>30 min ago</em></small>
                                </span>
                                <a href="page_ready_user_profile.php">
                                    <strong>John Doe</strong>
                                </a>
                                <p>
                                    In hac <a href="#">habitasse</a> platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.
                                    <a href="#" class="text-danger">
                                        <strong>#design</strong>
                                    </a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="panel">
                                <header class="panel-heading">
                                    Teammates
                                </header>

                                <ul class="list-group teammates">
                                    <li class="list-group-item">
                                        <a href=""><img src="img/26115.jpg" width="50" height="50"></a>
                                        <span class="pull-right label label-danger inline m-t-15">Admin</span>
                                        <a href="">Damon Parker</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                        <span class="pull-right label label-info inline m-t-15">Member</span>
                                        <a href="">Joe Waston</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                        <span class="pull-right label label-warning inline m-t-15">Editor</span>
                                        <a href="">Jannie Dvis</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                        <span class="pull-right label label-warning inline m-t-15">Editor</span>
                                        <a href="">Emma Welson</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                        <span class="pull-right label label-success inline m-t-15">Subscriber</span>
                                        <a href="">Emma Welson</a>
                                    </li>
                                </ul>
                                <div class="panel-footer bg-white">
                                    <!-- <span class="pull-right badge badge-info">32</span> -->
                                    <button class="btn btn-primary btn-addon btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Add Teammate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                          <section class="panel tasks-widget">
                              <header class="panel-heading">
                                  Todo list
                            </header>
                            <div class="panel-body">

                              <div class="task-content">

                                  <ul class="task-list">
                                      <li>
                                          <div class="task-checkbox">
                                              <!-- <input type="checkbox" class="list-child" value=""  /> -->
                                              <input type="checkbox" class="flat-grey list-child"/>
                                              <!-- <input type="checkbox" class="square-grey"/> -->
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Director is Modern Dashboard</span>
                                              <span class="label label-success">2 Days</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <!-- <input type="checkbox" class="list-child" value=""  /> -->
                                              <input type="checkbox" class="flat-grey"/>
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Fully Responsive & Bootstrap 3.0.2 Compatible</span>
                                              <span class="label label-danger">Done</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <!-- <input type="checkbox" class="list-child" value=""  /> -->
                                              <input type="checkbox" class="flat-grey"/>
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Daily Standup Meeting</span>
                                              <span class="label label-warning">Company</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <!-- <input type="checkbox" class="list-child" value=""  /> -->
                                              <input type="checkbox" class="flat-grey"/>
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Write well documentation for this theme</span>
                                              <span class="label label-primary">3 Days</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <!-- <input type="checkbox" class="list-child" value=""  /> -->
                                              <input type="checkbox" class="flat-grey"/>
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Don't be hesitate to purchase this Dashbord</span>
                                              <span class="label label-inverse">Now</span>
                                              <div class="pull-right">
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <!-- <input type="checkbox" class="list-child" value=""  /> -->
                                              <input type="checkbox" class="flat-grey"/>
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Code compile and upload</span>
                                              <span class="label label-success">2 Days</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <!-- <input type="checkbox" class="list-child" value=""  /> -->
                                              <input type="checkbox" class="flat-grey"/>
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Tell your friends to buy this dashboad</span>
                                              <span class="label label-danger">Now</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                              </div>
                                          </div>
                                      </li>

                                  </ul>
                              </div>

                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-sm pull-left" href="#">Add New Tasks</a>
                                  <a class="btn btn-default btn-sm pull-right" href="#">See All Tasks</a>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- row end -->
                </section><!-- /.content -->
                <div class="footer-main">
                    Copyright &copy Director, 2014
                </div>
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/raphael-min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="js/Director/dashboard.js" type="text/javascript"></script>

        <!-- Director for demo purposes -->
        <script src="js/Director/demo.js" type="text/javascript"></script>
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#chat-box').slimScroll({
                height: '373px',
                size: '5px',
                BorderRadius: '5px'
            });
            $('#news').slimScroll({
                height: '390px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
            /* initialize the calendar
            -----------------------------------------------------------------*/

</script>
</body>
</html>