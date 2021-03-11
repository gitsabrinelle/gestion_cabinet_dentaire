<?php
$ref='';


if(isset($_POST['submit']) ){

    $nom = '';
    if(  isset($_POST['nom'])  )
        $nom= $_POST['nom'];

    $prenom = '';
    if(  isset($_POST['prenom'])  )
        $prenom = $_POST['prenom'];

    /////////////////////////////////////
    $date_de_naissance= '';
    if(  isset($_POST['date_de_naissance'])  )
        $date_de_naissance= $_POST['date_de_naissance'];
    $array = explode("/",$date_de_naissance);
    $array[0];
    $array[1];
    $array[2];
    $date_de_naissance = $array[0]."/".$array[1]."/".$array[2];

    //$date_inscription = array(0)."-".array(1)."-".array(2);
    //var_dump($array[0]);die;

/////////////////////////////////////

    $n_tel = '';
    if(  isset($_POST['n_tel'])  )
        $n_tel = $_POST['n_tel'];

    $addresse = '';
    if(  isset($_POST['addresse'])  )
        $addresse = $_POST['addresse'];











    $query = "INSERT INTO  `patient` (
                                                        `nom`
                                                        ,`prenom`
                                                        ,`date_de_naissance`
                                                        ,`n_tel`
                                                        ,`addresse`
                                                       ,
														

												) VALUES (
												       
                                                        '".$nom."'
                                                        ,'.$prenom.'
                                                        ,'".$date_de_naissance."'
                                                        ,'".$n_tel."'
                                                
                                                        ,'".$adresse."'
                                                       
														
												)";

    $request = mysqli_query($link,$query) or die(mysqli_error($link));
    if($request){?>
        <div id="reussi" style="position:absolute; right:10px; Top:30px;"></div>
        <script type="text/javascript">
            document.getElementById('reussi').innerHTML = "<div class='alert alert-success'>Opération d'ajout faite avec succès.</div>";
            setTimeout(function() {
                document.getElementById('reussi').innerHTML = "";
            },3000);
        </script>
        <?php
        echo'<meta http-equiv="refresh" content="1;URL=index.php?p=gestion/fournisseurs/liste_fournisseurs.php">';
    }else{?>
        <div id="echec" style="position:absolute; right:10px; Top:30px;"></div>
        <script type="text/javascript">
            document.getElementById('echec').innerHTML = "<div class='alert alert-danger'><strong>Erreur!</strong> Vous avez une erreur, réessayer de nouveau.</div>";
            setTimeout(function() {
                document.getElementById('echec').innerHTML = "";
            },3000);
        </script>
        <?php
    }
}?>