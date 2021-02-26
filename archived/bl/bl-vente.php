<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="../assets/images/favicon.ico">

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
    <script src="media/js/jquery.js" type="text/javascript">
    </script>
    <script src="media/js/jquery.dataTables.js" type="text/javascript">
    </script>
    <style type="text/css">
        @import "media/css/demo_table.css";
    </style>
    <script src="design/scripts/swfobject_modified.js" type="text/javascript"></script>
    <script src="design/spryAssets/SpryMenuBar.js" type="text/javascript"></script>
    <script src="design/scripts/swfobject_modified.js" type="text/javascript"></script>
    <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>


    <script src="media/js/jquery.js" type="text/javascript">
    </script>
    <script src="media/js/jquery.dataTables.js" type="text/javascript">
    </script>
    <style type="text/css">
        @import "media/css/demo_table.css";
    </style>

</head>
<body class="page-body" data-url="http://neon.dev">



<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#dataTables').dataTable(
            {
                "bPaginate": false,

                "aLengthMenu": [
                    [1, 2, -1],
                    [1, 2, "All"]
                ],
                "oLanguage": {

                    "sLengthMenu": "Afficher _MENU_ Lignes par page",
                    "sZeroRecords": "aucun resultat touvée !! ",
                    "sInfo": "Affichage  _START_ Vers  _END_ de _TOTAL_ lignes",
                    "sInfoEmpty": "Affichage de 0 vers 0 de 0 lignes",
                    "sInfoFiltered": "(filtré du _MAX_ total des lignes)"
                },

            }
        );
    });
</script>




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


        <?php
        $ref;
        $id_bl;
        $date;
        if (isset($_SESSION['username'])) {
            include '../global.php';
            $ref_client = "";
            $montant_ht;
            //if (isset($_GET["id_bl"]))
            $id_bl = $_GET["id_bl"];
            $req = mysqli_query($link, "select * from bl,clients where bl.ref_client =  clients.ref_client and bl.id_bl = '$id_bl' ");
            $client = "";
            $adresse = "";
            while ($row = mysqli_fetch_array($req)) {
                $client = $row['Societe'];
                $adresse = $row['adresse'];
            }
            $id_article;
            $id_bl;

            // if (isset($_GET["id_bl"]))

            $id_bl = $_GET["id_bl"];

            $req = mysqli_query($link, "SELECT * FROM bl WHERE id_bl = '" . $id_bl . "'") or die (mysqli_error($link));
            if (mysqli_num_rows($req)) {
                while ($row = mysqli_fetch_array($req)) {
                    $date = $row["date"];
                }
            }
            ?>


            <div class="total">
                <?php
                $req = mysqli_query($link, " SELECT * FROM bl WHERE id_bl = '" . $id_bl . "'");
                if (mysqli_num_rows($req)) {
                    while ($row = mysqli_fetch_array($req)) {
                        $req2 = mysqli_query($link, " SELECT * FROM clients WHERE ref_client = '" . $ref_client . "'");
                        $dette;
                        if (mysqli_num_rows($req2)) {
                            while ($row2 = mysqli_fetch_array($req2)) {

                            }
                        } ?>
                        <table border="2" align="center" cellpadding="5" cellspacing="5" class="total_bl_table">


                            <tr>
                                <td nowrap="nowrap"><span class="total_bl_td2">Total :</span></td>
                            </tr>
                            <tr>
                                <td>


                    <span class="total_bl_td">
                    <?php

                    $sql = mysqli_query($link, "SELECT coalesce(SUM( Montant ),0) AS somme FROM  detail_bl WHERE  id_bl = '" . $id_bl . "'");
                    $total_bl = 0;
                    $total_bl_ht = 0;
                    if (mysqli_num_rows($sql)) {
                        while ($r = mysqli_fetch_array($sql)) {
                            $total_bl_ht = $r['somme'];
                        }
                    }
                    $query = "UPDATE bl SET montant_ht = $total_bl_ht WHERE id_bl = $id_bl;";
                    $sql33 = mysqli_query($link, $query) or die(mysqli_error($link));
                    echo(number_format($row['montant_ht'], 2, '.', ' '));
                    ?>
                </span></td>
                            </tr>
                        </table>
                        <?php
                    }
                }
                ?>
            </div>

            <hr/>
            <br/>
            <div class="input_fiche">


                <?php

                $req2 = mysqli_query($link, " SELECT * FROM bl WHERE id_bl = '" . $id_bl . "'");

                if (mysqli_num_rows($req2)) {
                    while ($row2 = mysqli_fetch_array($req2)) {

                        $montant_ht = $row2['montant_ht'];

                    }
                }
                ?>


                <ul  class="nav navbar-nav"  id="Actions">

                    <li><a href="confirm-bl.php?id_bl=<?php echo('' . $id_bl); ?> ">Valider</a></li>
                    <li><a href="#" >Actions</a>
                        <ul >
                            <li>
                                <a onclick="if(confirm('Etes vous sûr de vouloir supprimer cet Ligne ?')) document.location='delete-article.php?id_bl=<?php echo("" . $id_bl); ?>&id_detail=ALL';"
                                   href="#">Supprimer Tous <img src="design/pics/delete.png" width="16" height="16"
                                                                alt="Supprimer cet ligne"/></a></li>
                            <li><a href="import_bl.php?id_bl=<?php echo('' . $id_bl); ?> ">Importer BL Depuis Excel</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

            <hr/>
            <br/>
            <center>
                <div id="resultat">
                    <table class="class=table table-bordered table-striped datatable">
                        <tr>

                            <form action="search2.php" method="GET">
                                <?php
                                if (isset($_GET["tri"])) {
                                    ?>
                                    Reference / code barre :
                                    <input type="hidden" name="tri" value="<?php echo("" . $_GET["tri"]); ?>"/>
                                    <?php
                                }
                                ?> <input type="hidden" name="id_bl" value="<?php echo("" . $id_bl); ?>"/>

                                <?php

                                if (isset($_GET["tri"])) {
                                    if ($_GET["tri"] === "montant1")
                                        $tri = "`detail_bl`.`Montant` ASC";
                                    if ($_GET["tri"] === "montant2")
                                        $tri = "`detail_bl`.`Montant` DESC";


                                } else
                                    $tri = "id_detail DESC ";

                                $req44 = mysqli_query($link, "select * from detail_bl where id_bl = '" . $id_bl . "' ORDER BY $tri") or die(mysqli_error($link));
                                //ORDER BY   id_detail DESC );
                                $numm = mysqli_num_rows($req44);

                                $ooo = 0;
                                if (isset ($_GET["change_add"])) {
                                    if ($_GET["change_add"] == "1") {
                                        $ooo = 1;
                                    } else {
                                        $ooo = 0;
                                    }

                                }

                                ?>
                                <input type="hidden" name="change_add" value="<?php echo $ooo; ?>"/>

                                <td align="center">
                                    <input placeholder="Reference/Code Bar"
                                           name="inser_produit" type="text" class="input-current-add2"
                                           id="inser_produit"
                                           value="<?php
                                           if (isset($_GET["reference"])) {
                                               $req1 = mysqli_query($link, "SELECT * FROM articles WHERE reference = '" . $_GET["reference"] . "' ");
                                               while ($row3 = mysqli_fetch_array($req1)) {
                                                   $id_article = $row3['id_article'];
                                                   echo("" . $_GET["reference"]);
                                               }
                                           } ?>"
                                        <?php if (!isset($_GET["reference"])) { ?> autofocus="autofocus" <?php } ?> />
                                </td>

                                <td>
                                    <div id="result_req">

                                    </div>
                                </td>
                                <td><input placeholder="Quantité" type="text" class="input-current-add" id="qt_produit"
                                           name="qt_produit" <?php
                                    if (isset($_GET['qt'])) {
                                        ?>
                                        value="
<?php
                                        echo("" . $_GET['qt']);

                                        ?>
" <?php

                                        ?>

                                        autofocus="autofocus"<?php
                                    }
                                    ?>/>

                                </td>

                                <td>
                                </td>
                                <td><input placeholder="Prix" class="input-current-add" type="text" name="prix_produit"
                                           <?php
                                           if (isset($_GET['prix_produit']))
                                           {
                                           ?>value="<?php if (isset($_GET['remise_produit']))
                                               $price = ($_GET['prix_produit'] / $_GET['qt']) + $_GET['remise_produit'];
                                           else
                                               $price = $_GET['prix_produit'] / $_GET['qt'];
                                           echo("" . $price);

                                           ?>"<?php
                                    }
                                    ?>/>
                                </td>
                                <td align="center">
                                    <input placeholder="Remise (en DA)" class="input-current-add" type="text"
                                           name="Remise_produit" <?php
                                    if (isset($_GET['remise_produit'])) {
                                        ?>
                                        value = "<?php

                                        echo("" . $_GET['remise_produit']);
                                        ?>
"<?php

                                    }
                                    ?>/>
                                </td>
                                <td>
                                </td>
                                <td><input type="submit" name="submit" ID="btn2" value="Ajouter"/>
                                </td>
                                <td>&nbsp;</td>

                            </form>
                        </tr>

                    </table>

                    <hr/>
                    <br/>
                    <table class="display" id="dataTables" width="95%" border="2" cellpadding="5" cellspacing="5">

                        <thead>
                        <tr>


                            <th height="61" nowrap="nowrap" class="tdtd2" <?php
                            $ooo = 0;
                            if (isset ($_GET["change_add"])) {
                                ?>  style="color:

                                <?php

                                if ($_GET["change_add"] == "1") {
                                    $ooo = 1;
                                    ?> #93F
                                    <?php
                                } else {
                                    $ooo = 0;
                                    ?>
                                        #F60
                                    <?php
                                }
                                ?>
                                        "
                                <?php
                            }
                            ?>
                            >
                                N ° :
                                <hr/>
                                <?php

                                echo($numm . " lignes");
                                ?>
                            </th>
                            <th nowrap="nowrap" class="tdtd2">
                                <center>
                                    Reference
                                    <hr/>
                                    Code Barre
                                </center>
                            </th>
                            <th nowrap="nowrap" class="tdtd2" style="width: 25%;">
                                Designation
                            </th>
                            <th nowrap="nowrap" class="tdtd2">
                                Quantite
                                <hr/>
                                <?php
                                //echo("Total : ");
                                $reqqt = mysqli_query($link, "select COALESCE(SUM(quantite),0) AS quant from detail_bl where id_bl = '$id_bl'") or die(mysqli_error($link));
                                $row1 = mysqli_fetch_array($reqqt);
                                $qt = $row1['quant'];
                                echo("" . $qt . " unité(s)");
                                ?> </th>
                            <th nowrap="nowrap" class="tdtd2">
                                Reste
                            </th>
                            <th class="tdtd2">
                                P.U
                                <hr/>
                                Brut
                            </th>
                            <th nowrap="nowrap" class="tdtd2">
                                Remise
                                <hr/>
                                ( en DA )
                            </th>
                            <th nowrap="nowrap" class="tdtd2">
                                P.U
                                <hr/>
                                Net
                            </th>
                            <th nowrap="nowrap" class="tdtd2">
                                Montant
                            </th>
                            <th nowrap="nowrap" class="tdtd2">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php
                            if ($numm)
                            {
                            $ii = 0;
                            while ($result2 = mysqli_fetch_array($req44))
                            {
                            $req = mysqli_query($link, "SELECT * FROM articles WHERE id_article = '" . $result2['id_article'] . "' ");

                            while ($result = mysqli_fetch_array($req))
                            {
                            ?>
                            <td width="70PX" align="center" <?php
                            echo $result2['id_detail']; ?>" class="tdtd2"><span id="<?php
                            echo $result2['id_detail']; ?>"><?php
                                $ii = $ii + 1;
                                echo("" . $ii);
                                ?></span> </td>
                            <td class="tdtd2" width="70PX" style=" font-size: 14px;  <?php
                            $req_ref_double = mysqli_query($link, "SELECT  `id_article` , `id_bl` FROM `detail_bl`  where `id_article` = '" . $result2['id_article'] . "'  and id_bl = '$id_bl' ") or die (mysqli_error($link));
                            if (mysqli_num_rows($req_ref_double) > 1) {
                                ?>
                                    background-color:#309; color:#CCFF00;
                                <?php
                            }
                            ?>
                                    ">
                                <?php
                                echo("" . $result['reference']);
                                $reference = $result['reference']
                                ?>
                            </td>

                            <td style=" font-size: 16px;">
                                <?php
                                echo("" . $result['designation']);
                                ?>
                            </td>
                            <td align="center" style="font-size: 16px;">
                                <?php
                                echo("" . $result2['quantite']);
                                ?>
                            </td>
                            <td align="center" style="color: #33F; font-size: 16px;">  <?php
                                $id_art = $result['id_article'];
                                $quant_en_Stock = 0;
                                $quant_vendu = 0;
                                $quantite_total = 0;

                                $req_facture_achat = mysqli_query($link, "SELECT COALESCE(SUM(qtt),0) AS quant_en_Stock
FROM  detail_fachat 
WHERE  id_article = '$id_art'") or die (mysqli_error($link));

                                $prix2 = 0;
                                $requetqt = mysqli_query($link, "SELECT COALESCE(SUM(quantite),0) AS quant_en_Stock
FROM  detail_bl 
WHERE  id_article = '$id_art'") or die (mysqli_error($link));
                                $row2 = mysqli_fetch_array($requetqt);
                                $quant_vendu = $row2['quant_en_Stock'];
                                $row_facture_achat = mysqli_fetch_array($req_facture_achat);
                                $quantite_total = $row_facture_achat['quant_en_Stock'];
                                $quant_reste = $quantite_total - $quant_vendu;
                                ?>
                                <a class="linkcolor" href="acheteurs_article_bl.php?id_article=<?php
                                echo($id_art);
                                ?>">
                                    <?php
                                    echo("$quant_reste");
                                    ?>
                                </a></td>
                            <td width="70PX" align="center" style=" font-size: 16px;">
                                <?php
                                //	if (isset($_GET["prix_produit"]))
                                //{
                                if ($result2['prix'] != 0)
//$prix2 = $_GET["prix_produit"];
//}
//else
                                    $prix2 = $result2['prix'];
                                // else
                                // $prix2 = $result['Prix_HT'];
                                echo("" . $prix2);
                                ?>
                            </td>
                            <td width="90PX" align="center" style=" font-size: 16px;">
                                <?php
                                //$result[4]+$result[4]*0.17;
                                echo("" . $result2['Remise'] . "");

                                ?>
                            </td>
                            <td width="90PX" align="center" style=" font-size: 16px;">
                                <?php
                                $prix = $prix2 - $result2['Remise'];
                                echo("" . $prix);
                                ?>
                            </td>
                            <td width="90PX" align="center" style="font-size: 18px; font-weight: bold;">
                                <?php
                                //$result[4]+$result[4]*0.17;
                                $total = $result2['quantite'] * $prix;

                                echo("" . $total . "");
                                ?>
                            </td>
                            <td align="center" valign="middle"><a
                                        href="change_article.php?id_bl=<?php echo("" . $id_bl); ?>&qt=<?php echo("" . $result2['quantite']); ?>&id_detail=<?php echo $result2['id_detail']; ?>&reference=<?php echo($reference); ?>&prix_produit=<?php echo("" . $result2['Montant']); ?>&remise_produit=<?php echo("" . $result2['Remise']); ?>"><img
                                            src="design/pics/modifier.png" width="16" height="16" alt="Modifier"
                                            longdesc="mofifier cet ligne de commande"/></a>
                                <?php
                                echo("  ");

                                ?>
                                <hr/>
                                <a onclick="if(confirm('Etes vous sûr de vouloir supprimer cet Ligne ?')) document.location='delete-article.php?id_bl=<?php echo("" . $id_bl); ?>&id_detail=<?php echo("" . $result2['id_detail']); ?>';"
                                   href="#"><img src="design/pics/delete.png" width="16" height="16"
                                                 alt="Supprimer cet ligne"/></a>

                                <?php

                                }
                                ?></td>
                        </tr>
                        <?php
                        }
                        }
                        $i = 0;
                        while ($i++ < 1)
                        {
                        ?>


                        </tbody> <?php

                        }

                        ?>

                    </table>

                </div>
            </center>

            <div id="confirmer_bl"></div>

            </center>

            <?php
        } else
            header("Location:../login.php");

        ?>





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