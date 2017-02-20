<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Director | General UI</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- Theme style -->
        <link href="../css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
       

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class="right-side">

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <!--breadcrumbs start -->
                            <ul class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Current page</li>
                            </ul>
                            <!--breadcrumbs end -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--progress bar start-->
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Basic Progress Bars
                                        </header>
                                        <div class="panel-body">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                            <p class="text-muted">
                                                Stacked Progress Bars
                                            </p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-success" style="width: 35%">
                                                    <span class="sr-only">35% Complete (success)</span>
                                                </div>
                                                <div class="progress-bar progress-bar-warning" style="width: 20%">
                                                    <span class="sr-only">20% Complete (warning)</span>
                                                </div>
                                                <div class="progress-bar progress-bar-danger" style="width: 10%">
                                                    <span class="sr-only">10% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--progress bar end-->

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <!--progress bar start-->
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Striped Progress Bars
                                        </header>
                                        <div class="panel-body">
                                            <div class="progress progress-striped progress-sm">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-striped progress-sm">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-striped progress-sm">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-striped progress-sm">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                            <p class="text-muted">
                                                Animated Progress Bars
                                            </p>
                                            <div class="progress progress-striped active progress-sm">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                    <span class="sr-only">45% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--progress bar end-->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <!--collapse start-->
                                    <div class="panel-group m-bot20" id="accordion">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        Collapsible Group Item one
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Collapsible Group Item two
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        Collapsible Group Item three
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--collapse end-->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <!--tooltips start-->
                                    <section class="panel">
                                        <div class="panel-body btn-gap">
                                            <button title="" data-placement="top" data-toggle="tooltip" class="btn btn-default tooltips" type="button" data-original-title="Tooltip on top">Tooltip on top</button>
                                            <button title="" data-placement="left" data-toggle="tooltip" class="btn btn-default tooltips" type="button" data-original-title="Tooltip on left"> left</button>
                                            <button title="" data-placement="bottom" data-toggle="tooltip " class="btn btn-default tooltips" type="button" data-original-title="Tooltip on bottom"> bottom</button>
                                            <button title="" data-placement="right" data-toggle="tooltip" class="btn btn-default tooltips" type="button" data-original-title="Tooltip on right"> right</button>
                                        </div>
                                    </section>
                                    <!--tooltips end-->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <!--pagination start-->
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Pagination
                                        </header>
                                        <div class="panel-body">
                                            <div>
                                                <ul class="pagination pagination-lg">
                                                    <li><a href="#">«</a></li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#">»</a></li>
                                                </ul>
                                            </div>
                                            <div class="text-center">
                                                <ul class="pagination">
                                                    <li><a href="#">«</a></li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#">»</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul class="pagination pagination-sm pull-right">
                                                    <li><a href="#">«</a></li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#">»</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                    <!--pagination end-->
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                        <!--tab nav start-->
                        <section class="panel general">
                            <header class="panel-heading tab-bg-dark-navy-blue">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#home">Home</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#about">About</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#profile">Profile</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </header>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane active">
                                        Home
                                    </div>
                                    <div id="about" class="tab-pane">About</div>
                                    <div id="profile" class="tab-pane">Profile</div>
                                    <div id="contact" class="tab-pane">Contact</div>
                                </div>
                            </div>
                        </section>
                        <!--tab nav start-->

                        <!--tab nav start-->
                        <section class="panel general">
                            <header class="panel-heading tab-bg-dark-navy-blue">
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a data-toggle="tab" href="#home-2">
                                            <i class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a data-toggle="tab" href="#about-2">
                                            <i class="fa fa-user"></i>
                                            About
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#contact-2">
                                            <i class="fa fa-envelope-o"></i>
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </header>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div id="home-2" class="tab-pane ">
                                        Home
                                    </div>
                                    <div id="about-2" class="tab-pane active">About</div>
                                    <div id="contact-2" class="tab-pane ">Contact</div>
                                </div>
                            </div>
                        </section>
                        <!--tab nav end-->


                        <!--tab nav start-->
                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue tab-right ">
                                <ul class="nav nav-tabs pull-right">
                                    <li class="active">
                                        <a data-toggle="tab" href="#home-3">
                                            <i class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#about-3">
                                            <i class="fa fa-user"></i>
                                            About
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#contact-3">
                                            <i class="fa fa-envelope-o"></i>
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </header>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div id="home-3" class="tab-pane active">
                                        Home
                                    </div>
                                    <div id="about-3" class="tab-pane">About</div>
                                    <div id="contact-3" class="tab-pane">Contact</div>
                                </div>
                            </div>
                        </section>
                        <!--tab nav end-->



                        <div class="row">
                            <div class="col-md-12">
                                <!--notification start-->
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="alert alert-success alert-block fade in">
                                            <button data-dismiss="alert" class="close close-sm" type="button">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <h4>
                                                <i class="icon-ok-sign"></i>
                                                Success!
                                            </h4>
                                            <p>Best check yo self, you're not looking too good...</p>
                                        </div>
                                        <div class="alert alert-block alert-danger fade in">
                                            <button data-dismiss="alert" class="close close-sm" type="button">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                        </div>
                                        <div class="alert alert-success fade in">
                                            <button data-dismiss="alert" class="close close-sm" type="button">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                        </div>
                                        <div class="alert alert-info fade in">
                                            <button data-dismiss="alert" class="close close-sm" type="button">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                        </div>
                                        <div class="alert alert-warning fade in">
                                            <button data-dismiss="alert" class="close close-sm" type="button">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                        </div>

                                    </div>
                                </section>
                                <!--notification end-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <section class="panel">
                                <header class="panel-heading">
                                    Default Buttons
                                </header>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-default">Default</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                </div>
                            </section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!--label and badge start-->
                                <section class="panel">
                                    <div class="panel-body">
                                        <p class="text-muted text-center">Labels</p>
                                        <p class="text-center">
                                            <span class="label label-default">label</span>
                                            <span class="label label-primary">Primary</span>
                                            <span class="label label-success">Success</span>
                                            <span class="label label-info">Info</span>
                                            <span class="label label-inverse">Inverse</span>
                                            <span class="label label-warning">Warning</span>
                                            <span class="label label-danger">Danger</span>
                                        </p>
                                        <p class="text-muted text-center">Badges</p>
                                        <p class="m-bot-none text-center">
                                            <span class="badge">5</span>
                                            <span class="badge badge-primary">10</span>
                                            <span class="badge badge-success">15</span>
                                            <span class="badge badge-info">20</span>
                                            <span class="badge badge-inverse">25</span>
                                            <span class="badge badge-warning">30</span>
                                            <span class="badge badge-danger">35</span>
                                        </p>
                                    </div>
                                </section>
                                <!--label and badge end-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!--modal start-->
                                <section class="panel">
                                    <header class="panel-heading">
                                        Modal Dialogs
                                    </header>
                                    <div class="panel-body">
                                        <a class="btn btn-success" data-toggle="modal" href="#myModal">
                                            Dialog
                                        </a>
                                        <a class="btn btn-warning" data-toggle="modal" href="#myModal2">
                                            Confirm
                                        </a>
                                        <a class="btn btn-danger" data-toggle="modal" href="#myModal3">
                                            Alert !
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">Modal Tittle</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">Modal Tittle</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                        <button class="btn btn-warning" type="button"> Confirm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">Modal Tittle</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-danger" type="button"> Ok</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal -->

                                    </div>
                                </section>
                                <!--modal end-->
                            </div>
                        </div>

                        </div>

                    </div>

                </section>
            </div>
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Director App -->
        <script src="../js/Director/app.js" type="text/javascript"></script>
    </body>
</html>
