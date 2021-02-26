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
                            <a href="afficheClient.php">
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



        <?php
        include("../global.php");
        $dette = 0;
       // session_start();
        if(isset($_SESSION['username']))
        {
        ?>



        <br />



        <?php

        $ref;
        ?>


        <?php
        $req=mysqli_query($link,"select * from clients
ORDER BY `clients`.`ref_client` DESC
");
        $num = mysqli_num_rows($req);
        if ($num)
        {?>
            <h1>Bon de livraison</h1>


            <TABLE border="1" align="center" class="table table-bordered table-striped datatable">
                <tr class=>


                    <th width="400">Client  </th>
                    <?php
                    /*
                     <th >Mobile </th>

                     <th >N R C </th>
                     <th >N ° ART </th>
                     <th >N I F </th>
                     */?>

                    <th nowrap="nowrap" >Nouveau Bon de livraison</th>

                    <th nowrap="nowrap">Historique</th>

                    <th>Supprimer</th>


                </tr>
                <?php



                while($row=mysqli_fetch_array($req))
                {
                    $societe= $row[2];
                    $ref=$row[0];
                    $client=$row[1] ;
                    $tel=$row[3];


                    ?>
                    <tr>




                        <td align="center">
                            <?php  echo "".$client.$societe;?>
                        </td>


                        <?php
                        /*  <td align="center">
                                <?php echo $email?>
                            </td>



                          <td align="center">
                                <?php echo ($nrcc);?>
                            </td>
                            <td align="center">
                                <?php echo $ccp?>
                            </td>

                            <td align="center">
                                <?php echo $row["nif"];
                                $dette = $row["dette"];?>
                            </td>
                        */
                        $dette = $row["dette"];
                        ?>

                        <td align="center">

                            <a href="#<?php echo $row["ref_client"];?>" id= "<?php echo $row["ref_client"];?>" onclick="window.open('../bl/new_bl.php?ref_client=<?php echo $row["ref_client"];?>')" class="linkcolor">BL<img src="design/pics/pdf.png" width="16" height="16" longdesc="" />
                            </a>
                        </td>
                        <?php


                        ?>

                        <td >
                            <center>
                                <a href="../bl/historique_bl.php?ref_client=<?php echo $row["ref_client"];?>" id= "<?php echo $row["ref_client"];?>"  class="linkcolor" >BL<img src="design/pics/modifier.png" width="16" height="16"   /></a>
                            </center>

                        </td>




                        <td align="center">
                            <?php
                            $re=mysqli_query($link,"select * from  bl where 
ref_client ='".$ref."'
")or die (mysqli_error($link));
                            $num=mysqli_num_rows($re);


                            $re3=mysqli_query($link,"select * from  bl where ref_client ='".$ref."'

" )or die (mysqli_error($link));
                            $num3=mysqli_num_rows($re3);

                            if($num3==0  && $ref!="1" && $dette==0)
                            {
                                ?>
                                <a href="delete.php?ref=<?php echo($ref);?>" class="linkcolor"><img src="design/pics/delete.png" width="16" height="16" longdesc="" /></a>

                                <?php
                            }
                            ?>
                        </td>
                        <?php
                        //			 echo "<td class=\"lien_besoin_recherche\" width=\"100\"><a width=\"100\" href=modifier_besoin_form.php?code=$row[0] target=\"bas\">Modifier</a></td>";


                        ?>
                    </tr>
                    <?php
                }

                ?>
            </TABLE>
            <?php
        }else
        {
            ?>
            <center>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>Aucun Client n'existe encore , Voulez vous <a href="cree-client.php" style="text-decoration: none; color: #0F0;">Crééer un</a> ? </p>
            </center>
        <?php	}
        ?>    <!-- end .content -->
    </div>
    <?php
    }else

        header("Location:../login.php");

    ?>




    <br/>









    <br />






    <br />
    <br />






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