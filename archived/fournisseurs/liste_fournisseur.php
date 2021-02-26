<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="assets/images/favicon.ico">

    <title>Gestion Commericale| </title>

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

        <h2>Liste des Fournisseurs</h2>

        <br/>





        <br/>








        <?php
        include("../global.php");



        $rest_total =0;


        function dette($ref_fournisseur,$first,$link)
        {
            $dette = 0;
            $total_versement=0;
            $total_bon_fournisseur = 0;


            $query = mysqli_query($link,

                "SELECT COALESCE( SUM( facture_achat.bon_fournisseur ) , 0 ) AS total_bon_fournisseur
FROM facture_achat, fournisseurs
WHERE facture_achat.ref_fournisseur = fournisseurs.ref_fournisseur
AND facture_achat.ref_fournisseur =  '$ref_fournisseur'"
            )or die (mysqli_error($link));

            if (mysqli_num_rows($query))
            {
                while ($row = mysqli_fetch_array($query))
                {
                    $total_bon_fournisseur  = $row["total_bon_fournisseur"];
                }
            }

            $query = mysqli_query($link,"
select  COALESCE(SUM(reglement_achat.montant),0) as total_versement 
 from reglement_achat ,facture_achat, fournisseurs 

where facture_achat.ref_fournisseur = fournisseurs.ref_fournisseur and 

reglement_achat.id_fachat = facture_achat.id_fachat and

facture_achat.ref_fournisseur='$ref_fournisseur'  
")or die (mysqli_error($link));

            if (mysqli_num_rows($query))
            {
                while ($row = mysqli_fetch_array($query))
                {
                    $total_versement  = $row["total_versement"];
                }
            }


            $dette = $first -$total_versement	+ $total_bon_fournisseur;


            return $dette ;
        }


        function  can_delet($ref_fournisseur,$first,$link)
        {
            $result = true;

            $dette = 0;
            $total_versement=0;
            $total_bon_fournisseur = 0;
            $article = 0;

            $query = mysqli_query($link,

                "SELECT COALESCE( SUM( facture_achat.bon_fournisseur ) , 0 ) AS total_bon_fournisseur
FROM facture_achat, fournisseurs
WHERE facture_achat.ref_fournisseur = fournisseurs.ref_fournisseur
AND facture_achat.ref_fournisseur =  '$ref_fournisseur'"
            )or die (mysqli_error($link));

            if (mysqli_num_rows($query))
            {
                while ($row = mysqli_fetch_array($query))
                {
                    $total_bon_fournisseur  = $row["total_bon_fournisseur"];
                }
            }
            $query = mysqli_query($link,

                "SELECT 
	* FROM articles where ref_fournisseur   =  '$ref_fournisseur'"
            )or die (mysqli_error($link));

            $article = (mysqli_num_rows($query));


            $query = mysqli_query($link,"
select  COALESCE(SUM(reglement_achat.montant),0) as total_versement 
 from reglement_achat ,facture_achat, fournisseurs 

where facture_achat.ref_fournisseur = fournisseurs.ref_fournisseur and 

reglement_achat.id_fachat = facture_achat.id_fachat and

facture_achat.ref_fournisseur='$ref_fournisseur'  
")or die (mysqli_error($link));

            if (mysqli_num_rows($query))
            {
                while ($row = mysqli_fetch_array($query))
                {
                    $total_versement  = $row["total_versement"];
                }
            }


            if ( $first +$total_versement	+ $total_bon_fournisseur+$article)

                $result = false ;



            return $result;
        }



        $dette = 0;
        $req=mysqli_query($link,"select * from fournisseurs");
        if (mysqli_num_rows($req))
        {

            ?>
            <TABLE border="1" align="center" class="table table-bordered table-striped datatable" >
                <tr>

                    <td >Code </td>
                    <td align="center" valign="middle">Societe </td>
                    <td >Liste d ' Articles</td>
                    <td >Dette n°1:</td>
                    <td >Credit actuel</td>
                    <td >Supprimer</td>
                </tr>
                <?php
                while($row=mysqli_fetch_array($req))
                {
                    $ref = $row[0];
                    $nom = $row[1];
                    $code = $row[2];
                    $tel = $row[3];
                    $fax = $row[4];
                    $email = $row[5];
                    $adresse = $row[6];
                    $bancaire = $row[7];
                    $dette = $row["dette"];
                    $date= $row["date_inscription"];
                    ?>
                    <tr>

                    <td align="center">
                        <?php echo $code?>
                    </td>
                    <td align="center">
                        <i class=\"entypo-pencil\">Modifier</i> <a  href="fiche-fournisseur.php?ref_fournisseur=<?php echo($ref);?>" class="btn btn-blue  icon-left">
                            <?php echo $nom?> </a>
                    </td>



                    <td align="center"><a href="articles-fournisseur.php?ref_fournisseur=<?php echo($ref);?>" class="btn btn-info btn-sm btn-icon icon-left"><i class=\"entypo-pencil\"></i> Modifier </a>
                    </td>
                    <td ><span style=" text-align:right;" ><?php  echo(number_format($dette, 1, '.', ' '));?></span></td>
                    <td >



                        <?php

                        $credit = dette($ref,$dette,$link);
                        $rest_total = $rest_total +$credit;
                        // echo(number_format($credit, 1, '.', ' '));

                        ?>


                        <span style ="color:<?php
                        if ($credit)
// echo "green";
// else
                            echo "red";
                        ?>;">
	<?php
    //$dette = total_dette();

    echo(number_format($credit, 2, '.', ' '));

    ?></span>




                    </td>
                    <td>

                    <?php
                    if (!can_delet($ref,$dette,$link))
                    {
                        ?><a onclick="if(confirm('Etes vous sûr de vouloir supprimer ce fournisseur ?')) document.location='delete.php?ref=<?php echo("".$ref);?>';" href="#" class="btn btn-danger  btn-icon icon-left"><i class=\"entypo-cancel\"></i>Supprimer </a>
                        <?php

                        ?>
                        </td>
                        </tr>
                        <?php
                    }
                }
                ?><tr>
                    <td>
                    </td> <td>Total DETTE
                    </td> <td>
                    </td> <td>

                    </td> <td>

<span style ="color:<?php
if ($rest_total)
// echo "green";
// else
    echo "red";
?>;">
	<?php
    //$dette = total_dette();

    echo(number_format($rest_total, 2, '.', ' '));

    ?></span>

                    </td>
                </tr>
                <?php


                ?>
            </TABLE>
            <?php

        }else
        {
            ?>
            <p style="color: #CCC; font-size: 24px; text-align: center">  Aucun fournisseur n'a été créee
            </p>
            <?php
        }
        ?>


        <br />



        <button type="button" class="btn btn-gold btn-icon"><a href="cree-fournisseur.php">
            Ajouter  Fournisseur
            <i class="entypo-user-add"></i>
        </button></a>



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