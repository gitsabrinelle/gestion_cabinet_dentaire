<!-- Default Basic Forms Start -->

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

<div class="mobile-menu-overlay"></div>

<div class="main-container">
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Entrez les informations du patient : </h4>

        </div>

    </div>
    <form method="POST" class="form-horizontal form-groups-bordered"
          action="?p=gestion/fournisseurs/ajout_fournisseur_confirm.php">
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Nom</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="nom" value="<?php if (isset($_POST['nom'])) echo($_POST['nom']); ?>" >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Prénom</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" name="prenom" type="text" value="<?php if (isset($_POST['prenom'])) echo($_POST['prenom']); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Date de naissance </label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control date-picker" placeholder="Appuyez pour choisir une date" type="text" name="date_de_naissance" value="<?php if (isset($_POST['date_de_naissance'])) echo($_POST['date_de_naissance']); ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" name="n_tel" type="text" value="<?php if (isset($_POST['n_tel'])) echo($_POST['n_tel']); ?>"  >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Adresse</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="adresse" value="<?php if (isset($_POST['addresse'])) echo($_POST['addresse']); ?>">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">

                <button type="submit" name="submit" class="btn btn-success">Ajouter +</button>

            </div>
        </div>


    </form>

</div>
<!-- Default Basic Forms End -->