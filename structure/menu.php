<div class="sidebar-menu">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="#">
                    <img src="" width="" alt=""/>
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
                <a href="index.php">
                    <i class="entypo-home"></i>
                    <span class="title">Acceuil</span>
                </a>

            </li>


            <li class="">
                <a href="?p=gestion/fournisseurs/liste_fournisseurs">
                    <i class="entypo-users"></i>
                    <span class="title">Fournisseurs</span>
                </a>

            </li>


            <li class="has-sub">
                <a href="#">
                    <i class="glyphicon glyphicon-qrcode"></i>
                    <span class="title">Stock</span>
                </a>
                <ul>
                    <li>
                        <a href="?p=gestion/articles/liste_produits">
                            <span class="title">Produits fini</span>
                        </a>
                    </li>

                    <li>
                        <a href="?p=gestion/articles/liste_composants">
                            <span class="title">Pieces Détachées</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="has-sub">
                <a href="#">
                    <i class="entypo-chart-line"></i>
                    <span class="title">Dossiers</span>
                </a>
                <ul>

                    <li>
                        <a href="?p=gestion/dossiers/liste_dossiers">
                            <span class="title">Liste des dossiers </span>
                        </a>
                    </li><!--

                    <li>
                        <a href="#?p=gestion/dossiers/liste_recap">
                            <span class="title">Recap par dossier </span>
                        </a>
                    </li>


                    <li>
                        <a href="#?p=gestion/dossiers/liste_transfert_premiere">
                            <span class="title">Transfert vers Atelier </span>
                        </a>
                    </li>


                    <li>
                        <a href="#?p=gestion/dossiers/liste_transfert_direction">
                            <span class="title">Transfert vers Direction </span>
                        </a>
                    </li>-->

                </ul>
            </li>


            <li class="has-sub">
                <a href="#">
                    <i class="entypo-users"></i>
                    <span class="title">Clients</span>
                </a>
                <ul>
                    <li>
                        <a href="?p=gestion/clients/liste_client">
                            <i class="entypo-user"> </i>
                            <span class="title">Liste des Clients</span>
                        </a>

                    </li>

                    <li>
                        <a href="#?p=gestion/clients/liste_client_tableau_dette">
                            <i class="entypo-list"></i>
                            <span class="title">Créances</span>
                        </a>
                    </li>


                    <li>
                        <a href="#?p=gestion/clients/liste_tableau_sav">
                            <i class="entypo-list"></i>
                            <span class="title">Service apres vente</span>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="has-sub">
                <a href="#">
                    <i class="entypo-paypal"></i>
                    <span class="title">Ventes</span>
                </a>
                <ul>

                    <li>
                        <a href="#gestion/ventes/afficheClient">
                            <span class="title">Commandes / Reservation</span>
                        </a>
                    </li>

                    <li>
                        <a href="?p=gestion/ventes/ajout_bl">
                            <span class="title">Bon de livraison</span>
                        </a>
                    </li>


                </ul>
            </li>


            <li class="has-sub">
                <a href="#">
                    <i class="entypo-user"></i>
                    <span class="title">Facturation</span>
                </a>
                <ul>

                    <li>
                        <a href="#gestion/ventes/afficheClient">
                            <span class="title">Factures ventes</span>
                        </a>
                    </li>


                </ul>
            </li>


            <li class="">
                <a href="?p=gestion/utilisateurs/liste_utilisateurs">
                    <i class="entypo-user"></i>
                    <span class="title">Utilisateurs</span>
                </a>
            </li>


            <li class="">
                <a href="?p=gestion/entreprise/edit_entreprise">
                    <i class="entypo-info-circled"></i>
                    <span class="title">Entreprise</span>
                </a>
            </li>

            <li class="has-sub">
                <a href="#">
                    <i class="entypo-adjust"></i>
                    <span class="title">Réglages</span>
                </a>
                <ul>

                    <li>
                        <a href="?p=gestion/reglages/liste_wilayas">
                            <span class="title">Wilaya</span>
                        </a>
                    </li>


                    <li>
                        <a href="?p=gestion/reglages/liste_communes">
                            <span class="title">Communes</span>
                        </a>
                    </li>


                    <li>
                        <a href="?p=gestion/reglages/liste_article_categories">
                            <span class="title">Categorie d'articles</span>
                        </a>
                    </li>

                    <li>
                        <a href="?p=gestion/reglages/edit_reglages">
                            <span class="title">Parametres </span>
                        </a>
                    </li>


                </ul>
            </li>


            <br>
            <br>
            <hr>
            <li class="has-sub">
                <a href="#">
                    <i class="entypo-list"></i>
                    <span class="title">Dev</span>
                </a>
                <ul>
                    <li>
                        <a href="?p=gestion/dev/index.php">
                            <span class="title">Liste </span>
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>

</div>