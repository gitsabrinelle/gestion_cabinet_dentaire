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
                            <a href="liste_fournisseur.php">
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
                            <a href="../articles/categorie.php">
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
                            <a href="../stock/stock.php">
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
        $link = mysqli_connect('localhost','root','') or die($error);
        mysqli_select_db($link,'dap2') or die($error);

        session_start();

        $p=4;
        $dp=3;
        $year_debut=0;
        $mois_debut=0;
        $jour_debut=0;

        $year_fin = 0;
        $mois_fin = 0;
        $jour_fin = 0;

        if(isset($_SESSION['username']))
        {
        ?>

        <br />  <br />


        <form method="GET" action="recettes.php">

            <table width="45%" border="2" align="center">
                <tr height="50">
                    <td>
                        <?php

                        $jour_actuel = "";

                        if (isset($_GET["jour"]) )
                            $jour_actuel = $_GET["jour"];


                        $mois_actuelle = "";
                        $premiere_annee=date ("Y")+0;
                        if (isset($_GET["mois"]) )
                            $mois_actuelle = $_GET["mois"];

                        $annee_actuelle = date ("Y");
                        if (isset($_GET["annee"]) )
                            $annee_actuelle = $_GET["annee"];

                        // die ("". $mois_actuelle);
                        ?>
                        <select name = "mois" >
                            <option value = "<?php echo("NULL");?>"    ><?php echo(" ");?>
                            <option value = "<?php $i=1;echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?>  selected="selected"<?php }?>>Janvier
                            </option>
                            <option value = "<?php echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?>  selected="selected"<?php }?>>Fevrier
                            </option>
                            <option value = "<?php echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?>  selected="selected"<?php }?>>Mars
                            </option>
                            <option value = "<?php echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?>  selected="selected"<?php }?>>Avril
                            </option>
                            <option value = "<?php echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?>selected="selected"<?php }?>>Mai
                            </option>
                            <option value = "<?php echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?>  selected="selected"<?php }?>>Juin
                            </option>
                            <option value = "<?php echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?>  selected="selected"<?php }?>>Juillet
                            </option>
                            <option value = "<?php echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?> selected="selected"<?php }?>>Aout
                            </option>
                            <option value = "<?php echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?>  selected="selected"<?php }?>>Septembre
                            </option>
                            <option value = "<?php echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?>  selected="selected"<?php }?>>Octobre
                            </option>
                            <option value = "<?php echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?>  selected="selected"<?php }?>>Novembre
                            </option>
                            <option value = "<?php echo($i++);?>"<?php  if (( !isset($_GET["mois"]) && $i-1 == date ("m")) || ( isset($_GET["mois"]) && $i-1 == $mois_actuelle )){?> selected="selected"<?php }?>>Decembre
                            </option>
                        </select>
                    </td>
                    <td valign="middle">
                        <?php

                        /* $ss=31;

                             do{
                             $d2= $date2."-".$ss--;

                                }while (date("m",strtotime($date2))!=date("m",strtotime($d2)));*/

                        //$date2=$d2;
                        $last=1;
                        $req_part = "";
                        if (isset($_GET["annee"]))
                        {
                            if($_GET["annee"]!="NULL")
                            {
                                $req_part = "where `bl`.`date` < '$annee_actuelle-";

                                if (isset($_GET["mois"]) )
                                    if($_GET["mois"]!="NULL"  )
                                    {
                                        if($_GET["mois"]!="12"  )
                                        {
                                            $a=$_GET["mois"]+1;
                                            $req_part = $req_part .$a;
                                            $last="1";
                                        }
                                        else
                                        {$req_part =$req_part .$mois_actuelle;

                                            $last="31";
                                        }
                                    }
                                    else
                                        $req_part =$req_part ."12";
                                else
                                    $req_part =$req_part ."12";

                                $req_part =$req_part ."-$last' and `bl`.`date` >= '$annee_actuelle-";

                                if (isset($_GET["mois"]) )

                                    if($_GET["mois"]!="NULL")
                                        $req_part =$req_part .$mois_actuelle;
                                    else
                                        $req_part =$req_part ."1";
                                else
                                    $req_part =$req_part ."1";

                                $req_part =$req_part ."-1'";
                            }}



                        $req_min_date = mysqli_query($link,"SELECT * 
FROM  `bl` ".$req_part ."
ORDER BY  `bl`.`date` ASC LIMIT 0,1");
                        $ii = date ("Y")+0;
                        //die("".$i);
                        if (mysqli_num_rows($req_min_date))
                        {

                            while ($row=mysqli_fetch_array($req_min_date))
                            {
                                $date_actuelle = $row["date"];
                                //die($date_actuelle);
                                $ii=date("Y", strtotime($row["date"]))+0;
                                $year_debut=$ii;	//die("hh".$ii);
                                $mois_debut=date("m", strtotime($row["date"]))+0;
                                $jour_debut = date("d", strtotime($row["date"]))+0;
                            }
                        }

                        //$annee_
                        $last;
                        $req_part = "";
                        if (isset($_GET["annee"]))
                        {
                            if($_GET["annee"]!="NULL")
                            {
                                $req_part = "where `bl`.`date` < '$annee_actuelle-";

                                if (isset($_GET["mois"]) )
                                    if($_GET["mois"]!="NULL"  )
                                    {
                                        if($_GET["mois"]!="12"  )
                                        {
                                            $a=$_GET["mois"]+1;
                                            $req_part = $req_part .$a;
                                            $last="1";
                                        }
                                        else
                                        {$req_part =$req_part .$mois_actuelle;

                                            $last="31";
                                        }
                                    }
                                    else
                                        $req_part =$req_part ."12";
                                else
                                    $req_part =$req_part ."12";

                                $req_part =$req_part ."-$last' and `bl`.`date` >= '$annee_actuelle-";

                                if (isset($_GET["mois"]) )

                                    if($_GET["mois"]!="NULL")
                                        $req_part =$req_part .$mois_actuelle;
                                    else
                                        $req_part =$req_part ."1";
                                else
                                    $req_part =$req_part ."1";

                                $req_part =$req_part ."-1'";
                            }}


                        $req_max_date = mysqli_query($link,"SELECT * 
FROM  `bl` 
".$req_part ."
ORDER BY  `bl`.`date` DESC LIMIT 0,1");

                        //die("".$i);
                        if (mysqli_num_rows($req_max_date))
                        {

                            while ($row=mysqli_fetch_array($req_max_date))
                            {
                                $year_fin = date("Y", strtotime($row["date"]))+0;
                                $mois_fin = date("m", strtotime($row["date"]))+0;
                                $jour_fin = date("d", strtotime($row["date"]))+0;
                                //	die("".$jour_fin);
                            }
                        }

                        $req_max_date = mysqli_query($link,"SELECT * 
FROM  `bl` 

ORDER BY  `bl`.`date` DESC LIMIT 0,1");

                        //die("".$i);
                        if (mysqli_num_rows($req_max_date))
                        {

                            while ($row=mysqli_fetch_array($req_max_date))
                            {
                                $premiere_annee= date("Y", strtotime($row["date"]))+0;

                            }
                        }

                        ?>
                        <select name = "annee" >
                            <option value = "<?php echo("NULL");?>" ><?php echo(" ");?>

                                <?php

                                for ($ii;$ii<=$premiere_annee;$ii++){
                                ?>
                            <option value = "<?php echo("".$ii);?>" <?php  if (( !isset($_GET["annee"]) && $ii == date ("Y")) || ( isset($_GET["annee"]) && $ii == $annee_actuelle )){?>  selected="selected"<?php }?>><?php echo("".$ii);?>
                            </option>
                            <?php
                            }
                            ?></select>

                    </td>


                </tr>
                <tr>
                    <td></td>
                    <td>

                        <input style=" width:100px ; height:50px;" type="submit" value = "Envoyer"/>
                    </td>
                </tr>
            </table >
        </form>
        </br></br>

        <?php
        if (isset($_GET["annee"])&& isset($_GET["mois"]) )
        {


        if ($_GET["annee"]=="NULL" && $_GET["mois"]="NULL")
        {


            $month1 = $mois_debut;

            $year1=$year_debut;

            $month2 = date("m");

            $year2=date("Y");
        }

        if ($_GET["annee"]=="NULL" )
        {
            $year1=$year_debut;
            $year2=date("Y");

        }
        else
        {

            $year1= $_GET["annee"];
            $year2=$_GET["annee"];
        }

        if ($_GET["mois"]=="NULL" )
        {
            $month1= $mois_debut;
            $month2 = $mois_fin;

        }
        else{

            $month1 = $_GET["mois"];
            $month2 =$_GET["mois"];


        }






        $date1 = $year1."-".$month1;


        $date2 = $year2."-".$month2;

        $date1 = $date1."-".$jour_debut;


        $date2 = $date2."-".$jour_fin;

        /* $ss=31;

         do{
         $d2= $date2."-".$ss--;

            }while (date("m",strtotime($date2))!=date("m",strtotime($d2)));*/

        //$date2=$d2;
        $query_requete="select 
  bl.id_bl,
  clients.Societe , 
  bl.montant_ht , 
  clients.ref_client,
  bl.date ,
  bl.montant_ht,
  bl.method_paym from bl 
, clients where
bl.ref_client = clients.ref_client
 and bl.date >= '".$date1."' 
 and bl.date <= '".$date2."'
ORDER BY `bl`.`id_bl` ASC
 ";
        $requete = mysqli_query($link,$query_requete)OR DIE(mysqli_error($link));

        if( mysqli_num_rows($requete))
        {


        ?>


        Listes des bl Depuis <?php echo("".date("d-m-Y", strtotime($date1)))?> et  <?php echo("".date("d-m-Y", strtotime($date2)))?>

        <br />
        <br />
        <TABLE  border="1" align="center" id = "example" class="table table-bordered table-striped datatable">
            <thead>
            <tr>
                <th nowrap="nowrap">N bl</th>
                <th nowrap="nowrap">Nom</th>
                <th>Date</th>

                <th nowrap="nowrap">P Vente </th>
                <th> Actions</th>
            </tr>
            </thead>
            <?php
            $mois = 1;
            $j=2;
            $somme_revient=0;
            $somme_ht=0;
            $somme_rev=0;
            $somme_ttc=0;
            while($row=mysqli_fetch_array($requete))
            {
            $negative = 0;
            $id_bl = $row['id_bl'];
            // $name_bl = $row['name_bl'];
            $Societe = $row['Societe'];
            $date= $row['date'];
            $montant_ht = $row['montant_ht'];
            $somme_ttc=$somme_ttc+$row['montant_ht']*1.17;
            $montant_ht = $row['montant_ht'];
            $somme_ht=$somme_ht+$montant_ht;
            //$etat=$row['etat'];
            // $method_payement = $row['method_paym'];
            $ref_client = $row['ref_client'];
            $d = date("m", strtotime($date))+0;
            ?>

            <tbody>
            <tr>

                <td align="center">
                    <a href="#<?php
                    // echo $name_bl;?>" class="linkcolor"  id="<?php
                    // echo $name_bl;?>" style="text-decoration: none; color: #0F0;" onclick="window.open('../bl/bl-vente.php?id_bl=<?php echo $id_bl;?>&ref_client=<?php echo $ref_client;?>')">	<?php
                        // echo $name_bl;
                        $dp=$dp+1;?>
                    </a></td>
                <td align="center" nowrap="nowrap">
                    <?php
                    echo $Societe;?>
                </td>

                <td  align="center" nowrap="nowrap">
                    <?php echo date("d-m-Y", strtotime($date));

                    ?>

                </td>
                <td align="center"><?php
                    $req_prix_revient = mysqli_query($link,"SELECT *
FROM  detail_bl 
WHERE  id_bl = '$id_bl'")or die (mysqli_error($link));
                    $somme=0;
                    while($row_prix_revient=mysqli_fetch_array($req_prix_revient))
                    {
//$prix_revient= $row_prix_revient['prix_revient'];
                        $montant = $row_prix_revient['Montant'];
                        $quantite= $row_prix_revient['quantite'];
// $marge = $row_prix_revient['marge'];
                        $pri=$montant/$quantite;
                        $prix_revient  = $pri;
                        $somme=$somme+$prix_revient*$quantite;
                    }
                    $somme_revient = $somme_revient+$somme;
                    echo(number_format($somme,0, ',', ' '));	?></td>




                <?php
                // echo number_format($montant_ht*0.17, 5, ',', ' ')
                ?>

                <?php
                // if ($method_payement=="" || $method_payement== NULL)
                // {
                // echo '';
                //	$method_payement = 'Vir B';
                // }
                // else
                // {
                // $timbre = ($montant_ht*1.17 *0.01);
                // if ($timbre<=2500)
                // echo  number_format($timbre, 5, ',', ' ');
                // else
                // echo  number_format(2500, 5, ',', ' ');

                // }?>
                <?php
                // if ($method_payement == "" || $method_payement == NULL)
                // echo number_format($montant_ht*1.17, 5, ',', ' ');
                // else
                // {
                // $timbre = ($montant_ht*1.17 *0.01);
                // if ($timbre<=2500)
                // echo  number_format($montant_ht*1.17+$timbre, 5, ',', ' ');
                // else
                // echo  number_format($montant_ht*1.17+2500, 5, ',', ' ');

                // }
                ?>
                <?php if($negative<0)
                {
                    echo("bgcolor=\"#FF6600\" ");
                    ?>
                    <?php

                }?>
                <?php
                // if ($method_payement=="" || $method_payement== NULL)
                // {
                // echo 'Vir B';
                $method_payement = 'Vir B';
                // }else
                // echo ($method_payement);
                ?>
                <?php
                $id_article;

                $req_art_bl_ventes = mysqli_query($link,"select * from detail_bl where id_bl = '".$id_bl."'")or die (mysqli_error($link));
                $quant_reste=0;
                $negative = 0;
                if(mysqli_num_rows($req_art_bl_ventes))
                    while($result=mysqli_fetch_array($req_art_bl_ventes) )
                    {
                        $id_article = $result['id_article'];
                        $quant_en_Stock = 0;
                        $quant_vendu = 0;
                        $quant_comptab = 0;
                        $quantite_total=0;


                        $req_bl_vente = mysqli_query($link,"SELECT COALESCE(SUM(quantite),0) AS quant_en_Stock
FROM  detail_bl 
WHERE  id_article = '$id_article'")or die (mysqli_error($link));

                        $req_facture_achat = mysqli_query($link,"SELECT COALESCE(SUM(qtt),0) AS quant_en_Stock
FROM  detail_fachat 
WHERE  id_article = '$id_article'")or die (mysqli_error($link));

                        $row_bl_vente=mysqli_fetch_array($req_bl_vente);
                        $row_facture_achat=mysqli_fetch_array($req_facture_achat);

//if(mysqli_num_rows($requetqt)!=0)
                        $quantite_total = $row_facture_achat['quant_en_Stock'];

                        $quant_comptab= $row_bl_vente['quant_en_Stock'];
                        $quant_reste =$row_facture_achat['quant_en_Stock']-$row_bl_vente['quant_en_Stock'];
//echo ("$quant_reste");

                        if($quant_reste<0)
                            $negative =-1;
                    }


                ?>
                <?php if($negative<0)
                {
                    // echo("bgcolor=\"#FF6600\" ");
                    ?>
                    <?php

                }
                ?>



                <?php
                // if($negative<0)
                // echo("!!!!!");
                ?>

                <td>
                    <?php  if($montant_ht==0) { ?>
                        <a href="delete_bl.php?id_bl=<?php echo $id_bl;
                        if (isset($_GET["annee"])&&isset($_GET["mois"]))
                        {
                            ?>&annee=<?php
                            echo"".$_GET["annee"];?>&mois=<?php
                            echo"".$_GET["mois"];					}
                        ?>"><img src="design/pics/delete.png" width="16" height="16" /></a>
                        <hr />    <?php  }?>
                    <a href = "../print/print_bl.php?id_bl=<?php echo  $id_bl;?>">
                        <img src="design/pics/print-button.png" width="32" height="24" alt="Imprimer" longdesc="Imprimer Ce bl" /> </a>
                </td>

            </tr>

            <?php  }?>




<?php






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