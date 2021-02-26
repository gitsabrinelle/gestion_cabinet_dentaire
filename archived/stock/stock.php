<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="../assets/images/favicon.ico">

    <title>Gestion Commercial | Stock</title>

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
//include("../global.php");

session_start();
if(isset($_SESSION['username']))
{
////////////////////////////////////////////////////////////

function total_dette_client($type, $link)
{
    $result = 0;

    $sql = "
SELECT COALESCE( SUM( dette ) , 0 ) AS total_dette_client
FROM (

SELECT list.ref_client, (
list.total_bl + list.premiere_dette + list.total_remise - list.total_versement
) AS dette
FROM (

SELECT clients.ref_client, clients.Societe, clients.dette AS premiere_dette, (

SELECT COALESCE( SUM( bl.montant_remise ) , 0 ) AS rem
FROM bl
WHERE bl.ref_client = clients.ref_client
) AS total_remise, (

SELECT COALESCE( SUM( bl.montant_ht ) , 0 ) AS total_bl
FROM bl
WHERE bl.ref_client = clients.ref_client
) AS total_bl, (

SELECT COALESCE( SUM( reglement.montant ) , 0 ) AS total_versement
FROM bl, reglement
WHERE bl.id_bl = reglement.id_bl
AND bl.ref_client = clients.ref_client
) AS total_versement
FROM clients
) AS list

";
    if ($type === "credit")
        $sql = $sql . "
having dette <0";

    else
        if ($type === "dette")
            $sql = $sql . "
having dette > 0";

        else
            if ($type === "0")
                $sql = $sql . "
having dette = 0";

            else
                if ($type === "tous")
                    $sql = $sql . "
 ";


    $sql = $sql . "
) AS tab

 
 
";


    $req = mysqli_query($link, $sql) or die (mysqli_error($link));

    if (mysqli_num_rows($req)) {
        while ($row_req = mysqli_fetch_array($req)) {
            $result = $row_req["total_dette_client"];
        }
    }
    return $result;
}

////////////////////////////////////////////////////////////


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
                <li class="active opened active has-sub">
                    <a href="../index.php">
                        <i class="entypo-gauge"></i>
                        <span class="title">Acceuil</span>
                    </a>

                </li>
                <li class="has-sub">
                    <a href="">
                        <i class="entypo-layout"></i>
                        <span class="title">Client</span>
                    </a>
                    <ul>
                        <li>
                            <a href="../clients/liste_client.php">
                                <span class="title">Liste des Clients</span>
                            </a>
                        </li>


                        <li>
                            <a href="bl/tableau_dette.php">
                                <span class="title">Dettes</span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="has-sub">
                    <a href="">
                        <i class="entypo-newspaper"></i>
                        <span class="title">Ventes</span>
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <span class="title">Bon de route</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Commande Client</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Facture Client</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Bon de livraison</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Journal des Commandes</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <span class="title">Journal des Ventes</span>
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
                        <i class="entypo-mail"></i>
                        <span class="title">Achats</span>

                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <i class="entypo-inbox"></i>
                                <span class="title">Bon de Commande</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="entypo-pencil"></i>
                                <span class="title">Bon de Réception</span>
                            </a>
                        </li>
                        <li>
                            <a href="../facture_achat/FactureAchat.php">
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
                        <i class="entypo-doc-text"></i>
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
                    <a href="">
                        <i class="entypo-window"></i>
                        <span class="title">Articles</span>
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <span class="title">Catégorie</span>
                            </a>
                        </li>
                        <li>
                            <a href="../articles/marque.php">
                                <span class="title">Marque</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Emplacement</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Attributs</span>
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
                            <a href="">
                                <span class="title">Stock par dépot</span>
                                <span class="badge badge-success">3</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <span class="title">Bon d'entree</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Bon de sortie</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Bon de renvoi</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Inventaire</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Mouvement des stocks</span>
                            </a>
                        </li>

                        </li>


                    </ul>
                </li>


            </ul>


        </div>

    </div>

    <br class="main-content">


        <hr/>

        <ol class="breadcrumb bc-3">
            <li>
                <a href="../index.php"><i class="fa-home"></i>Acceuil</a>
            </li>
            <li>

                <a href="">Stock</a>
            </li>
            <li class="active">

                <strong>Stock par depot</strong>
            </li>
        </ol>


        <br/>


        <br/>


        <?php

        include("../global.php");

        function delet_article($link, $id_article)
        {
            $result = false;
            $query = mysqli_query($link, "
	 select(SELECT COALESCE(SUM(qtt),0) AS quant_total
FROM  detail_fachat 
WHERE  id_article = '$id_article')as article_achete
,  (SELECT COALESCE(SUM(quantite),0) AS quant_vendu
FROM  detail_bl 
WHERE  id_article = '$id_article'
)as article_vendu  


 
") or die (mysqli_error($link));


            if (mysqli_num_rows($query)) {
                $row = mysqli_fetch_array($query);
                if ($row ["article_vendu"] === "0" && $row ["article_achete"] === "0")
                    $result = true;


            }


            return $result;
        }


        $id_art;
        $ref_fournisseur = "";

        $re = "select * from articles   ";

        if (isset($_GET["ref_fournisseur"])) {
            $ref_fournisseur = $_GET["ref_fournisseur"];
            $re = $re . "  where ref_fournisseur= '" . $ref_fournisseur . "' ";
        }


        //qtt_comptable


        // if (isset($_GET['ref']))
        // {	if ($_GET['ref']==1)
        // $re= $re." ORDER BY reference";
        // if ($_GET['ref']==2)
        // $re= $re." ORDER BY reference DESC";
        // }


        // if (isset($_GET['qtt']))
        // {	if ($_GET['qtt']==0)
        // $re= $re." ORDER BY designation";
        // if ($_GET['des']==2)
        // $re= $re." ORDER BY designation DESC";
        // }


        //Prix_HT


        //


        $req = mysqli_query($link, $re);
        ?>
    </br>

            <a href="stock.php?qtt=0" class="btn btn-danger"><i class="entypo-cancel"></i> Voir les quantitées null</a>
        <br/>
    <br/>
    <br/>
        </center>
        <?php
        // if (isset($_GET["ref"])||isset($_GET["des"]) )
        // {
        ?>

        <?php
        // if($_GET["ref"]=="1")
        // {
        ?>

        <?php
        // }else
        // {
        ?>

        <?php
        // }
        // }

        // if (isset($_GET["des"]))
        // {

        ?>
        <?php
        // if ($_GET["des"]=="1")
        // {
        ?>
        <?php
        // }else
        // {
        ?>
        <?php
        // }
        // }
        // if (isset($_GET["fourn"]))
        // {
        ?>
        <?php
        // }
        // else
        // {
        ?>
        <?php
        // }
        // }
        // }
        ?>

        <TABLE class="table table-hover">
            <tr>


                <th >

                    <a  href="stock.php?ref=
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


                    <a  href="stock.php?des=
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

                    <a  href="stock.php?fourn=
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
                <th>Supprimer</th>

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


                $quant_en_Stock = 0;
                $quant_vendu = 0;

                $quantite_total = 0;

                $requetqt = mysqli_query($link, "SELECT COALESCE(SUM(quantite),0) AS quant_vendu
FROM  detail_bl 
WHERE  id_article = '$id_art'") or die (mysqli_error($link));


                $requetqtv = mysqli_query($link, "SELECT COALESCE(SUM(qtt),0) AS quant_total
FROM  detail_fachat 
WHERE  id_article = '$id_art'") or die (mysqli_error($link));

                $row2v = mysqli_fetch_array($requetqtv);


                $row2 = mysqli_fetch_array($requetqt);

                $quantite_total = $row2v['quant_total'];
                $quant_vendu = $row2['quant_vendu'];
                $quant_en_Stock = $quantite_total - $quant_vendu;
                //
                if ((($quantite_total > 0 && isset($_GET['qtt']) && $_GET['qtt'] != 0)) || ((!isset($_GET['qtt']))) || (($quantite_total == 0 && isset($_GET['qtt']) && $_GET['qtt'] == 0))) {

                    // if (isset($_GET['qtt']))
                    // if ($_GET['qtt']==0)

                    ?>
                    <tr>


                        <td height="30" align="center"><a class="linkcolor"
                                                          href="../bl/acheteurs_article_bl.php?id_article=<?php

                                                          echo $id_art ?>">
                                <?php echo $ref2 ?>
                            </a>
                        </td>
                        <td height="40" align="center">
                            <a style="color:#33FFFF"
                               href="../stock/update-designation.php?search=<?php echo("$ref2"); ?>">    <?php echo $des; ?>
                                <img src="design/pics/modifier.png" width="16" height="16" longdesc=""/>
                            </a>
                        </td>


                        <td height="30" align="center">
                            <?php
                            echo(" " . $quantite_total);
                            ?>
                        </td>
                        <td height="30" align="center">
                            <?php echo("" . $quant_vendu); ?>
                        </td>
                        <td align="center"><?php echo("" . $quant_en_Stock); ?>
                        </td>

                        <td height="30" align="center">
                            <?php echo $fournisseur ?>
                        </td>
                        <td align="center">
                            <?php
                            if (delet_article($link, $id_art)) {
                                ?><a class="btn btn-danger
                                onclick="if(confirm('Etes vous sûr de vouloir supprimer cet article ?')) document.location='delete_article.php?id_article=<?php echo("" . $id_art); ?>';"
                                href="#"><i class="entypo-cancel"></i>Supprimer</a>
                                <?php
                            } ?>

                        </td>


                    </tr>
                    <?php

                }
            }

            ?>
        </TABLE>

        <?php
        }
        ?>







    </div>



        <hr /><br />

            <br />


        <hr />


























<br />




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



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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