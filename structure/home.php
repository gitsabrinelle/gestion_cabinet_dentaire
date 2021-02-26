
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <?php echo("<h1>Aujourd'hui  : $date </h1> ") ?>
                <h3>Bienvenu <strong> </strong></h3>
            </div>
        </div>
    </div>
    <hr/>	
    <br/>
    <?php
    //$req_recette = mysqli_query($link, "select * from total_home ") or die (mysqli_error($link));
    $total_ventes = 0;
    $total_versement = 0;
    $nbrArticle = 0;
    $nbrUser = 0;
    /*if (mysqli_num_rows($req_recette)) {
        $row_recette = mysqli_fetch_array($req_recette);
        $total_ventes = $row_recette["total_bl"] - $row_recette["total_remise"];
        $total_ventes = number_format($total_ventes, 2, ',', ' ');
        $total_versement = number_format($row_recette["total_versement"], 2, ',', ' ');
    }*/

    //$nbrUser=1 ;
    $query = mysqli_query($link, "select id  from users");
    //$recup = mysqli_fetch_array($query);
    $nbrUser = mysqli_num_rows($query);
    //$nbrUser=1 ;
    $query = mysqli_query($link, "select id  from articles");
    //$recup = mysqli_fetch_array($query);
    if ($query)
        $nbrArticle = mysqli_num_rows($query);
    else
        $nbrArticle = 0;
    ?>

    <div class="col-sm-3 col-xs-6">
        <div class="tile-stats tile-red">
            <div class="icon"><i class="entypo-users"></i></div>
            <div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500"
                 data-delay="0"> <?php echo("<span style=\"color:#33FF00\">" . $nbrUser); ?></div>
            <h3>Utilisateurs</h3>
        </div>
    </div>

    <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-green">
            <div class="icon"><i class="entypo-briefcase"></i></div>
            <div class="num"><?php echo("<span style=\"color:#33FF00\">" . $total_ventes); ?> DA</div>
            <h3>Ventes</h3>
        </div>
    </div>

    <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-aqua">
            <div class="icon"><i class="entypo-suitcase"></i></div>
            <div class="num"> <?php echo("<span style=\"color:#33FF00\">" . $total_versement); ?> DA</div>

            <h3>Versement</h3>

        </div>

    </div>

    <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-aqua">
            <div class="icon"><i class="entypo-picasa"></i></div>
            <div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="1200">

                <?php echo("<span style=\"color:#33FF00\">" . $nbrArticle); ?>
            </div>

            <h3>Articles en stock</h3>

        </div>

    </div>
