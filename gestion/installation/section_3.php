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

                <li>
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

        {
            ?>

            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <h1>Installation du logiciel</h1>

                        <div class="panel-body">
                            <form method="POST" class="form-horizontal form-groups-bordered" id="form"
                                  action="section_2_confirm.php">
                                <fieldset>
                                    <legend> Création des Views en cours ..</legend>
                                    <div class="form-group">

                                        <div class="col-sm-12">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="progress progress-striped active">
                                                            <div class="progress-bar progress-bar-success"
                                                                 style="width: 50%"><span class="sr-only">50% ...</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </fieldset>


                            </form>
                        </div>
                        <?php

                            include('../../model/global.php');
                            if ($link) {

                                $sql = "
                                        
											drop View IF EXISTS `views_article_composants`;
                                            create view `views_article_composants` as 
                                            SELECT 
                                                article_composants.id as _article_composants,

                                                _articles,
                                                articles.reference as reference_article,
                                                articles.designation as designation_article,
                                                _composants,
                                                composants.reference as reference_composants,
                                                composants.designation as designation_composants,
                                                composants.qtt_par_carton
                                                 article_composants.qtt
                                            FROM `article_composants` 
                                                LEFT JOIN articles on articles.id= article_composants._articles
                                                LEFT JOIN composants on composants.id = article_composants._composants ;
                                            

                                            
                                        
                                        
                                            drop View IF EXISTS `views_dossier_composants`;
                                            create view `views_dossier_composants` as 
                                                SELECT
                                                    `dossier_composants`.`id`,
                                                    `dossier_composants`.`_composants`,
                                                    `dossier_composants`.`_dossiers`,
                                                    `dossier_composants`.`qtt_par_carton`,
                                                    `dossier_composants`.`qtt_par_piece`,
                                                    `dossier_composants`.`type_qtt`,
                                                    dossiers.description,
                                                    composants.reference,
                                                    composants.qtt_par_carton as qtt_par_carton_composant

                                                FROM `dossier_composants`
                                                    left join dossiers on dossiers.id=dossier_composants._dossiers
                                                    LEFT JOIN composants on composants.id=dossier_composants._composants ;




                                        
                                            drop View IF EXISTS `views_dossier_articles`;
                                            create view `views_dossier_articles` as 
                                                SELECT
                                                    `dossier_articles`.`id`,
                                                    `dossier_articles`.`_articles`,
                                                    `dossier_articles`.`_dossiers`,
                                                    `dossier_articles`.`prix_1`,
                                                    `dossier_articles`.`prix_2`,
                                                    `dossier_articles`.`prix_3`,
                                                    `dossier_articles`.`prix_rev`,
                                                    `dossier_articles`.`marge`,
                                                    `dossier_articles`.`prix_ht`,
                                                    dossiers.description,
                                                    articles.reference,
                                                    articles.qtt_carton as qtt_par_carton_article
                                                
                                                FROM `dossier_articles`
                                                    left join dossiers on dossiers.id=dossier_articles._dossiers 
                                                    LEFT JOIN articles on articles.id=dossier_articles._articles ;





											drop View IF EXISTS `views_transfert_articles`;
                                            create view `views_transfert_articles` as 
                                            SELECT
                                                    `transfert_articles`.`id`,
                                                    `transfert_articles`.`_articles`,
                                                    `transfert_articles`.`_transferts_f`,
                                                    `transferts_f`.`_dossiers`,
                                                    `transfert_articles`.`qtt_par_carton`,
                                                    `transfert_articles`.`qtt_par_piece`,
                                                    articles.reference,
                                                    articles.qtt_carton as qtt_par_carton_article
                                                
                                                FROM `transfert_articles`
                                                    left join transferts_f on transferts_f.id=transfert_articles._transferts_f
                                                    LEFT JOIN articles on articles.id=transfert_articles._articles ;







											drop View IF EXISTS `views_transfert_articles_grouped`;
                                            create view `views_transfert_articles_grouped` as 
                                            SELECT
                                                    `views_transfert_articles`.`id`,
                                                    `views_transfert_articles`.`_articles`,
                                                    `views_transfert_articles`.`_dossiers`,
                                                    SUM(`views_transfert_articles`.`qtt_par_carton`) as `qtt_par_carton`,
                                                    SUM(`views_transfert_articles`.`qtt_par_piece`) as `qtt_par_piece` ,
                                                    views_transfert_articles.reference,
                                                    views_transfert_articles.qtt_par_carton_article
                                                FROM `views_transfert_articles`
                                                Group by `_articles`,`_dossiers`
                                                ;
                                                
                                                
                                                
                                                
                                                
                                            drop View IF EXISTS `views_transfert_articles_grouped_prix`;
                                            create view `views_transfert_articles_grouped_prix` as   
                                            SELECT
                                                    views_dossier_articles.`id` as _dossier_articles,
                                                    `views_dossier_articles`.`prix_1`,
                                                    `views_dossier_articles`.`prix_2`,
                                                    `views_dossier_articles`.`prix_3`,
                                                    `views_dossier_articles`.`prix_rev`,
                                                    `views_dossier_articles`.`marge`,
                                                    `views_dossier_articles`.`prix_ht`,
                                                    `views_transfert_articles_grouped`.`_articles`,
                                                    `views_transfert_articles_grouped`.`_dossiers`,
                                                    views_transfert_articles_grouped. `qtt_par_carton`,
                                                    views_transfert_articles_grouped. `qtt_par_piece` ,
                                                    views_transfert_articles_grouped.reference,
                                                    views_transfert_articles_grouped.qtt_par_carton_article
                                                FROM `views_transfert_articles_grouped`
                                                left join views_dossier_articles on views_dossier_articles._articles = views_transfert_articles_grouped._articles 
                                                    and 
                                                    views_dossier_articles._dossiers = views_transfert_articles_grouped._dossiers

                                                ;    
                                                
                                                
                                                
                                                




                                            drop View IF EXISTS `views_transfert_composants`;
                                            create view `views_transfert_composants` as 
                                                SELECT
                                                    `transfert_composants`.`id`,
                                                    `transfert_composants`.`_composants`,
                                                    `transfert_composants`.`_transferts`,
                                                    `transfert_composants`.`qtt_par_carton`,
                                                    `transfert_composants`.`qtt_par_piece`,
                                                    composants.reference,
                                                    composants.qtt_par_carton as qtt_par_carton_composant
                                                
                                                FROM `transfert_composants`
                                                    left join transferts on transferts.id=transfert_composants._transferts
                                                    LEFT JOIN composants on composants.id=transfert_composants._composants ;






                                             drop View IF EXISTS `views_dossier_transfers`;
                                             create view `views_dossier_transfers` as  
                                                SELECT 
                                                    `transferts`.`id`,
                                                    `transferts`.`chauffeur`,
                                                    `transferts`.`date`,
                                                    `transferts`.`_dossiers`,
                                                    dossiers.description
                                                    
                                                FROM `transferts` 
                                                    LEFT JOIN dossiers on dossiers.id=transferts._dossiers;



                                             drop View IF EXISTS `views_dossier_transfers_t`;
                                             create view `views_dossier_transfers_t` as  
                                                SELECT 
                                                    `transferts_f`.`id`,
                                                    `transferts_f`.`chauffeur`,
                                                    `transferts_f`.`date`,
                                                    `transferts_f`.`_dossiers`,
                                                    dossiers.description
                                                    
                                                FROM `transferts_f` 
                                                    LEFT JOIN dossiers on dossiers.id=transferts_f._dossiers;




                                            drop View IF EXISTS `view_liste_communes`;
                                            create view view_liste_communes as
                                                SELECT 
                                                    communes.id as id,
                                                    communes.nom as commune,
                                                    wilayas.nom as wilaya ,
                                                    wilayas.code
                                                FROM `communes`                                     
                                                left join wilayas on wilayas.id = communes._wilaya
                                                order by wilayas.code ,commune;

                                            drop View IF EXISTS `views_liste_utilisateurs`;
                                            create view views_liste_utilisateurs AS
                                            SELECT 
                                                users.id,
                                                `user`,
                                                `pass`,    
                                                `status`,
                                                users_type.type
                                                
                                            FROM `users`
                                                left join users_type on users_type.id = users._user_type ;
                                                
                                            drop View IF EXISTS `views_bl_detail`;
                                            create view views_bl_detail AS

                                                SELECT 
                                                    `bl_detail`.`id` as bl_detail_id,
                                                    `bl_detail`.`qtt_cartons`,
                                                    `bl_detail`.`qtt_piece`,
                                                    `bl_detail`.`prix`,
                                                    `bl_detail`.`montant`,
                                                    `bl_detail`.`remise`,
                                                    `bl_detail`.`_bl`,
                                                    `bl_detail`.`_articles`,
                                                    `bl_detail`.`_dossiers`,
                                                    articles.reference as _articles_reference,
                                                    articles.qtt_carton as _articles_qtt_carton ,
                                                    articles.designation as _articles_description,
                                                    dossiers.description as _dossier_description


                                                FROM `bl_detail`

                                                left join bl on bl.id = bl_detail._bl
                                                left join articles on articles.id=bl_detail._articles
                                                LEFT join dossiers on dossiers.id = bl_detail._dossiers;
                                                
                                            drop View IF EXISTS `views_bl_client`;
                                            create view views_bl_client AS

                                                SELECT 
                                                bl.`id`,
                                                bl.`date`,
                                                bl.`total`,
                                                bl.`remise`,
                                                bl.`remise_montant`,
                                                bl.`_dossier`,
                                                bl.`_client`,
                                                clients.societe,
                                                clients.prix,
                                                dossiers.description




                                                FROM `bl` 
                                                LEFT join clients on clients.id=bl._client 
                                                LEFT join dossiers on dossiers.id = bl._dossier;
                                                    
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            ";


                            $multi = mysqli_multi_query($link, $sql) or die(mysqli_error($link));

                                if ($multi) {
                                    do {
                                        // Store first result set
                                        //var_dump(mysqli_store_result($link) );
                                        if ($result = mysqli_store_result($link)) {

                                            while ($row = mysqli_fetch_row($result)) {
                                               // printf("%s\n", $row[0]);
                                            }
                                            mysqli_free_result($result);
                                        } else
                                        // if there are more result-sets, the print a divider
                                        if (mysqli_more_results($link)) {
                                          //  printf("-------------\n");
                                        }
                                        //Prepare next result set
                                    } while (mysqli_more_results($link) && mysqli_next_result($link));
                                    ?>
                                    <div id="reussi" style="position:absolute; right:10px; Top:30px;"></div>
                                    <script type="text/javascript">
                                        document.getElementById('reussi').innerHTML = "<div class='alert alert-success'>OK.</div>";
                                        setTimeout(function () {
                                            document.getElementById('reussi').innerHTML = "";

                                        }, 3000);
                                    </script>
                                    <?php
                                    echo'<meta http-equiv="refresh" content="1;URL=section_4.php">';
                                
                                }

                            } else {
                            ?>

                            <?php
                            }


                        ?>


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
