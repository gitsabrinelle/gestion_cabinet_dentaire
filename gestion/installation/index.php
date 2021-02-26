<?php
//include("model/global.php");
$date = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Admin Panel"/>
    <meta name="author" content=""/>
    <link rel="icon" href="../../assets/images/favicon.ico">
    <title>Gestion Commerciale</title>
    <link rel="stylesheet" href="../../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="../../assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/neon-core.css">
    <link rel="stylesheet" href="../../assets/css/neon-theme.css">
    <link rel="stylesheet" href="../../assets/css/neon-forms.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="../../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="../../assets/js/rickshaw/rickshaw.min.css">

    <link rel="stylesheet" href="../../assets/js/select2/select2-bootstrap.css">
    <link rel="stylesheet" href="../../assets/js/select2/select2.css">
    <![endif]-->


</head>

<body class="page-body ">
<div class="page-container sidebar-collapsed">
    <div class="sidebar-menu ">

        <div class="sidebar-menu-inner">

            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <a href="#">
                        <img src="" width="" alt=""/>
                    </a>
                </div>

                <!-- logo collapse icon -->
                <div class="sidebar-collapse">
                    <a href="#" class="sidebar-collapse-icon">
                        <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>


                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                <div class="sidebar-mobile-menu visible-xs">
                    <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>

            </header>


            <ul id="main-menu" class="main-menu">

                <li >
                    <a href="#">
                        <i class="entypo-home"></i>
                        <span class="title">Acceuil</span>
                    </a>
                </li>

            </ul>
        </div>

    </div>

    <div class="main-content">
        <div class="row">
            <!-- Profile Info and Notifications -->
            <div class="col-md-6 col-sm-8 clearfix">
                <ul class="user-info pull-left pull-none-xsm">
                    <!-- Profile Info -->
                    <li class="profile-info dropdown">
                        <!-- add class "pull-right" if you want to place this from right -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../../assets/images/logo.png" alt="" class="img-circle" width="125px"/>
                            <?php //echo($username); ?>
                        </a>
                    </li>
                </ul>
                <ul class="user-info pull-left pull-right-xs pull-none-xsm">
                </ul>
            </div>
            <!-- Raw Links -->
            <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                <ul class="list-inline links-list pull-right">
                    <li class="sep"></li>
                    <li>
                        <a href="#">
                             <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="clear visible-xs"></div>
        </div>
        <br/>
        <?php

        if (isset($_GET["p"])) {
            $page = $_GET["p"];
            $vars = null;
            if (($pos = strpos($page, ".php")) !== FALSE) {
                $variables = substr($page, $pos + 4);
                $vars = explode("/", $variables);
            }
            if (strlen($page)) {
                $exploaded = explode(".php", $page);
                $exploadedPage = $exploaded [0] . ".php";
                if (file_exists($exploadedPage)) {
                    include($exploadedPage);
                }
            }
        } else {
            ?>

            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <h1>Installation du logiciel</h1>
                        <div class="panel-body">
                            <div class="form-group">
                                <h3>- Veuillez suivre le Guide d'instalation de votre logiciel de stock </h3>

                            </div>
                        </div>


                        <div class="col-sm-offset-3 col-sm-5">
                            <a class="btn btn-success" href="section_1.php">Suivant </a>
                        </div>
                        <hr/>
                    </div>

                </div>

            </div>
            <br/>


            <?php
        }
        ?>

        <div>
            <script src="../../assets/js/jquery-1.11.3.min.js"></script>
            <script src="../../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
            <!--[if lt IE 9]>
            <script src="../../assets/js/ie8-responsive-file-warning.js"></script>

            <!-- Bottom scripts (common) -->
            <script src="../../assets/js/gsap/TweenMax.min.js"></script>
            <script src="../../assets/js/bootstrap.js"></script>
            <script src="../../assets/js/joinable.js"></script>
            <script src="../../assets/js/resizeable.js"></script>
            <script src="../../assets/js/neon-api.js"></script>
            <script src="../../assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <!-- Imported scripts on this page -->
            <script src="../../assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
            <script src="../../assets/js/jquery.sparkline.min.js"></script>
            <script src="../../assets/js/rickshaw/vendor/d3.v3.js"></script>
            <script src="../../assets/js/rickshaw/rickshaw.min.js"></script>
            <script src="../../assets/js/raphael-min.js"></script>
            <script src="../../assets/js/morris.min.js"></script>
            <script src="../../assets/js/toastr.js"></script>
            <script src="../../assets/js/fullcalendar/fullcalendar.min.js"></script>
            <script src="../../assets/js/neon-chat.js"></script>
            <script src="../../assets/js/select2/select2.min.js"></script>
            <script src="../../assets/js/bootstrap-datepicker.js"></script>


            <![endif]-->

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src="../../assets/js/html5shiv.min.js"></script>
            <script src="../../assets/js/respond.min.js"></script>

            <!-- JavaScripts initializations and stuff -->
            <script src="../../assets/js/neon-custom.js"></script>


            <!-- Demo Settings -->
            <script src="../../assets/js/neon-demo.js"></script>
        </div>
    </div>
</body>
</html>
