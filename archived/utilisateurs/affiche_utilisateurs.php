<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="../assets/images/favicon.ico">

    <title>Neon | Data Tables</title>

    <link rel="stylesheet" href="../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="../assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/neon-core.css">
    <link rel="stylesheet" href="../assets/css/neon-theme.css">
    <link rel="stylesheet" href="../assets/css/neon-forms.css">
    <link rel="stylesheet" href="../assets/css/custom.css">

    <script src="../assets/js/jquery-1.11.3.min.js"></script>

    <!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>



<body class="page-body" data-url="http://neon.dev">

<?php
include("../global.php");
session_start();
?>
<div class="page-container" id="page" >
    <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <div class="sidebar-menu">

        <div class="sidebar-menu-inner">

            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <a href="../index.php">
                        <img src="../assets/images/logo.png" width="120" alt=""/>
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
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                <li class="">
                    <a href="../index.php">
                        <i class="entypo-home"></i>
                        <span class="title">Acceuil</span>
                    </a>

                </li>
                <li class="has-sub">
                    <a href="">
                        <i class="entypo-users"></i>
                        <span class="title">Clients</span>
                    </a>
                    <ul>
                        <li>

                            <a href="../clients/liste_client.php">
                                <i class="entypo-user">   </i>
                                <span class="title">Liste des Clients</span>
                            </a>

                        </li>








                        <li>
                            <a href="../bl/tableau_dette.php">
                                <i class="entypo-list"></i>
                                <span class="title">Dettes</span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="has-sub">
                    <a href="">
                        <i class="entypo-paypal"></i>
                        <span class="title">Ventes</span>
                    </a>
                    <ul>



                        <li>
                            <a href="../ventes/afficheClient.php">
                                <span class="title">Bon de livraison</span>
                            </a>
                        </li>


                        <li>
                            <a href="../bl/recettes.php">
                                <span class="title">Recettes</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <span class="title">Gestion des Retours clients</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="has-sub">
                    <a href="">
                        <i class="glyphicon glyphicon-xbt"></i>
                        <span class="title">Achats</span>

                    </a>
                    <ul>
                        <li>
                            <a href="../achat/bonCommande.php">
                                <i class="entypo-inbox"></i>
                                <span class="title">Bon de Commande</span>
                            </a>
                        </li>

                        <li>
                            <a href="../facture_achat/facture_achat.php">
                                <i class="entypo-attach"></i>
                                <span class="title">Facture d'achat</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="entypo-attach"></i>
                                <span class="title">Journal des commandes</span>
                            </a>
                        </li>
                        <li>
                            <a href="../facture_achat/journalAchat.php">
                                <i class="entypo-attach"></i>
                                <span class="title">Journal des Achats</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="entypo-attach"></i>
                                <span class="title">Gestion des Retours</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="has-sub">
                    <a href="">
                        <i class="entypo-user"></i>
                        <span class="title">Fournisseurs</span>
                    </a>
                    <ul>
                        <li>
                            <a href="../fournisseurs/liste_fournisseur.php">
                                <span class="title">Liste des Fournisseurs</span>
                            </a>
                        </li>




                    </ul>
                </li>
                <li class="has-sub">
                    <a href="../articles/poduit.php">
                        <i class="glyphicon glyphicon-qrcode"></i>
                        <span class="title">Articles</span>
                    </a>
                    <ul>
                        <li>
                            <a href="../articles/produit.php">
                                <span class="title">Produits</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="has-sub">
                    <a href="">
                        <i class="entypo-bag"></i>
                        <span class="title">Stock</span>
                        <span class="badge badge-info badge-roundless">New Items</span>
                    </a>
                    <ul>
                        <li class="has-sub">
                            <a href="../stock/stock.php">
                                <span class="title">Stock par dépot</span>
                                <span class="badge badge-success">3</span>
                            </a>
                        </li>


                        </li>






                    </ul>
                </li>



                <li class="active opened active has-sub">
                    <a href="../company/index.php">
                        <i class="entypo-info-circled"></i>
                        <span class="title">Informations Entreprise</span>
                    </a>

                </li>

                <li class="active opened active has-sub">
                    <a href="../company/coffre.php">
                        <i class="entypo-lock"></i>
                        <span class="title">Coffre</span>
                    </a>

                </li>

                <li class="active opened active has-sub">
                    <a href="../company/charges.php">
                        <i class="entypo-drive"></i>
                        <span class="title">Charges</span>
                    </a>

                </li>

                <li class="active opened active has-sub">
                    <a href="affiche_utilisateurs.php">
                        <i class="entypo-user"></i>
                        <span class="title">Utilisateurs</span>
                    </a>

                </li>
                <li class="active opened active has-sub">
                    <a href="../deconnexion.php">
                        <i class="entypo-logout"></i>
                        <span class="title">Deconnection</span>
                    </a>

                </li>

            </ul>






        </div>

    </div>








    <div class="main-content">





        <ol class="breadcrumb bc-3">
            <li>
                <a href="../index.html"><i class="fa-home"></i>Acceuil</a>
            </li>
            <li>

                <a href="utilisateurs/affiche_utilisateurs.php">Liste des utilisateurs</a>
            </li>

        </ol>

        <h2>Utilisateurs du systeme</h2>

        <br/>




        <hr />

        <br>

        <?php
        $ref;
        $query = "";
        $type = 0;
        $user;
        $username;
        if (isset($_SESSION['username'])) {


            $req_admin = mysqli_query($link, "select * from users where user  =  '" . $_SESSION['username'] . "' ") or die(mysqli_error($link));

            if (mysqli_num_rows($req_admin))//req_admin
            {

                $type = mysqli_fetch_array($req_admin);
                $type = $type["id_user_type"];
                if ($type != "2") {
                    $query = "and users.user = '" . $_SESSION['username'] . "'";

                } else {
                    ?>

                    <a href="cree_utilisateur.php" class="btn btn-outline-success"> Créer un nouvel utilisateur
                                 </a>
                    <br/>  <br/>
                    <?php
                }
            }
            $req_utilisateur = mysqli_query($link, "select * from users , users_type where users.id_user_type = users_type.id_user_type " . $query) or die(mysqli_error($link));
            if (!mysqli_num_rows($req_utilisateur)) {
                echo("Pas d'utilisateurs !!");
            } else {

                ?>
                <table  class="table table-bordered table-striped datatable">
                <tr>


                    <th nowrap="nowrap">
                        Nom d'utilisateur :
                    </th>


                    <th nowrap="nowrap">Date inscription
                    </th>
                    <th nowrap="nowrap">
                        Acces Web
                    </th>
                    <th nowrap="nowrap">Type </th>


                    <th nowrap="nowrap">Etat

                    </th>
                    <th nowrap="nowrap">Status </th>

                    <?php
                    if ($type == 2) { ?>
                        <th nowrap="nowrap">Supprimer
                        </th>
                        <?php
                    }
                    ?>    </tr>
                <?php
                while ($row_req_utilisateur = mysqli_fetch_array($req_utilisateur)) {
                    $user = $row_req_utilisateur["user"];
                    if ($row_req_utilisateur["user"] === "admin22" || $row_req_utilisateur["user"] === "System") {
                    } else {
                        ?>
                        <tr>

                            <td align="center" nowrap="nowrap">
                                <a
                                   href="cree_utilisateur.php?user=<?php echo $row_req_utilisateur["user"] ?>" class="btn btn-green ">
                                 <?php echo $row_req_utilisateur["user"] ?>

                                </a>
                            </td>


                            <td align="center" nowrap="nowrap">
                                <?php $date = $row_req_utilisateur["date"];
                                echo date("d-m-Y", strtotime($date));
                                ?>
                            </td>


                            <td align="center" nowrap="nowrap">
                                <?php if ($row_req_utilisateur["web"] == "1") {
                                    // echo "OK"
                                    ?>
                                    <img src="../design/pics/boutton ok.jpg" width="21" height="21"/>
                                    <?php
                                } else {
                                    ?>

                                    <img src="../design/pics/images.png" width="22" height="22"/>
                                    <?php
                                } ?>

                            </td>
                            <td align="center" nowrap="nowrap">     <?php echo " " . $row_req_utilisateur["type"]
                                ?></td>


                            <td align="center" nowrap="nowrap">
                                <?php if ($row_req_utilisateur["etat"] == 1) {
                                    if ($type == 2) { ?>
                                        <a style="color:#33FFFF" href="delete_disable.php?id_user=<?php echo $row_req_utilisateur["id_user"] ?>&action=disable" >
                                        <?php
                                    } ?>
                                    <img src="../design/pics/Sans titre.png" width="66" height="35"/>
                                    <?php
                                    if ($type == 2) { ?>          </a>
                                        <?php
                                    }


                                } else {

                                    if ($type == 2) { ?>
                                        <a style="color:#33FFFF" href="delete_disable.php?id_user=<?php echo $row_req_utilisateur["id_user"] ?>&action=enable">
                                        <?php
                                    } ?>
                                    <img src="../design/pics/Sans titre2.png" width="66" height="35"/>
                                    <?php
                                    if ($type == 2) { ?>          </a>
                                        <?php
                                    }

                                } ?>

                            </td>
                            <td align="center" nowrap="nowrap"><img src="../design/pics/modifier.png" width="16"
                                                                    height="16"/></td>
                            <td align="center" nowrap="nowrap">Online / Offline</td>


                            <?php
                            if ($type == 2) { ?>
                                <td align="center">
                                    <?php
                                    if (strcmp($user, $_SESSION['username'])) {

                                        $sql = mysqli_query($link, "SELECT *  FROM `detail_fachat`,users WHERE users.`user` = '$user' and `detail_fachat`.`id_user`= users.id_user") or die (mysqli_error($link));
                                        $sql1 = mysqli_query($link, "SELECT *  FROM detail_facture,users WHERE  users.`user` = '$user' and detail_facture.`id_user`= users.id_user") or die (mysqli_error($link));
                                        $sql2 = mysqli_query($link, "SELECT *  FROM detail_bl,users WHERE users.`user` = '$user' and detail_bl.`id_user`= users.id_user") or die (mysqli_error($link));
                                        if (!mysqli_num_rows($sql) && !mysqli_num_rows($sql1) && !mysqli_num_rows($sql2)) {
                                            ?>
                                            <a href="delete_disable.php?id_user=<?php echo($row_req_utilisateur["id_user"]) ?>&action=delete"
                                               class="btn btn-danger "><i class="entypo-cancel"></i>Supprimer </a>
                                            <?php

                                        }
                                    }
                                    ?>

                                </td>

                                <?php
                            }
                            ?>

                        </tr>

                        <?php
                    }
                }


            }

            ?>

            </table>
            <h3>
            <br/>
            <br/>
            <?php
            if ($type == 2) { ?>
                <br/>
                * Vous ne pouvez pas supprimer certains comptes car :

                </h3>
                <h3><br/>
                    -- Il s'agit d un compte Administrateur
                    .<br/>
                    -- Il s'agit d un compte qui a fait des BL ou bien des Factures .. afin de garder la trace.
                    <br/>
                    -- Vous pouvez desactiver tous les comptes que vous voulez .

                </h3>
                <?php
            }
            ?><?php
        } else
            header("Location:../login.php");


        ?>









    </div>


























<!-- Footer -->





</div>

<!-- Chat Histories -->





<!-- Chat Histories -->



</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- Imported styles on this page -->
<link rel="stylesheet" href="../assets/js/datatables/datatables.css">
<link rel="stylesheet" href="../assets/js/select2/select2-bootstrap.css">
<link rel="stylesheet" href="../assets/js/select2/select2.css">
<link rel="stylesheet" type="text/css" href="../assets/js/print.css" media="print" />
<!-- Bottom scripts (common) -->
<script src="../assets/js/gsap/TweenMax.min.js"></script>script type="text/javascript"
<script src="../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/joinable.js"></script>
<script src="../assets/js/resizeable.js"></script>
<script src="../assets/js/neon-api.js"></script>


<!-- Imported scripts on this page -->
<script src="../assets/js/datatables/datatables.js"></script>
<script src="../assets/js/select2/select2.min.js"></script>
<script src="../assets/js/neon-chat.js"></script>


<!-- JavaScripts initializations and stuff -->
<script src="../assets/js/neon-custom.js"></script>
<script src="../assets/js/printThis.js"></script>

<!-- Demo Settings -->
<script src="../assets/js/neon-demo.js"></script>

</body>
</html>