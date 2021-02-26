<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="../assets/images/favicon.ico">

    <title>Neon | Data Tables</title>

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
?>

<div class="page-container" id="page" >
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
                    <a href="coffre.php">
                        <i class="entypo-lock"></i>
                        <span class="title">Coffre</span>
                    </a>

                </li>

                <li class="active opened active has-sub">
                    <a href="charges.php">
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





        <ol class="breadcrumb bc-3">
            <li>
                <a href="../index.php"><i class="fa-home"></i>Acceuil</a>
            </li>
            <li>

                <a href="charges.php">Charges d'Entreprise</a>
            </li>

        </ol>

        <h2>Remplir Vos charges quotidiennes</h2>

        <br/>



        <span >
  Charges d'Aujoud'hui :
</span>
        <a href="ajouter_charges.php"><img src="../design/pics/addd.png" width="32" height="32" alt="Modifier" longdesc="modifier" /></a>
        <br>
        <a href="charges.php" style = "text-decoration:#7fae00">Afficher  Historique</a>

        </center>
        <hr />

        <br>
        <?php


        ob_start();
        $error = "Problem connecting";
        $link = mysqli_connect('localhost','root','') or die($error);
        mysqli_select_db($link,'dap2');
        //session_start();
        if(isset($_SESSION['username']))
        {

        $req_part1="
SELECT * 
FROM  `charges` ";
        if (isset($_GET["today"]))
            $req_part1= $req_part1.
                "WHERE DATE = CURDATE( ) ";

        $req_part1= $req_part1.
            "ORDER BY  `charges`.`id` DESC 

 ";



        $requete=mysqli_query($link,$req_part1)OR DIE(mysqli_error($link));

        if (mysqli_num_rows($requete))
        {

            ?>


            <table border ='1' width = '65%' align = 'Center' class="table table-dark text-white " >
                <TR>
                    <th align='center' style='  padding: 10px ;' >Date </th>
                    <th align='center' style='  padding: 10px;' >Description de la Charge </th>
                    <th align='center' style='  padding: 10px;' >Montant </th>
                    <th>Supprimer</th>
                </tr>
                <?php
                while($row=mysqli_fetch_array($requete))
                {
                    $montant = $row['montant'];
                    $id = $row['id'];
                    $date = $row['date'];
                    $description = $row['description'];

                    ?>

                    <TR>

                        <td style = "text-align:Center ;padding: 10px; ">

                            <?php echo $date;?>


                        </td>



                        <td style = "text-align:Center ; ">

                            <?php echo $description;?>

                        </td>


                        <td style = "text-align:Center ; ">
                            <?php echo $montant;?>
                        </td>
                        <td style = "text-align:Center ; "><a href  = "delete_charge.php?id=<?php echo $id;?>" class="btn btn-danger">
                                <i class="entypo-cancel"></i>Supprimer
                                </a>
                        </td>

                    </TR>


                    <?php

                }
                ?>
            </table>

            <?php

        }
        ?>
    </div>

    <?php



    }
    else

       // header("Location:../login.php");

    ?>


    <!-- end .container -->
    <?php
    include("modele/footer.php");
    ?>









    </div>


























    <!-- Footer -->





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
<link rel="stylesheet" type="text/css" href="../assets/js/print.css" media="print" />
<!-- Bottom scripts (common) -->
<script src="../assets/js/gsap/TweenMax.min.js"></script>script type="text/javascript"
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
<script src="../assets/js/printThis.js"></script>

<!-- Demo Settings -->
<script src="../assets/js/neon-demo.js"></script>

</body>
</html>