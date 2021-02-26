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


include("../global.php");
session_start();
$id_type=0;
$web = 0;



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
                    <a href="affiche_utilisateurs.php">
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

                <a href="utilisateurs/affiche_utilisateurs.php">Liste des utilisateurs</a>
            </li>
            <li>

                <a href="">Ajouter un utilisateur</a>
            </li>

        </ol>

        <h2>Ajouter un nouvel utilisateur</h2>

        <br/>




        <hr />

        <br>





        <?php
        $ref;

        if(isset($_SESSION['username']))
        {


            $req_utilisateur =mysqli_query($link,"select * from users where user  =  '".$_SESSION['username']."'")or die(mysqli_error($link));
            if(!mysqli_num_rows($req_utilisateur))
            {
                ?>
                <br />Acces denied
                <?php
            }
            else
            {

                $type = mysqli_fetch_array($req_utilisateur);
                $type = $type["id_user_type"];
                //$type = $type;
                ?>

                <?php
                if ($type=="2")
                {
                    ?>
                    <p style="text-align: left; font-size: 18px;">Remplir la Fiche du  Nouvel Utilisateur :
                    </p><br />
                    <?php
                }else
                {
                    ?>
                    <p style="text-align: left; font-size: 18px;">Mise à jour de mon compte :
                    </p><br />
                    <?php

                }
                ?>
                <table class="table table-bordered table-striped datatable" >
                    <form action="cree_utilisateur_confirm.php" method="GET">
                        <tr>

                            <th width="57%" align="right" nowrap="nowrap"> Utilisateur </th>




                            <th align="left"><input name="user"  autofocus="autofocus" type="text" id="username" style="text-align:center; font-family: 'Times New Roman', Times, serif; font-size: x-large;" autocomplete="off"  <?php
                                if (isset($_GET['user']))
                                {?>value="<?php
                                echo ($_GET['user']);
                                ?>"  <?php
                                }?> /><?php
                                if (isset($_GET["account"]))
                                {
                                    ?>
                                    <input type="hidden" name="account" value="install" />
                                    <?php


                                }
                                if (isset($_GET['user']))
                                {?>
                                    <input type="hidden" name="id_user" value="<?php
                                    //   echo ($_GET['user']);
                                    $sql = mysqli_query($link,"SELECT * 
FROM  `users`  
WHERE  `users`.`user` =  '".$_GET['user']."' 
 ")or die (mysqli_error($link));

                                    if(mysqli_num_rows ($sql))
                                    {
                                        while ($row = mysqli_fetch_array($sql))
                                        {
                                            echo ( "".$row["id_user"]);
                                            $id_type = $row["id_user_type"];
                                            $web = $row["web"];
                                        }}

                                    ?>"  />
                                    <?php
                                }?>
                            </th>
                            <th width="2%" align="left" style="">&nbsp;</th>
                        </tr>
                        <tr>
                        </tr>
                        <?php
                        if ((isset($_GET['user']) && $_SESSION['username'] === $_GET['user'])||!isset($_GET['user']))
                        {
                            //echo ($_GET['user']);
                            ?>
                            <?php
                            if ((isset($_GET['user']) && $_SESSION['username'] === $_GET['user']))
                            {
                                //echo ($_GET['user']);
                                ?>

                                <tr>
                                    <th align="right" nowrap="nowrap">Ancien Mot de Passe</th>

                                    <th align="left"><input type="password" name="ancien_pass" id="ancien_pass"style="text-align:center; font-family: 'Times New Roman', Times, serif; font-size: x-large;" /></th>
                                    <th width="2%" align="left">&nbsp;</th>
                                </tr>
                                <?php
                            }
                            ?>
                            <tr>
                                <th align="right" nowrap="nowrap">Nouveau Mot de passe</th>

                                <th align="left"><input type="password" name="pass" id="pass"style="text-align:center; font-family: 'Times New Roman', Times, serif; font-size: x-large;" /></th>
                                <th width="2%" align="left">&nbsp;</th>
                            </tr>


                            <tr>
                                <th align="right" nowrap="nowrap">Confirmer le mot de passe</th>

                                <th align="left"><input type="password" name="confirm_pass" id="confirm_pass" style="text-align:center; font-family: 'Times New Roman', Times, serif; font-size: x-large;"/></th>
                                <th width="2%" align="left">&nbsp;</th>
                                <input type="hidden" name="date" value = "<?php echo (date("Y-m-d"));?>" />
                            </tr>
                            <?php
                        }
                        ?>
                        <?php
                        // die("".$type);
                        if ($type=="2")
                        {
                            ?>
                            <tr>
                                <th align="right" nowrap="nowrap">Role</th>

                                <th width="40%" align="left"><select name="id_user_type"  class="custom-select my-1 mr-sm-2" >

                                        <?php

                                        $sql = mysqli_query($link,"SELECT * 
FROM   `users_type` 
");

                                        if(mysqli_num_rows ($sql))
                                        {
                                            while ($row = mysqli_fetch_array($sql))
                                            {
                                                ?>

                                                <option  <?php
                                                         if (!strcmp ($id_type,$row["id_user_type"]))
                                                         {?>selected="selected"<?php }?>
                                                         value="<?php echo "".$row["id_user_type"];?>"><?php
                                                    echo (" ".$row["type"])
                                                    ?></option>


                                                <?php
                                            }

                                        }
                                        ?>


                                    </select>
                                </th>
                                <th width="2%" align="left">&nbsp;</th>
                            </tr>
                            <?php
                        }?>
                        <?php
                        if ($type=="2")
                        {
                            ?>
                            <tr>
                                <th align="right" valign="top" nowrap="nowrap">Acces Web</th>

                                <th width="40%" align="left" valign="top" nowrap="nowrap"><p>
                                        <input name="web" type="checkbox" id="web" <?php
                                        if (!strcmp ($web,"1"))
                                        {?> checked="checked" <?php }?> />
                                    </p>
                                    <p>(Cochez cette case si Oui)</p></th>
                                <th width="2%" align="left">&nbsp;</th>
                            </tr>
                            <?php
                        }?>

                        <tr>
                            <th nowrap="nowrap">&nbsp;</th>
                            <th>&nbsp;</th>
                            <th><input type="submit" value="Enregistrer" style="font-size:14px ;
      width: 100px;
      height: 30px" /></th>
                            <th>&nbsp;</th>
                        </tr>

                    </form>
                </table>
                <?php

//	}
            }

            ?>


            <?php
        }
        else
            header("Location:../login.php");



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