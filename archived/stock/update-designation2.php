<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="../assets/images/favicon.ico">

    <title>Gestion Commerical | </title>

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



        <h2></h2>

        <br/>



        <?php
        // DIE (print_r($_GET));
        include '../global.php';
       // session_start();
        $user;
        // die(print_r($_GET));

        $qtt= "";
        if (isset($_GET['qtt']))
        {
            $qtt= $_GET['qtt'];

        }



        $desi="";
        $user= $_SESSION["username"];
        $code_bar;


        $id_article;
        if( isset($_GET['id_article']))
            $id_article = $_GET['id_article'];

        $emplacement;
        if( isset($_GET['emplacement']))
            $emplacement = $_GET['emplacement'];



        $dernier_prix= "";
        if (isset($_GET['dernier_prix']))
        {
            $dernier_prix= $_GET['dernier_prix'];

        }

        $id_fachat= "";
        if (isset($_GET['id_fachat']))
        {
            $id_fachat= $_GET['id_fachat'];

        }

        $prix_achat= "";
        if (isset($_GET['prix_achat']))
        {
            $prix_achat= $_GET['prix_achat'];

        }

        $prix_vente= "";
        if (isset($_GET['prix_vente']))
        {
            $prix_vente= $_GET['prix_vente'];

        }

        if( isset($_GET['reference']) )
        {
            $reference = $_GET['reference'];

            if(   isset($_GET['designation']))
                $designation = $_GET['designation'];





            if( isset($_GET['code_bare']))
                $code_bar= $_GET['code_bare'];


            $ref_fournisseur = $_GET['ref_fournisseur'];







            if( isset($_GET['id_article']))
            {
                $request = mysqli_query($link,"select * from articles where id_article ='".$id_article."'");
                $num = mysqli_num_rows ($request);


                if($num)
                {






                    $req = mysqli_query($link,"select * from articles where id_article ='".$id_article."'")or die(mysqli_error($link));
                    $numm = mysqli_num_rows($req);
                    $Qtt_comptable=0;
                    $quant_en_Stock = 0;
                    if($numm)
                    {
                        while($roww = mysqli_fetch_assoc($req))
                        {

                        }

                    }



                    if( isset($_GET['id_article']))

                        $request = mysqli_query($link,"Update articles set reference = '".$reference."' , designation = '$designation' ,  emplacement = '$emplacement' , 
  code_bare = '$code_bar',   ref_fournisseur = '$ref_fournisseur' WHERE id_article = '".$id_article."'" ) or die( mysqli_error($link) );

                    $request_user=mysqli_query($link,"select id_user from users where user = '".$user."'  ")or die(mysqli_error($link));
                    while($row=mysqli_fetch_array($request_user))
                    {
                        $row_id=$row['id_user'];
                    }



//////////////////////////////////////////////////////////////:



                    if($request)
//	header("Location:../index.php");
                        echo("Modification effectuée avec succès") ;
                    else
                        echo("Erreur") ;
                }
            }
            else
            {



                $request_user=mysqli_query($link,"select * from users where user = '".$user."'  ")or die(mysqli_error($link));
                while($row=mysqli_fetch_array($request_user))
                {
                    $row_id=$row['id_user'];
                }
                $request = mysqli_query($link,"INSERT INTO articles (`reference`, `designation`, `ref_fournisseur`,emplacement,code_bare ) VALUES ( '$reference','$designation' 
 ,  '$ref_fournisseur' ,  '$emplacement'  ,'$code_bar')" ) or die( mysqli_error($link) );
// $sql = mysqli_query($link,"INSERT INTO trace_stock ( date, id_user, time, reference, Qtt) VALUES ( CURDATE(), '$row_id', CURTIME(), '$reference', '$Qtt');");





                if($request)
//	header("Location:../index.php");
                {
                    if (isset($_GET['id_fachat']))
                    {
                        $lien = "../facture_achat/search2-fa.php?id_fachat=$id_fachat&reference=".$reference."&code_bare=".$code_bar."&qtt=".$qtt."&dernier_prix=".$dernier_prix."&prix_achat=".

                            $prix_achat."&prix_vente=".$prix_vente ;
                        header("Location:$lien");
                        // die ("that ".$lien);
                    }
                    else
//	echo("nouvel article Ajouté avec succès") ;
                    {

                        $sql = mysqli_query($link,"INSERT INTO `dap2`.`facture_achat` ( `date`, `ref_fournisseur`) VALUES ( CURDATE(),   '$ref_fournisseur' );")or die (mysqli_error($link));


                        $id_fachat=mysqli_insert_id();
                        $link="?id_fachat=".$id_fachat."&reference=".$reference;
                        header("Location: ../facture_achat/facture_achat.php".$link);
                    }
                }
            }

            ?>

            </form>
            <?php
        }}

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