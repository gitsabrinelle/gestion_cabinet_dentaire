<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="assets/images/favicon.ico">

    <title>Gestion Commerciale</title>

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

?>


<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <div class="sidebar-menu">

        <div class="sidebar-menu-inner">

            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <a href="../index.php">
                        <img src="../assets/images/logo.png" width="120" alt="" />
                    </a>
                </div>

                <!-- logo collapse icon -->
                <div class="sidebar-collapse">
                    <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
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
                            <a href="liste_fournisseur.php">
                                <span class="title">Liste des Fournisseurs</span>
                            </a>
                        </li>




                    </ul>
                </li>
                <li class="has-sub">
                    <a href="../articles/produit.php">
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



        <hr />

        <ol class="breadcrumb bc-3" >
            <li>
                <a href="../index.php"><i class="fa-home"></i>Acceuil</a>
            </li>
            <li>

                <a href="">Fournisseurs</a>
            </li>
            <li class="active">

                <strong>Liste des Fournissseurs</strong>
            </li>
        </ol>

        <h2>Modifier les informations du fournisseur</h2>

        <br/>



        <?php
        $ref_fournisseur;

        if (isset($_GET['ref_fournisseur']))
        {

        include("../global.php");

        $ref_fournisseur = $_GET['ref_fournisseur'];
        $req = mysqli_query($link, "select * from fournisseurs where ref_fournisseur = '$ref_fournisseur'");
        $num = mysqli_num_rows($req);
        if ($num)
        {
        while ($row = mysqli_fetch_array($req))
        {
        ?>

        <form action="update-fournisseur.php" method="GET">
            <table border="2" align="center" class="table table-bordered table-striped datatable">


                <tr class="tr-gauche">
                    <td class="td-gauche">
                        societe
                    </td>

                    <td class="td-client">
                        <input name="ref_fournisseur" type="hidden" value="<?php echo("" . $ref_fournisseur); ?>"
                        />
                        <input autocomplete="off" name="societe" type="text" class="input-table" value="
<?php

                        echo($row['societe']);
                        ?>
"/>


                    </td>
                    <td class="td-point">*</td>
                </tr>


                <tr>
                    <td class="td-gauche"> Code</td>

                    <td class="td-client">


                        <input autocomplete="off" name="code" class="input-table" type="text" value="
<?php
                        echo($row['Code']); ?>
"/>

                    </td>
                    <td class="td-point">*</td>
                </tr>

                <tr>
                    <td class="td-gauche"> Dette</td>

                    <td class="td-client">


                        <input autocomplete="off" name="dette" class="input-table" type="text" value="
<?php

                        $dette = $row['dette'];
                        echo($dette);
                        ?>
"/>

                    </td>
                    <td class="td-point">*</td>
                </tr>


                <tr>
                    <td class="td-gauche"> Télephone</td>


                    <td class="td-client">


                        <input autocomplete="off" name="tel" class="input-table" type="text" value="
<?php
                        echo($row['tel']); ?>
"/>

                    </td>
                    <td class="td-point">&nbsp;</td>
                </tr>

                <tr>
                    <td class="td-gauche">Fax</td>

                    <td class="td-client">

                        <input autocomplete="off" name="fax" class="input-table" type="text" value="
<?php
                        echo($row['fax']);
                        ?>"/>

                    </td>
                    <td class="td-point">&nbsp;</td>
                </tr>
                <tr>
                    <td class="td-gauche">
                        Email
                    </td>

                    <td class="td-client">


                        <input autocomplete="off" name="email" class="input-table" type="text" value="
<?php

                        echo($row['email']);
                        ?>"/>

                    </td>
                    <td class="td-point">&nbsp;</td>
                </tr>


                <tr>
                    <td class="td-gauche">
                        Adresse
                    </td>

                    <td class="td-client">


                        <input autocomplete="off" name="adresse" class="input-table" type="text" value="
<?php
                        echo($row['adresse']);
                        ?>"/>

                    </td>
                    <td class="td-point">&nbsp;</td>
                </tr>


                <tr>
                    <td class="td-gauche">
                        Compte Bancaire
                    </td>

                    <td class="td-client">


                        <input name="compte" class="input-table" type="text" value="<?php
                        echo($row['compte_bancaire']); ?>"/>

                    </td>
                    <td class="td-point">&nbsp;</td>
                </tr>


                <tr>
                    <td class="td-gauche">
                        Date d'inscription
                    </td>

                    <td class="td-client">


                        <input autocomplete="off" readonly="readonly" name="date" class="input-table" type="text"
                               value="
<?php
                               echo($row['date_inscription']); ?>"/>

                    </td>
                    <td class="td-point">&nbsp;</td>
                </tr>


                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                        <input name="modifier" type="submit" value="Modifier" class="btn btn-info  icon-left"/>
                    </td>
                    <td>
                    </td>
                </tr>

            </table>


            <!-- end .content -->
        </form>
    </div>
    <?php
    } }}?>




    <br/>










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