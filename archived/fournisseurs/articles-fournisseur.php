<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="assets/images/favicon.ico">

    <title>Neon | Data Tables</title>

    <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/neon-core.css">
    <link rel="stylesheet" href="assets/css/neon-theme.css">
    <link rel="stylesheet" href="assets/css/neon-forms.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <script src="assets/js/jquery-1.11.3.min.js"></script>

    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>



<body class="page-body" data-url="http://neon.dev">

<?php
session_start();


if(isset($_SESSION['username']))
{

?>


<?php
include("modele/global.php");
$ref = '';
?>


<div class="page-container">
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
                    <a href="../utilisateurs/affiche_utilisateurs.php">
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


        <hr/>

        <ol class="breadcrumb bc-3">
            <li>
                <a href="../index.php"><i class="fa-home"></i>Acceuil</a>
            </li>
            <li>

                <a href="liste_founrnisseur.php">Fournisseurs</a>
            </li>
            <li class="active">

                <strong>Articles fournisseur</strong>
            </li>
        </ol>

        <h2></h2>

        <br/>


        <?php

        include("../global.php");

        $id_art;
        $ref_fournisseur = "";

        $re = "select * from articles   ";

        if (isset($_GET["ref_fournisseur"])) {
            $ref_fournisseur = $_GET["ref_fournisseur"];
            $re = $re . "  where ref_fournisseur= '" . $ref_fournisseur . "' ";
        } else {

        }


        //qtt_comptable


        if (isset($_GET['ref'])) {
            if ($_GET['ref'] == 1)
                $re = $re . " ORDER BY reference";
            if ($_GET['ref'] == 2)
                $re = $re . " ORDER BY reference DESC";
        }


        if (isset($_GET['des'])) {
            if ($_GET['des'] == 1)
                $re = $re . " ORDER BY designation";
            if ($_GET['des'] == 2)
                $re = $re . " ORDER BY designation DESC";
        }


        //Prix_HT


        //


        $req = mysqli_query($link, $re);
        ?>

        <center><h3>Trier Votre Table par Reference , Designation ou par Fournisseur en cliquant sur une de ces
                dernieres</h3>

        </center>
        <?php
        if (isset($_GET["ref"]) || isset($_GET["des"]) || isset($_GET["fourn"])) {
            ?>
            votre table est triée par <span style="color:#00FF99">

            <?php
            if (isset($_GET["ref"])) {
                ?>
                Reference </span>  et d'Odre <span style="color:#00FF99">
                <?php
                if ($_GET["ref"] == "1") {
                    ?>
                    A -> Z</span>
                    <?php
                } else {
                    ?>
                    Z -> A
                    </span>
                    <?php
                }
            }

            if (isset($_GET["des"])) {

                ?>
                Designation </span>  et d'Ordre <span style="color:#00FF99">
                <?php
                if ($_GET["des"] == "1") {
                    ?>
                    A -> Z</span>
                    <?php
                } else {
                    ?>
                    Z -> A
                    </span>
                    <?php
                }
            }
            if (isset($_GET["fourn"])) {
                ?>
                Fournisseur </span>  et d'Ordre <span>
                <?php
                if ($_GET["fourn"] == "1") {
                    ?>
                    A -> Z</span>
                    <?php
                } else {
                    ?>
                    Z -> A
                    </span>
                    <?php
                }
            }
        }
        ?>

        <TABLE border="1" align="center" class="table table-bordered table-striped datatable">
            <tr>


                <th height="60">

                    <a
                       href="articles-fournisseur.php?ref_fournisseur=<?php echo $ref_fournisseur ?>&ref=
<?php
                       if (isset($_GET['ref'])) {
                           if ($_GET['ref'] == 1)
                               echo("2");
                           if ($_GET['ref'] == 2)
                               echo("1");
                       } else
                           echo("1");
                       ?>

">

                        Reference


                        <?php
                        if (isset($_GET['ref'])) {
                            if ($_GET['ref'] == 1)
                                echo("&#9650;");
                            if ($_GET['ref'] == 2)
                                echo("&#9660;");
                        } ?></a>


                </th>


                <th>


                    <a
                       href="articles-fournisseur.php?ref_fournisseur=<?php echo $ref_fournisseur ?>&des=
<?php
                       if (isset($_GET['des'])) {
                           if ($_GET['des'] == 1)
                               echo("2");
                           if ($_GET['des'] == 2)
                               echo("1");
                       } else
                           echo("1");
                       ?>

">

                        Designation

                        <?php
                        if (isset($_GET['des'])) {
                            if ($_GET['des'] == 1)
                                echo("&#9650;");
                            if ($_GET['des'] == 2)
                                echo("&#9660;");
                        }
                        ?>
                    </a>

                </th>

                <th>
                    Qtt Achetée
                </th>
                <th>
                    Quantite Vendu
                </th>
                <th>Disponible</th>


                <th>

                    <a
                       href="articles-fournisseur.php?ref_fournisseur=<?php echo $ref_fournisseur ?>&fourn=
<?php
                       if (isset($_GET['fourn'])) {
                           if ($_GET['fourn'] == 1)
                               echo("2");
                           if ($_GET['fourn'] == 2)
                               echo("1");

                       } else
                           echo("1");
                       ?>

">


                        Fournisseur

                        <?php
                        if (isset($_GET['fourn'])) {
                            if ($_GET['fourn'] == 1)
                                echo("&#9650;");
                            if ($_GET['fourn'] == 2)
                                echo("&#9660;");
                        }

                        ?>

                    </a>

                </th>

            </tr>
            <?php
            $r = 1;
            while ($row = mysqli_fetch_array($req)) {
                $id_art = $row["id_article"];
                // $ref = $row[0];
                $ref2 = $row["reference"];
                $codebar = $row["code_bare"];
                $des = $row["designation"];
                //$QSTOK = $row[4];
                //$QCOMPT= $row[5];
                //$STOKMIN= $row[6];
                //$PRIACHA= $row[7];
                //$Marge = $row[8];
                $Prix_HT = $row["Prix_HT"];
                $ref_fournisseur = $row["ref_fournisseur"];
                $req_ref_fourn = mysqli_query($link, "SELECT *
FROM `fournisseurs`
WHERE `ref_fournisseur` = '" . $ref_fournisseur . "'");
                $row_req_fourn = mysqli_fetch_array($req_ref_fourn);
                $fournisseur = $row_req_fourn['Societe'];
                ?>
                <tr>


                    <td height="30" align="center">
                        <?php echo $ref2 ?>

                    </td>
                    <td height="40" align="center">
                        <a class="btn btn-info btn-icon icon-left"
                           href="../stock/update-designation.php?search=<?php echo("$ref2"); ?>">
                            <i class=\"entypo-pencil\">Modifier</i>
                        </a>
                    </td>


                    <td height="30" align="center">
                        <?php $quant_en_Stock = 0;
                        $quant_vendu = 0;

                        $quantite_total = 0;

                        $requetqt = mysqli_query($link, "SELECT COALESCE(SUM(quantite),0) AS quant_en_Stock
FROM  detail_bl 
WHERE  id_article = '$id_art'") or die (mysqli_error($link));

                        // $quant_compta = mysqli_query($link,"SELECT COALESCE(SUM(quantite),0) AS quant_en_Stock
                        // FROM  detail_facture
                        // WHERE  id_article = '$id_art'")or die (mysqli_error($link));

                        $requetqtv = mysqli_query($link, "SELECT COALESCE(SUM(qtt),0) AS quant_en_Stock
FROM  detail_fachat 
WHERE  id_article = '$id_art'") or die (mysqli_error($link));

                        $row2v = mysqli_fetch_array($requetqtv);
                        // $row2compta=mysqli_fetch_array($quant_compta);

                        $row2 = mysqli_fetch_array($requetqt);
                        //if(mysqli_num_rows($requetqt)!=0)
                        $quantite_total = $row2v['quant_en_Stock'];
                        $quant_vendu = $row2['quant_en_Stock'];
                        // $quant_comptab= $row2compta['quant_en_Stock'];
                        $quant_en_Stock = $row2v['quant_en_Stock'] - $quant_vendu;
                        echo(" " . $quantite_total); ?>
                    </td>
                    <td height="30" align="center">
                        <?php echo("" . $quant_vendu); ?>
                    </td>
                    <td align="center"><?php echo("" . $quant_en_Stock); ?>
                    </td>

                    <td height="30" align="center">
                        <?php echo $fournisseur ?>
                    </td>


                </tr>
                <?php
            }

            ?>
        </TABLE>

        <?php
        }
        ?>



        <br />


    </div>

</div>



















<br />




<br />
<br />










<br />




<br />
<!-- Footer -->
<footer class="main">

    &copy; 2019 <strong>ComInTec</strong>  <a href="http://laborator.co" target="_blank">Bureau de consulting et formation en Informatique</a>

</footer>
</div>





<!-- Chat Histories -->





<!-- Chat Histories -->



</div>





<!-- Imported styles on this page -->
<link rel="stylesheet" href="assets/js/datatables/datatables.css">
<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
<link rel="stylesheet" href="assets/js/select2/select2.css">

<!-- Bottom scripts (common) -->
<script src="assets/js/gsap/TweenMax.min.js"></script>
<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/joinable.js"></script>
<script src="assets/js/resizeable.js"></script>
<script src="assets/js/neon-api.js"></script>


<!-- Imported scripts on this page -->
<script src="assets/js/datatables/datatables.js"></script>
<script src="assets/js/select2/select2.min.js"></script>
<script src="assets/js/neon-chat.js"></script>


<!-- JavaScripts initializations and stuff -->
<script src="assets/js/neon-custom.js"></script>


<!-- Demo Settings -->
<script src="assets/js/neon-demo.js"></script>

</body>
</html>