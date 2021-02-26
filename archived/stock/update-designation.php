<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="../assets/images/favicon.ico">

    <title>Gestion Commerical| </title>

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
                <li class="active opened active has-sub">
                    <a href="index.php">
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
                            <a href="../bl/tableau_dette.php">
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
                            <a href="facture_achat/FactureAchat.php">
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
                            <a href="facture_achat/journalAchat.php">
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
                            <a href="fournisseurs/liste_fournisseur.php">
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

    <div class="main-content">


        <hr/>

        <ol class="breadcrumb bc-3">
            <li>
                <a href="../index.php"><i class="fa-home"></i>Acceuil</a>
            </li>
            <li>

                <a href="liste_founrnisseur.html">Fournisseurs</a>
            </li>
            <li class="active">

                <strong>modifier Article</strong>
            </li>
        </ol>

        <h2></h2>

        <br/>

        <?php
        ob_start();
        $resultat_image = 0;
       // session_start();
        $error = "Problem connecting";
        $link = mysqli_connect('localhost', 'root', '') or die($error);
        mysqli_select_db($link, 'dap2') or die($error);


        ?>

        <?php
        $id_article;
        $ref = 0;
        $desi = 0;
        $user = "";
        if (isset($_SESSION["username"]))
            $user = $_SESSION["username"];
        $ref_fournisseur = "";
        if (isset($_GET["ref_fournisseur"]) && strlen($_GET["ref_fournisseur"]))
            $ref_fournisseur = $_GET["ref_fournisseur"];
        $qtt = "";
        if (isset($_GET['qtt'])) {
            $qtt = $_GET['qtt'];

        }

        $p = '';
        if (isset($_GET['search'])) {
            if (isset($_GET['search']))
                $p = $_GET['search'];
            if (isset($_GET['search']))
                $p = $_GET['search'];
            $request = mysqli_query($link, "select * from articles where reference = '" . $p . "' ");
            $ref = mysqli_num_rows($request);
            $desi = 0;
            if ($ref == 0) {
                $request = mysqli_query($link, "select * from articles where code_bare = '" . $p . "' ");
                $desi = mysqli_num_rows($request);
                if ($desi != 0)
                    ;
                if ($request)
                    ;

            }
            if ($desi != 0 || $ref != 0) {
                echo("Article existant deja !! ( Mise a jour)");

            }
            if ($desi == 0 && $ref == 0) {
                echo("Nouvel Article!! ( Creation )");

            }
        }
        $request = mysqli_query($link, "select * from articles where reference = '" . $p . "' ");
        $code_bare = mysqli_query($link, "select * from articles where code_bare = '" . $p . "' ");


        $dernier_prix = "";
        if (isset($_GET['dernier_prix'])) {
            $dernier_prix = $_GET['dernier_prix'];

        }

        $id_fachat = "";
        if (isset($_GET['id_fachat'])) {
            $id_fachat = $_GET['id_fachat'];

        }

        $prix_achat = "";
        if (isset($_GET['prix_achat'])) {
            $prix_achat = $_GET['prix_achat'];

        }

        $prix_vente = "";
        if (isset($_GET['prix_vente'])) {
            $prix_vente = $_GET['prix_vente'];

        }


        if (isset($_GET['designation']) && isset($_GET['ref_fournisseur'])) {

            if (isset($_GET['reference']))
                $reference = $_GET['reference'];

            $designation = $_GET['designation'];
            $ref_fournisseur = $_GET['ref_fournisseur'];

            if (strlen($_GET['code_bare']) == 13 || strlen($_GET['code_bare']) == 12)
                $code_bar = $_GET['code_bare'];

        }
        $request = mysqli_query($link, "select * from articles where reference = '" . $p . "' OR code_bare = '" . $p . "'");
        $num = mysqli_num_rows($request);
        if ($num)
        {
            while ($row = mysqli_fetch_array($request)) {
                $id_article = $row["id_article"];
                ?>


                <form method="GET" action="update-designation2.php">

                    <div align="left">
                        <a href="change_logo.php?id_article=<?php echo $id_article; ?>&search=<?php
                        if (isset($_GET['search']))
                            echo $_GET['search'];
                        ?>"><img src="<?php //<img src="13016741_224619864560323_1526104042_o.jpg" width="350" height="300" alt=""/>

                            $logo = "";

                            $req_image = mysqli_query($link, "select * from   `articles_images` 
 where id_article = $id_article ") or die (mysqli_error($link));
                            $resultat_image = mysqli_num_rows($req_image);
                            if (mysqli_num_rows($req_image)) {

                                while ($row_image = mysqli_fetch_array($req_image)) {


                                    $logo = $row_image["image_nom"];


                                }


                                echo("images/" . $logo);
                            } else {
                                ?>
  images/photo.jpg<?php
                            }


                            ?>" alt="Veuillez inserer une image SVP" width="288" height="290" align="middle"/></a>
                        <?
                        if ($resultat_image)
                            echo "Veuillez inserer une image SVP !!";
                        ?>
                        <br/>

                        <table border="2" align="right" class="table table-bordered table-striped datatable">


                            <tr class="tr-gauche">
                                <td class="td-gauche">
                                    Reference
                                </td>

                                <td class="td-client">

                                    <input name="reference" type="text" class="input-table" id="reference"
                                           value="<?php echo($row['reference']); ?>"/>


                                    <input name="id_article" type="hidden" class="input-table" id="id_article"
                                           value="<?php echo($row['id_article']); ?>"/>


                                </td>
                                <td class="td-point">*</td>
                            </tr>


                            <tr class="tr-gauche">
                                <td class="td-gauche">
                                    Code Barre
                                </td>

                                <td class="td-client">

                                    <input name="code_bare" type="text" class="input-table" id="code_bare"
                                           autocomplete="off" value="<?php

                                    echo($row['code_bare']); ?>"/>


                                </td>
                                <td class="td-point">*</td>
                            </tr>


                            <tr class="tr-gauche">
                                <td class="td-gauche">
                                    Designation
                                </td>

                                <td class="td-client"><input name="designation" type="text" autofocus="autofocus"
                                                             class="input-table"
                                                             value="<?php echo($row['designation']); ?>"/>


                                </td>
                                <td class="td-point">*</td>
                            </tr>


                            <tr>
                                <td nowrap="nowrap" class="td-gauche">
                                    Emplacement
                                </td>

                                <td class="td-client">


                                    <input name="emplacement" type="text" class="input-table" value="<?php

                                    echo($row['emplacement']);
                                    ?>"/>

                                </td>
                                <td class="td-point">*</td>
                            </tr>


                            <tr>
                                <td class="td-gauche">
                                    Fournisseur
                                </td>

                                <td class="td-client">
                                    <center>

                                        <?php
                                        $req = mysqli_query($link, "select * from fournisseurs ");
                                        if (mysqli_num_rows($req))

                                        ?>
                                        <select name="ref_fournisseur" id="ref_fournisseur">
                                            <?php
                                            $s = 0;

                                            while ($resultat = mysqli_fetch_array($req)) {
                                                ?>
                                                <option value="<?php echo($resultat['ref_fournisseur']); ?>" <?php
                                                if ($ref_fournisseur === $resultat["ref_fournisseur"] || (strcmp($resultat["ref_fournisseur"], $row["ref_fournisseur"]) == 0))
                                                {

                                                ?>selected="selected"<?php
                                                }
                                                ?>> <?php $s++;//echo($resultat['ref_fournisseur']);
                                                    echo("" . $resultat['societe']);
                                                    ?></option>
                                            <?php } ?>
                                        </select>

                                    </center>
                                </td>
                                <td class="td-point">*</td>
                            </tr>

                        </table>
                    </div>
                    <input name="register" type="submit"
                           style="margin:20px; position:absolute; padding-left:20px; padding-bottom:10px; padding-top:10px; padding-right:20px; right: 130px; bottom: 10px;"
                           value="Enregistrer"/>
                </form>
                <span style="margin-left:150px;">* champs obligatoires</span>
                <?php
            }
        }
        else
        {
        ?>

        <div>

            <form method="GET" action="update-designation2.php">
                <table border="2" align="CENTER">


                    <tr class="tr-gauche">
                        <td class="td-gauche">
                            Reference
                        </td>

                        <td class="td-client">

                            <input name="reference" type="text" class="input-table" id="reference" value="<?php
                            if (isset($_GET['search'])) {
                                if (isset($_GET['search']))
                                    $pp = $_GET['search'];
                                if ((strlen($pp) != 13) && (strlen($pp) != 12))
//{
                                    //die($pp);
                                {

                                    echo("" . $pp);
                                    $code_bar = $pp;
                                }
                            }
                            //}
                            ?>"/>


                        </td>
                        <td class="td-point">*</td>
                    </tr>


                    <tr class="tr-gauche">
                        <td class="td-gauche">
                            Code Barre
                        </td>

                        <td class="td-client">

                            <input name="code_bare" type="text" class="input-table" id="code_bare" autocomplete="off"
                                   value="
<?php
                                   if (isset($_GET['search'])) {

                                       if (isset($_GET['search']))
                                           $pp = $_GET['search'];
                                       if ((strlen($pp) == 13) || (strlen($pp) == 12))
//{
                                           //die($pp);


                                           echo("" . $pp);
                                   }
                                   //}
                                   ?>

"/>


                        </td>
                        <td class="td-point">*</td>
                    </tr>


                    <tr class="tr-gauche">
                        <td class="td-gauche">
                            Designation
                        </td>

                        <td class="td-client"><input name="designation" type="text" autofocus="autofocus"
                                                     class="input-table" value=""/>


                        </td>
                        <td class="td-point">*</td>
                    </tr>


                    <tr>
                        <td nowrap="nowrap" class="td-gauche">
                            Emplacement
                        </td>

                        <td class="td-client">


                            <input name="emplacement" type="text" class="input-table" value=""/>

                        </td>
                        <td class="td-point">*</td>
                    </tr>


                    <?php
                    if (isset($_GET['id_fachat'])) {

                        ?>

                        <input name="qtt" type="hidden" class="input-table" value="<?php echo "$qtt"; ?>"
                               readonly="readonly"/>
                        <input name="id_fachat" type="hidden" class="input-table" value="<?php echo "$id_fachat"; ?>"
                               readonly="readonly"/>
                        <input name="prix_achat" type="hidden" class="input-table" value="<?php echo "$prix_achat"; ?>"
                               readonly="readonly"/>
                        <input name="prix_vente" type="hidden" class="input-table" value="<?php echo "$prix_vente"; ?>"
                               readonly="readonly"/>
                        <input name="dernier_prix" type="hidden" class="input-table"
                               value="<?php echo "$dernier_prix"; ?>" readonly="readonly"/>
                        <input name="indirect_insert" type="hidden" class="input-table" value="indirect_insert"
                               readonly="readonly"/>

                        <?php

                    }

                    ?>


                    <tr>
                        <td class="td-gauche">
                            Fournisseur
                        </td>

                        <td class="td-client">
                            <center>

                                <?php
                                $req = mysqli_query($link, "select * from fournisseurs "); ?>
                                <select name="ref_fournisseur" id="ref_fournisseur" class="select2">
                                    <?php
                                    $s = 1;
                                    while ($resultat = mysqli_fetch_array($req)) {
                                        ?>
                                        <option value="<?php echo($resultat['ref_fournisseur']); ?>"
                                                <?php if ($ref_fournisseur === $resultat['ref_fournisseur']){ ?>selected="selected"<?php }
                                        $s++; //echo($resultat['ref_fournisseur']);
                                        ?>><?php
                                            echo($resultat['Societe']);
                                            ?></option>
                                    <?php } ?>
                                </select>

                            </center>
                        </td>
                        <td class="td-point">*</td>
                    </tr>

                </table>
                <input class="btn btn-green" name="register" type="submit" value="Enregistrer" />
            </form>
            <span style="margin-left:150px;">* champs obligatoires</span>
            <?php
            }
            }
            ?>





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