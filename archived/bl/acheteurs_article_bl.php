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



        <h2>Historique des achats</h2>

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

        <form action="../fournisseurs/update-fournisseur.php" method="GET">
            <table border="2" align="center" class="table table-bordered table-striped datatable">


                <tr class="tr-gauche">
                    <td class="td-gauche">
                        Societe
                    </td>

                    <td class="td-client">
                        <input name="ref_fournisseur" type="hidden" value="<?php echo("" . $ref_fournisseur); ?>"
                        />
                        <input autocomplete="off" name="societe" type="text" class="input-table" value="
<?php

                        echo($row['Societe']);
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
                        // $dette = 0;
                        //
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
                    <td class="td-gauche">Fax
                    </td>

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
    if (isset($_SESSION['username'])) {
        include '../global.php';
        $total_qtt = 0;
        $total_total_ht = 0;
        $total_total_rev = 0;
        $id_fachat;
        if (isset($_GET['id_article'])) {
            $id_article = $_GET['id_article'];
            $i = 0;
            ?>

            <hr/>
            <h1 style=" text-align:center ; text-decoration:underline">Historique Achats:</h1>
            <br/>
            <table width="65%" border="2" align="center">
            <?php
            $total_qtt = 0;
            $total_total_ht = 0;
            $string_query = "SELECT
 `articles`.`reference` , 
 `detail_fachat`.`qtt` ,
 `detail_fachat`.`id_detachat`,
 `detail_fachat`.`prix_achat` ,
 `detail_fachat`.`prix_vente` ,
 `facture_achat`.`ref_fournisseur` ,
 `facture_achat`.`date` , 
 `fournisseurs`.`Societe`,
  facture_achat.`id_fachat`
 
FROM detail_fachat, facture_achat,  fournisseurs, `articles`
WHERE fournisseurs.`ref_fournisseur` = facture_achat.`ref_fournisseur`
AND detail_fachat.`id_fachat` = facture_achat.`id_fachat`
AND `articles`.`id_article` = detail_fachat.`id_article` and  articles.id_article = '" . $id_article . "' ORDER BY facture_achat.date";
// die ($string_query);
            $req_historique_importation = mysqli_query($link, $string_query) or die(mysqli_error($link));
            if (mysqli_num_rows($req_historique_importation)) {
                ?>
                <tr>
                    <th>Reference</th>
                    <th>Fournisseur
                    </th>
                    <th>Date Achat
                    </th>
                    <th>Quantite
                    </th>
                    <th>prix d'achat uni</th>
                    <th>prix d'achat Total</th>
                    <th>prix de vente uni</th>

                    <th>Total vente
                    </th>

                </tr>
                <?php
                $min_prix = 0;
                $max_prix = 0;

                while ($row_historique_importation = mysqli_fetch_array($req_historique_importation)) {
                    $id_fachat = $row_historique_importation["id_fachat"];
                    $reference = $row_historique_importation["reference"];
                    $quantite = $row_historique_importation["qtt"];


                    $prix_achat = $row_historique_importation["prix_achat"];
                    $prix_vente = $row_historique_importation["prix_vente"];


                    if ($min_prix > $prix_achat)
                        $min_prix = 0;

                    if ($max_prix == 0)
                        $max_prix = $prix_achat;

                    if ($min_prix == 0)
                        $min_prix = $prix_achat;

                    if ($max_prix < $prix_achat)
                        $max_prix = $prix_achat;


                    $date = $row_historique_importation["date"];
                    $societe = $row_historique_importation["Societe"];
                    $ref_fournisseur = $row_historique_importation["ref_fournisseur"];

                    ?>


                    <tr>
                        <td>
                            <a href="../facture_achat/facture_achat.php?id_fachat=<?php echo $id_fachat ?>#<?php echo $row_historique_importation["id_detachat"]; ?>"><span
                                        style="color : orange;">
<?php
echo($reference);
?><span></a></td>
                        <td><?php
                            echo($societe);
                            ?></td>
                        <td><?php echo("" . date("d-m-Y", strtotime($date)));
                            ?></td>
                        <td><?php
                            echo($quantite);
                            ?></td>

                        <td><?php
                            echo($prix_achat);
                            ?></td>
                        <td><?php
                            echo($quantite * ($prix_achat));
                            ?></td>
                        <td><?php
                            echo($prix_vente);
                            ?></td>


                        <td><?php

                            echo($prix_vente * $quantite);
                            $total_qtt = $total_qtt + $quantite;
                            $total_total_ht = $total_total_ht + $prix_vente * $quantite;
                            $total_total_rev = $total_total_rev + $prix_achat * $quantite;

                            ?></td>


                    </tr>
                    <?php
                }
                ?>
                <tr>
                    <th>&nbsp;</th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>

                    <td><?php

                        echo($total_qtt); ?></td>
                    <td>&nbsp;</td>
                    <td><?php echo($total_total_rev); ?></td>
                    <td>&nbsp;</td>
                    <td><?php echo($total_total_ht); ?></td>

                </tr>

                <?php

                ?>
                </table>


                <hr/>
                <h1 style=" text-align:center ; text-decoration:underline">Historique Ventes détaillées:</h1>
                <?php
                $requette_mouvement_vente = mysqli_query($link, "
	   
	   SELECT
	  clients.Societe,
	  detail_bl.quantite,
	  detail_bl.id_article,
	  articles.reference,
	  bl.date,
	  bl.id_bl,
	  detail_bl.id_detail,
	  detail_bl.prix,
	  detail_bl.Remise,
	  detail_bl.Montant
	  
	    FROM `detail_bl` , bl ,clients ,articles
where
bl.id_bl = detail_bl.id_bl   and
articles.id_article = detail_bl.id_article   and
clients.ref_client = bl.ref_client and 
detail_bl.id_article = '$id_article'

	   ") or die (mysqli_error($link));
                if (mysqli_num_rows($requette_mouvement_vente)) {
                    ?>
                    <table width="80%" border="2" align="center">
                        <tbody>
                        <tr>
                            <th scope="col">Client :</th>
                            <th scope="col">Qtt :</th>
                            <th scope="col">Date :</th>
                            <th scope="col">Prix :</th>
                            <th scope="col">Total :</th>
                        </tr>

                        <?php
                        $totals = 0;
                        $qtt_total = 0;
                        $client = "";
                        $qtt = "";
                        $date = "";
                        $prix = "";
                        $total = "";

                        while ($row_requette_mouvements = mysqli_fetch_array($requette_mouvement_vente)) {
//$row_requette_mouvements [""];
                            $client = $row_requette_mouvements ["Societe"];
                            $qtt = $row_requette_mouvements ["quantite"];
                            $qtt_total = $qtt_total + $qtt;
                            $date = $row_requette_mouvements ["date"];
                            $prix = $row_requette_mouvements ["prix"] - $row_requette_mouvements ["Remise"];
                            $total = $row_requette_mouvements ["Montant"];
                            $totals = $totals + $total;

                            ?>
                            <tr>
                                <td>
                                    <a href="../bl/bl-vente.php?id_bl=<?php echo $row_requette_mouvements["id_bl"]; ?>#<?php echo $row_requette_mouvements["id_detail"]; ?>"><span
                                                style="color : orange;">
 <?php echo $client; ?></span></a>
                                </td>
                                <td><?php echo $qtt; ?></td>
                                <td><?php echo("" . date("d-m-Y", strtotime($date))); ?></td>
                                <td><?php echo $prix; ?></td>
                                <td><?php echo $total; ?></td>
                            </tr>
                        <?php } ?>

                        <tr>
                            <th>&nbsp;</th>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <th> Total :</th>
                            <td><?php echo $qtt_total; ?></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><?php echo $totals; ?></td>
                        </tr>

                        </tbody>
                    </table>
                <?php } else {
                    ?>
                    <h1 style=" text-align:center">Article jamais Vendu !!</h1>

                <?php }
                ?>

                <hr/>


                <br/>
                <?php
// $req_pre=mysqli_query($link,"SELECT COUNT( * ) AS `Lignes` , `id_article` , `prix_achat` , `prix_vente`
// FROM `detail_fachat`
// WHERE `prix_achat` < $max_prix
// GROUP BY `id_article`
// ORDER BY `detail_fachat`.`prix_achat` DESC
// LIMIT 0 , 1")or die (mysqli_error($link));
// $req_suiv=mysqli_query($link,"SELECT COUNT( * ) AS `Lignes` , `id_article` , `prix_achat` , `prix_vente`
// FROM `detail_fachat`
// WHERE `prix_achat` > $min_prix
// GROUP BY `id_article`
// ORDER BY `detail_fachat`.`prix_achat` ASC
// LIMIT 0 , 1")or die (mysqli_error($link));

// $row_pre= mysqli_fetch_array($req_pre);
// $row_suiv=mysqli_fetch_array($req_suiv);

// $id_article_pre=$row_pre["id_article"];
// $id_article_suiv=$row_suiv["id_article"];
// echo(($total_total_ht));
                ?>

                <hr/>


                <?php

            } else echo "no achat ";
        }
    } else
        header("Location:../login.php");
    }
    ?>


    <?php

    }}
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