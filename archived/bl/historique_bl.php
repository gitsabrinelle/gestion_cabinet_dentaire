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
                            <a href="tableau_dette.php">
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
                            <a href="recettes.php">
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



        <h2></h2>

        <br/>



        <?php include('../global.php'); ?>

        <?php
        //session_start();


        if(isset($_SESSION['username']))
        {
        $id_bl;
        $ref_client;
        if(isset($_GET['ref_client']))

            $ref_client=$_GET['ref_client'];
        $re=mysqli_query($link,"select ref_client from  bl where ref_client
='".$ref_client."'
");

        $num=mysqli_num_rows($re);
        if($num!=0)
        {
            $sql = mysqli_query($link,"
select * from bl where ref_client = '".$ref_client."'
ORDER BY  `bl`.`date` DESC
");

            $num = mysqli_num_rows($sql);
            if($num!=0)
            {  ?>


                <hr />
                <h1>
                    <?php
                    $sql2 = mysqli_query($link,"select * from clients where ref_client = '".$ref_client."'");
                    $num2 = mysqli_num_rows($sql2);
                    if ($sql2)
                    {
                        $row2 = mysqli_fetch_assoc($sql2);

                        echo("Historique d' achats pour  :  ".$row2['Societe']);
                    }
                    ?>
                </h1>
                <hr />
                <br />
                <TABLE border = 2 align="center" class="table table-bordered table-striped datatable">
                <tr>
                    <td>
                        N° BL
                    </td>
                    <td nowrap="nowrap">
                        Date BL
                    </td>

                    <td>
                        Montant
                    </td>
                    <td>
                        Reglement
                    </td>



                    <td nowrap="nowrap">Facture de Route</td>
                    <td>
                        Actions
                    </td>
                </tr>
                <tr>
                <?php
                while($row= mysqli_fetch_array($sql))

                {
                    $id_bl=$row['id_bl'];?>
                    <td align="center" valign="top"><a style="text-decoration: none; color:#00FF00" href="../bl/bl-vente.php?id_bl=<?php echo("".$id_bl)?>">
                            <?php
                            echo($row['id_bl']);

                            ?><img src="design/pics/modifier.png" width="16" height="16" /></a>
                    </td>
                    <td nowrap="nowrap">

                        <?php
                        //echo($row['date']);
                        echo("".date("d-m-Y", strtotime($row['date'])));
                        ?>
                    </td>

                    <td align="right" nowrap="nowrap" style="text-align: right;"><?php
                        $montant_ht=$row['montant_ht']-$row['montant_remise'];
                        $montant_ht = number_format($montant_ht, 2, ',', ' ');

                        echo($montant_ht);
                        ?></td>
                    <td>
                        <a href="../bl/bl_versement.php?id_bl=<?php echo $id_bl;?>"><img src="../design/pics/modifier.png" width="16" height="16" alt="Modifier" longdesc="modifier" /></a>	</td>

                    <td align="center" nowrap="nowrap">
                        <a href="../print/print_facture_de_route.php?id_bl=<?php echo ("".$id_bl); ?>">
                            <img src="../bl/design/pics/print-button.png" width="48" height="35" /> </a></td>
                    <td>
                        <?php
                        $re=mysqli_query($link,"select ref_client from  bl where ref_client
='".$ref_client."'
");
                        if((1==0))
                        {
                            ?>
                            <a href="delete-bl.php?id_bl=<?php echo("".$id_bl)?>&ref_client=<?php echo("".$ref_client)?>">
                                <img src="design/pics/delete.png" width="16" height="16" /></a>
                        <?php }?>
                    </td>


                    </tr>
                    <?php
                }


            }

            ?>
            </TABLE>   <!-- end .content -->

            <?php
        }

        else{
            ?>
            <center><b><?php echo("Ce Client n'a aucun Bon de livraison"); ?></b></center>
            <?php


        }

        ?>





        <br/>









    <br />






    <br />
    <br />


        <?php  }
        else header("Location:../login.php");
        ?>



    <br />




    <br />
    <!-- Footer -->

</div>

</body>



<!-- Chat Histories -->




<!-- Chat Histories -->



</div>





<!-- Imported styles on this page -->
<link rel="stylesheet" href="../assets/js/datatables/datatables.css">
<link rel="stylesheet" href="../assets/js/select2/select2-bootstrap.css">
<link rel="stylesheet" href="../assets/js/select2/select2.css">

<!-- Bottom scripts (common) -->
<script src="../assets/js/gsap/TweenMax.min.js"></script>
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


<!-- Demo Settings -->
<script src="../assets/js/neon-demo.js"></script>

</body>
</html>