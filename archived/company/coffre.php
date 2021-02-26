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
session_start();
if( isset($_GET['msg']) )
{
    ?>
    <p style = "text-align:Center ; font-size : 16px; color: green;">
        Modification faite aves Succés	 <p/>
    <?php
}
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
                    <a href="scoffre.php">
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


        <hr/>



        <?php

        ob_start();
        $error = "Problem connecting";
        $link = mysqli_connect('localhost','root','') or die($error);
        mysqli_select_db($link,'dap2');
        //  mysqli_select_db($link,'dap2') or header("Location:index.php");
       // session_start();
        if(isset($_SESSION['username']))
        {
///////////////////////////////////////////////////////////
            function get_capitale_initial($link)
            {
                $result = 0;


                $req_capital_initiale = mysqli_query($link,"SELECT capital_initiale
FROM  `etablissement` 
WHERE id ='0'
") or die (mysqli_error($link));

                if( mysqli_num_rows($req_capital_initiale))
                {
                    while($row_req =mysqli_fetch_array($req_capital_initiale))
                    {

                        {


                            $result = $row_req["capital_initiale"];
                        }

                    }
                }


                return $result ;
            }
////////////////////////////////////////////////////////////
            function get_capital()
            {
                $result = 0;
                $quant_vendu= 0;

                /*
            $req = mysqli_query($link,"
            select
             COALESCE( SUM(total ) , 0 ) AS total_achat

            from (SELECT
                achat.id_article,
                achat.quant_en_Stock as quantite_totale,

                CASE WHEN vente.quant_vendu IS NULL THEN 0 	ELSE vente.quant_vendu 	END AS quant_vendu ,


                CASE WHEN vente.quant_vendu IS NULL THEN achat.quant_en_Stock 	ELSE (quant_en_Stock- quant_vendu) 	END AS Rest ,
                achat.prix_achat as prix_ach,

                case when ( (quant_en_Stock-quant_vendu)* achat.prix_achat) is null
                then ( (quant_en_Stock)* achat.prix_achat)else ( (quant_en_Stock- quant_vendu)* achat.prix_achat) End as total

            FROM (

            SELECT id_article,
            COALESCE( SUM( detail_fachat.qtt ) , 0 ) AS quant_en_Stock,
            prix_achat


            FROM detail_fachat
            where
            id_article  not in (SELECT id_article
            FROM (

            SELECT COUNT( * ) AS  `Lignes` , detail_fachat.`id_article` , reference
            FROM  `detail_fachat` , articles
            WHERE articles.id_article = detail_fachat.id_article
            GROUP BY  `id_article`
            ORDER BY  `Lignes` DESC
            ) AS tab
            WHERE tab.Lignes >=  '2'


            )
            GROUP BY  `detail_fachat`.`id_article`
            )achat
            LEFT JOIN (

            SELECT id_article, COALESCE( SUM( detail_bl.quantite ) , 0 ) AS quant_vendu
            FROM detail_bl
            GROUP BY  `detail_bl`.`id_article`
            )vente ON achat.id_article = vente.id_article) as table1




            ") or die (mysqli_error($link));

            if( mysqli_num_rows($req))
            {
            while($row_req =mysqli_fetch_array($req))
                {

            {


                $result = $row_req["total_achat"];
                }

                 }
            }
            */


                $total_rest_double = 0;
                $host = "localhost";
                $username ="root";
                $password ="";

                $connection = mysqli_connect($host,$username,$password);


                $connection_db=mysqli_select_db($connection,"dap2");



                $request_2  = "
		SELECT id_article 
				FROM (
						SELECT 
							COUNT( * ) AS  `Lignes` , 
							detail_fachat.`id_article` , 
							reference
						FROM  
								`detail_fachat` , articles
						WHERE 
								articles.id_article = detail_fachat.id_article
						GROUP BY  `id_article` 
						ORDER BY  `Lignes` DESC
					) AS tab
			
		 
	
	";
                $request= mysqli_query($connection, $request_2);

                if ($request ) {
                    while ($row = mysqli_fetch_array($request)) {
                        $i=0;

                        // echo ("id_article = ".$row["id_article"]."<br>");




                        $link = mysqli_connect("localhost", "root", "", "dap2");

                        /* check connection */
                        if (mysqli_connect_errno()) {
                            printf("Connect failed: %s\n", mysqli_connect_error());
                            exit();
                        }


                        $query =" SET @var_amount =0; ";
                        $query =$query ."  		SELECT 
					COALESCE(SUM(quantite),0) AS quant_en_Stock INTO @var_amount
				FROM  detail_bl 
				WHERE id_article = '".$row["id_article"]."';";
                        $query =$query . "  SELECT *,
				tmp.qtt*prix_achat as total_achat,
				tmp.qtt_vendu*prix_achat as total_vendu,
				tmp.qtt-tmp.qtt_vendu as qtt_rest,
				(tmp.prix_achat * (  tmp.qtt-tmp.qtt_vendu )) as total_rest
			FROM (
					SELECT 
							`id_detachat`,
							id_article,
							qtt ,
							`prix_achat`,
							case
								when  ( @var_amount := @var_amount - qtt) > 0 
									then qtt
								when @var_amount   <= 0    
									then  if (   @var_amount+qtt <= 0,0,@var_amount+qtt)
							END	as qtt_vendu 
							FROM detail_fachat
							WHERE id_article = '".$row["id_article"]."'
							ORDER BY `id_detachat` ASC
					) AS tmp ;
  ";

                        /* execute multi query */
                        if (mysqli_multi_query($link, $query)) {
                            do {
                                /* store first result set */
                                if ($result = mysqli_store_result($link)) {
                                    while ($row = mysqli_fetch_array($result)) {




                                        // echo("total vendu". $row["total_rest"]."<br>");

                                        $total_rest_double = $total_rest_double+$row["total_rest"];



                                    }
                                }
                                if (!mysqli_more_results($link)) {
                                    break;
                                }
                            } while (mysqli_next_result($link));
                        }
                    }

                }
                // else
                // echo "no ";


                // die("$total_rest_double");


                return $total_rest_double ;
            }
////////////////////////////////////////////////////////////

            function get_charges($link)
            {
                $result = 0;


                $req = mysqli_query($link,"SELECT COALESCE( SUM( montant ) , 0 ) AS total_charges
FROM  `charges`

") or die (mysqli_error($link));

                if( mysqli_num_rows($req))
                {
                    while($row_req =mysqli_fetch_array($req))
                    {

                        {


                            $result = $row_req["total_charges"];
                        }

                    }
                }


                return $result ;
            }
////////////////////////////////////////////////////////////
            function get_ventes($link)
            {
                $result = 0;


                $req = mysqli_query($link,"SELECT COALESCE( SUM( montant ) , 0 ) AS versements_ventes
FROM  `reglement`

") or die (mysqli_error($link));

                if( mysqli_num_rows($req))
                {
                    while($row_req =mysqli_fetch_array($req))
                    {

                        {


                            $result = $row_req["versements_ventes"];
                        }

                    }
                }


                return $result ;
            }
////////////////////////////////////////////////////////////
            function get_versement_fournisseurs($link)
            {
                $result = 0;
                $req = mysqli_query($link,"SELECT COALESCE( SUM( montant ) , 0 ) AS versements_fournisseurs
FROM  `reglement_achat`
") or die (mysqli_error($link));

                if( mysqli_num_rows($req))
                {
                    while($row_req =mysqli_fetch_array($req))
                    {
                        $result = $row_req["versements_fournisseurs"];
                    }
                }
                return $result ;
            }
////////////////////////////////////////////////////////////
            function get_dettes_fournisseurs($link)
            {
                $result = 0;

                $total_premiere_dette=0;
                $total_versement=0;
                $total_bon_fournisseur = 0;


                $query = mysqli_query($link,

                    "SELECT COALESCE( SUM( facture_achat.bon_fournisseur ) , 0 ) AS total_bon_fournisseur
FROM facture_achat, fournisseurs
WHERE facture_achat.ref_fournisseur = fournisseurs.ref_fournisseur
"
                )or die (mysqli_error($link));

                if (mysqli_num_rows($query))
                {
                    {
                        while ($row = mysqli_fetch_array($query))
                            $total_bon_fournisseur  = $row["total_bon_fournisseur"];
                    }
                }

                $query = mysqli_query($link,"
select  COALESCE(SUM(reglement_achat.montant),0) as total_versement 
 from reglement_achat ,facture_achat, fournisseurs 

where facture_achat.ref_fournisseur = fournisseurs.ref_fournisseur and 

reglement_achat.id_fachat = facture_achat.id_fachat  
  
")or die (mysqli_error($link));

                if (mysqli_num_rows($query))
                {
                    while ($row = mysqli_fetch_array($query))
                    {
                        $total_versement  = $row["total_versement"];
                    }
                }
                $query = mysqli_query($link,"
select  COALESCE(SUM(dette),0) as total_premiere_dette 
 from  fournisseurs 

  
")or die (mysqli_error($link));

                if (mysqli_num_rows($query))
                {
                    while ($row = mysqli_fetch_array($query))
                    {
                        $total_premiere_dette  = $row["total_premiere_dette"];
                    }
                }



                $result = $total_premiere_dette -$total_versement	+ $total_bon_fournisseur;


                return $result ;



            }
////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////
            function coffre($link)
            {
                $result = 0;
                $req = mysqli_query($link,"SELECT COALESCE( SUM( montant ) , 0 ) AS versements_fournisseurs
FROM  `reglement_achat`
") or die (mysqli_error($link));

                if( mysqli_num_rows($req))
                {
                    while($row_req =mysqli_fetch_array($req))
                    {
                        $result = $row_req["versements_fournisseurs"];
                    }
                }
                return $result ;
            }
////////////////////////////////////////////////////////////

            function total_dette_client($link)
            {
                $result = 0;
                $req = mysqli_query($link,"
SELECT COALESCE( SUM( dette ) , 0 ) AS total_dette_client
FROM (

SELECT list.ref_client, (
list.total_bl + list.premiere_dette - list.total_remise - list.total_versement
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
) AS tab


 
") or die (mysqli_error($link));

                if( mysqli_num_rows($req))
                {
                    while($row_req =mysqli_fetch_array($req))
                    {
                        $result = $row_req["total_dette_client"];
                    }
                }
                return $result ;
            }
////////////////////////////////////////////////////////////



            $get_dettes_fournisseurs = get_dettes_fournisseurs($link);
            $total_dette_client = total_dette_client($link);
            $get_ventes = get_ventes($link);
            $get_capitale_initial=get_capitale_initial($link);
            $get_capital = get_capital();
            $get_charges = get_charges($link);
            $get_versement_fournisseurs = get_versement_fournisseurs($link);





            ?>
            <form action ="coffre_update.php" method="GET" >
                <hr>
                <span style = "text-align:Center ; font-size : 22px;">
Capital :
  </span>
                <table class="table table-striped table-dark">
                    <tr>
                        <th>Capital Initiale(N°1)</th>

                        <td style = "text-align:Center ; "><input  name ='capital_initiale' type = "text" value = '<?php

                            echo $get_capitale_initial ;?>' style = "text-align:Center ; font-size : 22px; size:100%" ></td>

                    </tr>
                    <tr>
                        <th>Total Magasin (prix achat) </th>

                        <td style = "text-align:Center ; ">
<span style = "text-align:Center ; font-size : 22px; size:100%;color:green"> <?php

    $montant_ht =$get_capital ;
    $montant_ht = number_format($montant_ht, 2, ',', ' ');
    echo $montant_ht;

    ?> </span >
                        </td>

                    </tr>
                    <tr>


                        <th>Coffre: </th>

                        <td style = "text-align:Center ; ">
<span style = "text-align:Center ; font-size : 22px; size:100%;color:lightblue;"> <?php
    $montant_ht = $get_capitale_initial+$get_ventes - $get_charges-$get_versement_fournisseurs;
    $coffre  = $montant_ht;

    $montant_ht = number_format($montant_ht, 2, ',', ' ');
    echo $montant_ht;

    ?> </span >
                        </td>

                    </tr>
                    <tr>


                        <th>Capital Net : </th>

                        <td style = "text-align:Center ; ">
<span style = "text-align:Center ; font-size : 22px; size:100%;color:yellow;"> <?php
    // $montant_ht = get_charges($link);
    $montant_ht = $coffre+$get_capital-$get_dettes_fournisseurs;
    $montant_ht = number_format($montant_ht, 2, ',', ' ');
    echo $montant_ht;

    ?> </span >
                        </td>

                    </tr>
                </table>
                <hr>
                <span style = "text-align:Center ; font-size : 22px;">
 Clients:
  </span>

                <table   class="table table-striped table-dark">

                    <tr>
                        <th>Total Versements Ventes </th>

                        <td style = "text-align:Center ; ">
<span style = "text-align:Center ; font-size : 22px; size:100%;color:green"> <?php

    $montant_ht = $get_ventes;

    $montant_ht = number_format($montant_ht, 2, ',', ' ');
    echo $montant_ht;

    ?> </span >
                        </td>

                    </tr>

                    <tr>

                        <th>Total  Dettes Clients </th>

                        <td style = "text-align:Center ; ">
<span style = "text-align:Center ; font-size : 22px; size:100%;color:Red"> <?php

    $montant_ht =$total_dette_client;
    // $montant_ht = 0;
    $montant_ht = number_format($montant_ht, 2, ',', ' ');
    echo $montant_ht;

    ?> </span >
                        </td>

                    </tr>



                </table>
                <hr>
                <span style = "text-align:Center ; font-size : 22px;">
Charges :
  </span>

                <table class="table table-striped table-dark">
                    <tr>
                        <th>Total  Charges <br>(Transport ,location,dejeuner,...) </th>

                        <td style = "text-align:Center ; ">
<span style = "text-align:Center ; font-size : 22px; size:100%;color:Red"> <?php

    $montant_ht =  $get_charges;

    $montant_ht = number_format($montant_ht, 2, ',', ' ');
    echo $montant_ht;

    ?> </span >
                        </td>

                    </tr>
                </table>

                <hr>
                <span style = "text-align:Center ; font-size : 22px;">
Fournisseurs
  </span>

                <table class="table table-striped table-dark">
                    <tr>
                        <th>Total Versements Fournisseurs </th>

                        <td style = "text-align:Center ; ">
<span style = "text-align:Center ; font-size : 22px; size:100%;color:green"> <?php

    $montant_ht = $get_versement_fournisseurs ;
    $montant_ht = number_format($montant_ht, 2, ',', ' ');
    echo $montant_ht;

    ?> </span >
                        </td>

                    </tr>
                    <tr>

                        <th>Total  Dettes Fournisseurs </th>

                        <td style = "text-align:Center ; ">
<span style = "text-align:Center ; font-size : 22px; size:100%;color:red"> <?php

    $montant_ht = $get_dettes_fournisseurs;
    // $montant_ht =0;
    $montant_ht = number_format($montant_ht, 2, ',', ' ');
    echo $montant_ht;

    ?> </span >
                        </td>

                    </tr>


                </table>

            </form>
        <?php	}
        else

            header("Location:../login.php");

        ?>


        <!-- end .container -->
        <?php
        include("modele/footer.php");
        ?>

    </div>
    <script type = "text/javascript" src = "design/jquery.js"> </script>

    <script type="text/javascript">
        //alert($b);



        //	alert(44);
        var a=0;
        $("#code").keyup(function(){
//salert($("#code").val());

            var stop = 1;
//do{
            var $ff = $.trim($("#code").val())
//alert ($ff);
//}while($ff.contains());
            $ff= $ff.replace(/ /g, '%20');
            var $ai=0;
            do {
                $ff= $ff.replace('%20%20', '%20');
                $ai++;
            }while($ai<15);

//alert ($ff);
            $ff=$ff.toUpperCase();

            var $b= "fast_info.php?code="+$ff;


            var len = $("#code").val().length;


            if(len>1)
            {//	$("#code").val("");

                if(a==0)
                {
                    $("#header").hide(1000,function(){
//$("#header").show(1000).html("COPYRIGHT 2012");



                    });
                    $("#date").hide(1000,function(){
                        $("#date").show(1000).html(" ");

                    });
                    a=1;

                }
            }

            //$("#bar_result").hide(100);
            $("#bar_result").load($b,function(){
            }).show(1000);

            //alert($b);

        });





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

            &copy; 2019 <strong>ComInTec</strong>  <a href="" target="_blank">Bureau de consulting et formation en Informatique</a>

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
            <link rel="stylesheet" type="text/css" href="../assets/js/print.css" media="print" />
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
    <script src="../assets/js/printThis.js"></script>

    <!-- Demo Settings -->
    <script src="../assets/js/neon-demo.js"></script>

</body>
</html>