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

        <h2>Remise sur le total</h2>

        <hr />



        <?php
        include("../global.php");



        function total_versement($id_bl,$link)
        {
            $result =0;


            $req_montant= mysqli_query($link,"select  COALESCE(SUM(reglement.montant),0) as total_versement   from bl,reglement where bl.id_bl = reglement.id_bl  and reglement.id_bl = '$id_bl'")or die (mysqli_error($link));
            if (mysqli_num_rows($req_montant))
            {
                $row = mysqli_fetch_array($req_montant);
                $result  = $row["total_versement"];

            }


            //die($result);


            return $result;
        }






        $id_bl;
        $total_bl=0;
        $remise_bl=0;
        $ref_client ;
        $date_bl;
        if (isset($_GET["id_bl"]))
        {
            $id_bl=$_GET['id_bl'];
            $total_versement =0;
            $total_versement =total_versement($id_bl,$link);
// die($total_versement);
            $req_bl= mysqli_query($link,"SELECT COALESCE(SUM(Montant),0) AS total
FROM  detail_bl 
WHERE  id_bl= '".$id_bl."'")or die(mysqli_error($link));
            $req_ref_client = mysqli_query($link,"select clients.ref_client,bl.date from clients,bl where bl.ref_client = clients.ref_client and bl.id_bl = '".$id_bl."'");
            $row_ref_client = mysqli_fetch_array($req_ref_client);
            $ref_client = $row_ref_client["ref_client"];
            $date_bl=$row_ref_client["date"];
            if(mysqli_num_rows($req_bl))
            {
                $row_bl_total=mysqli_fetch_array($req_bl);





                ?>
                <hr />
                <br />
                <table width="70%" border = "2" align="center" class="table table-bordered table-striped datatable">




                    <tr>
                        <th align="left" nowrap="nowrap">

                            Montant totale de la commande :
                        </th>

                        <th align="center">

                        </th>
                        <th align="center" nowrap="nowrap"><?php

                            $total_bl=$row_bl_total["total"];

                            echo(number_format($row_bl_total["total"], 2, ',', ' '));?></th>
                        <td  align="center">&nbsp;</td>
                    </tr>
                    <tr>
                        <th align="left" nowrap="nowrap">

                            Remise  :



                        </th>

                        <td align="center">
                            <?php $req_remise_bl=mysqli_query($link,"select * from bl where id_bl =  '".$id_bl."'")or die(mysqli_error($link));
                            if(mysqli_num_rows($req_remise_bl))
                            {
                                $row_remise_bl=mysqli_fetch_array($req_remise_bl);
                                $remise_bl=$row_remise_bl["montant_remise"];
                                echo (number_format($row_remise_bl["remise"], 2, ',', ' ')." %");
                                ?>

                                <?php
                            }else echo "0 %";
                            ?>


                        </td>
                        <th align="center" nowrap="nowrap"><?php
                            $req_remise_bl=mysqli_query($link,"select * from bl where id_bl =  '".$id_bl."'")or die(mysqli_error($link));
                            if(mysqli_num_rows($req_remise_bl))
                            {
                                $row_remise_bl=mysqli_fetch_array($req_remise_bl); $remise_bl=$row_remise_bl["montant_remise"];
                                echo (number_format($row_remise_bl["montant_remise"], 2, ',', ' ')."");

                            }else echo 0;
                            ?>

                        </th>
                        <td> <a href="confirm-bl.php?id_bl=<?php echo $id_bl;?>"><img src="design/pics/modifier.png" width="16" height="16" /></a></td>
                    </tr>
                    <tr>
                        <th align="left" nowrap="nowrap">
                            Total à régler a réception :

                        </th>


                        <?php



                        ?>
                        <th align="center">   </th>
                        <th align="center" nowrap="nowrap">  <?php echo(number_format($total_bl-$remise_bl, 2, ',', ' '));?>

                        </th>
                        <td align="center">&nbsp;</td>
                    </tr>



                    <?php
                    $num ;
                    $first_dette =0;

                    $req_first_dette= mysqli_query($link,"select * from clients where ref_client = '$ref_client' ");
                    if(mysqli_num_rows($req_first_dette))
                    {
                        while($row_req_first_dette=mysqli_fetch_array($req_first_dette))
                        {
                            $first_dette = $row_req_first_dette["dette"];}
                    }
                    $req_montant_ht= mysqli_query($link,"select COALESCE(SUM(bl.montant_ht),0)  as total_bl   from bl where bl.ref_client = $ref_client and bl.id_bl != $id_bl  and bl.date< '$date_bl' ")or die (mysqli_error($link));

                    $req_remise= mysqli_query($link,"select  COALESCE(SUM(bl.montant_remise),0) as total_remise  from bl where bl.ref_client = '$ref_client' and bl.id_bl != $id_bl  and bl.date< '$date_bl' ")or die (mysqli_error($link));



                    $req_montant= mysqli_query($link,"select  COALESCE(SUM(reglement.montant),0) as total_versement   from bl,reglement where bl.id_bl = reglement.id_bl and bl.ref_client = '$ref_client' and bl.id_bl != $id_bl  and reglement.date< '$date_bl' and bl.date< '$date_bl' ")or die (mysqli_error($link));

                    if(mysqli_num_rows($req_remise)&& mysqli_num_rows($req_montant)&& mysqli_num_rows($req_montant_ht))
                    {
                        $row_req_montant = mysqli_fetch_array($req_montant);
                        $row_req_remise = mysqli_fetch_array($req_remise);
                        $row_req_montant_ht = mysqli_fetch_array($req_montant_ht);

                        $num = $row_req_montant_ht["total_bl"] - $row_req_montant["total_versement"]+$first_dette-$row_req_remise["total_remise"];
                        ?>


                        <?php
//if ($num<0)
//echo "Credit anterieur du au ";
//else
//echo "Dette anterieur du au " ;

                        $req_date = mysqli_query($link,"select date from bl where id_bl != '".$id_bl."' and ref_client = '".$ref_client."' and bl.date< '$date_bl' ORDER BY `bl`.`date` DESC limit 0,1 ");


                        ?>
                        <?php
                        if(mysqli_num_rows($req_date))
                        {
                            $row_req_date = mysqli_fetch_array($req_date);



//echo  date("d-m-Y", strtotime($row_req_date["date"]));
                        }
                        else
                        {
//	echo("////");
                        }
                        ?>

                        <?php
                        //echo (number_format($num, 2, ',', ' '));
                        ?>




                        <?php
                        $total_bl=$num+$total_bl-$remise_bl;

                        /*if ($total_bl<0)
                        echo "Credit Client  du le :";
                        else
                        {*/
                        ?>
                        <?php
//}
                        ?>


                        <?php
                        // $total_bl=$num+$total_bl-$remise_bl;
                        // 	echo (number_format($total_bl, 2, ',', ' '));
                        ?>


                        <?php
                    }
                    ?>
                    <?php

                    $req_versement = mysqli_query($link,"select * from reglement where id_bl =  '".$id_bl."' order by reglement.date ")or die(mysqli_error($link));
                    if(mysqli_num_rows($req_versement))
                    {
                        while($row_versement =mysqli_fetch_array($req_versement))
                        {
                            ?>
                            <tr>
                            <th align="left" nowrap="nowrap">
                                Verser  par <span style="color:#00FF66"> <?php echo $row_versement["type_versement"] ;?> </span> le :</th>

                            <td align="center" nowrap="nowrap">
                                <?php echo date("d-m-Y", strtotime($row_versement["date"]));?>
                            </td>
                            <td align="center" nowrap="nowrap"><?php echo number_format($row_versement["montant"], 2, ',', ' ');?>
                            </td>
                            <td><a href="delete_versement.php?id=<?php echo $row_versement["id"];?>&id_bl=<?php echo $id_bl?>"><img src="design/pics/delete.png" width="16" height="16" /></a></td>
                            </tr><?php
                        } }
                    ?>
                </table>
                <br />
                <hr />
                <br />
                <table border="2" align="center"  class="table table-bordered table-striped datatable">
                    <tr>
                        <th align="center" nowrap="nowrap">

                            <?php
                            //$total_bl = $total_bl-$row_versement["montant"];
                            //if ($total_bl<0)
                            //echo "Credit Client du le "  ;
                            //else
                            //echo "Réste du le " ; ?>

                            Verser le  :</th>
                        <td align="center" nowrap="nowrap">
                            Mode De Paiement :<?php //echo date("d-m-Y", strtotime($row_versement["date"]));
                            ?>
                        </td>



                        <th align="center" nowrap="nowrap">Montant :<?php
                            // $total_bl = $total_bl-$row_versement["montant"];
                            //echo (number_format($total_bl, 2, ',', ' '));?>
                        </th> <td>
                        </td></tr>
                    <form name = "sampleform" action = "confirm_bl_versement.php" method = "GET" > <tr>
                            <th align="center" nowrap="nowrap"><input type = "hidden" name = "id_bl" value="<?php echo $id_bl; ?>" />
                                <input style="text-align:center;" type = "text" name = "date" value = "<?php echo date("d-m-Y");?>"  onclick="showCal('Calendar1')" /></th>
                            <td nowrap="nowrap"><select name = "method">
                                    <option value="Espece" selected="selected">Espece</option>
                                    <option value="CCP">CCP</option>
                                </select></td>
                            <th nowrap="nowrap"><input  style="text-align:center;" type = "text" name = "montant"  value = "<?php
                                echo("".  $total_bl-$num -$total_versement );
                                // / echo("".  $total_versement );
                                ?>" autofocus="autofocus"/></th>
                            <td> <input type = "submit" value  = "Ajouter versement" />
                            </td>
                        </tr> </form>


                </table>







                <?php
            }



        }?>

        <div id = "print">
            <br />
            <hr />
            <a href = "../print/print_bl.php?id_bl=<?php echo  $id_bl;?>">
                Imprimer : <br /> <img src="design/pics/print-button.png" width="209" height="143" alt="Imprimer" longdesc="Imprimer Ce bl" /> </a>
            <br />
            <hr />
            <br />
        </div>
    </div>

    <!-- end .container -->


</div>






<br/>








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