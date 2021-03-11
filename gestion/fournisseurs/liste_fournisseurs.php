    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">

                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"> <h4>Acceuil</h4> </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Patients</li>
                                </ol>
                            </nav>
                        </div>

                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary " href="?p=gestion/fournisseurs/ajout_fournisseurs.php">
                                    Ajouter Patient<i class="entypo-user-add"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">La liste des patients </h4>

                    </div>
                    <div class="pb-20">
                        <?php
                        $sql = "SELECT * FROM `patient`";
                        if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) >= 0) { ?>
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Nom</th>
                                    <th>prénom</th>
                                    <th>Date de naissance </th>
                                    <th>n°Tel</th>
                                    <th>Addresse</th>
                                <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td><?php echo $row["nom"]?></td>
                                    <td><?php echo $row["prenom"]?></td>
                                    <td><?php echo $row["date_de_naissance"]?></td>
                                    <td><?php echo $row["n_tel"]?></td>
                                    <td><?php echo $row["email"]?></td>
                                    <td><?php echo $row["adresse"]?></td>

                                 <!--   <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td> -->
                                </tr>
                               
                               
                               
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Datatable End -->