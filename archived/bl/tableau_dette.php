
<?php

{
////////////////////////////////////////////////////////////

function total_dette_client($type,$link){
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
    if ($type==="credit")
        $sql = $sql." having dette <0";

    elseif ($type==="dette")
		$sql = $sql." having dette > 0";

	elseif ($type==="0")
		$sql = $sql." having dette = 0";

	elseif ($type==="tous")
		$sql = $sql." ";

    $sql  = $sql." ) AS tab ";

    $req = mysqli_query($link,$sql) or die (mysqli_error($link));

    if( mysqli_num_rows($req)){
        while($row_req =mysqli_fetch_array($req)){
            $result = $row_req["total_dette_client"];
        }
    }
    return $result ;
}
////////////////////////////////////////////////////////////

	$type="dette";
	if (isset ($_GET["type"]))
	{
		$type=$_GET["type"];
	}


	$req=mysqli_query($link,"      

			SELECT
			 clients.ref_client, 
			 clients.Societe, 
			 clients.dette, 
			 ( SELECT 	COALESCE(SUM(bl.montant_remise ),0) AS rem       		 FROM bl WHERE bl.ref_client = clients.ref_client ) AS total_remise ,
			 ( select 	COALESCE(SUM(bl.montant_ht     ),0) as total_bl  		 from bl where bl.ref_client = clients.ref_client ) as total_bl ,
			 ( select  	COALESCE(SUM(reglement.montant ),0) as total_versement   from bl,reglement where bl.id_bl = reglement.id_bl and bl.ref_client = 		clients.ref_client ) as total_versement
			 FROM clients 
			 
			ORDER BY  `clients`.`ref_client` ASC ") or die (mysqli_error($link));
        if (mysqli_num_rows($req)){?>

        <form  action="" method="GET" class="form-horizontal form-groups-bordered">

            <div class="form-group">
                <label class="col-sm-3 control-label">Choisir une option :</label>

                <div class="col-sm-5">
            <select name="type" class="select2" data-allow-clear="true" data-placeholder="type de dette...">
                <option  value="tous" <?php
                if ($type=="tous")
                {
                ?>Selected <?php
                }
                ?>>Tous les  Clients </option>
                <option   value="dette" <?php
                if ($type=="dette")
                {
                ?>selected <?php
                }
                ?>>Clients Avec Dettes </option>

                <option  value="credit"<?php
                if ($type=="credit")
                {
                ?>selected <?php
                }
                ?>>Clients Avec Crédits </option>
                <option value="0" <?php
                if ($type=="0")
                {
                ?>selected <?php
                }
                ?>>Clients réguliers  </option>
            </select>
<br/>

                    <button type="submit" class="btn btn-gold btn-success" value="ok" style=" width:100px">

                        Afficher
                    </button>
        </form>
    </div></div>



            <hr /><br />

            <?php
            $result = 0;
            while($row=mysqli_fetch_array($req)){
                $ref_client			=	$row[0];
                $client				=	$row[1] ;
                $dette 				= 	$row["dette"];
                $total_remise 		= 	$row['total_remise'];
                $total_bl 			=	$row["total_bl"];
                $total_versement	= 	$row ["total_versement"];
                $num 				=	$total_bl  + $dette - $total_versement  - $total_remise;

                if( ($num <0 && $type=="credit" )||($type=="tous" )|| ($num >0 && $type=="dette" )|| ($num ==0 && $type=="0" ))
                {

                    /*	if ($type!="tous")
                        $num =  abs($num);
                */

                    $numm= number_format($num, 2, ',', ' ');
                    if (!$result++)
                    {
                        ?>
                        <table class="table table-bordered table-striped datatable" id="table-2\">
                        <thead class="thead-dark">
                        <tr >
                            <th  width="60%" nowrap="nowrap">Nom  </th>
                            <th width="40%" nowrap="nowrap" class = "dette">Valeur ( DA )</th>
                        </tr></thead>
                    <?php }?>
                    <tr>
                        <td nowrap="nowrap" id="dette_left" style = "padding: 15px; text-align: left;">
                            <?php
                            echo "".$client ;
                            ?>
                        </td>
                        <td align="Right" nowrap="nowrap" style="padding: 15px;  text-align: right;<?php
                        if ($num >0){
                            ?>color:#FF0000;<?php
                        }else if ($num !=0)
                        {
                            ?>color:#33FF00 ;
                            <?php
                        }
                        ?>"><?php
                            echo $numm;
                            ?></td>
                    </tr>
                    <?php
                }

            }if (!$result)
            echo " <br> Aucun client !!...</tr>";




            ?>
            </TABLE>
            <?php



            ?>
            <br />


            <hr />

            <center><div class="alert alert-success"><strong>Total Dette</strong> :
                    <?php

                    $total =   total_dette_client($type,$link);
                    $total =   number_format($total, 0, ',', ' ');

                    echo $total ." ";?></div>
            </center>
            <?php
        }else
        {
            ?>
            <center>

                <p>Aucun Client n'existe sur votre base de données !!</p>
            </center>
        <?php	}
        ?>
        <!-- end .content -->

    <?php
    }//else

       // header("Location:../login.php");

    ?>

























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