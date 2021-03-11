<!-- Default Basic Forms Start -->
<br>
<br>
<br>
<br>
<br>
<br>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Entrez les informations du patient : </h4>

        </div>

    </div>
    <form>
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
            <label class="col-sm-12 col-md-2 col-form-label">Addresse</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="addresse" value="<?php if (isset($_POST['addresse'])) echo($_POST['addresse']); ?>">
            </div>
        </div>




    </form>
    <div class="clearfix">

        <div class="pull-right">
            <a href="#basic-form1" name="submit" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"></i> Ajouter </a>
        </div>
    </div>
<!-- Default Basic Forms End -->