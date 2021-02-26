<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Admin Panel"/>
        <meta name="author" content=""/>
        <link rel="icon" href="../assets/images/favicon.ico">
        <title> Gestion Commercial | Login </title>
        <link rel="stylesheet" href="../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" href="../assets/css/font-icons/entypo/css/entypo.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/neon-core.css">
        <link rel="stylesheet" href="../assets/css/neon-theme.css">
        <link rel="stylesheet" href="../assets/css/neon-forms.css">
        <link rel="stylesheet" href="../assets/css/custom.css">
        <script src="../assets/js/jquery-1.11.3.min.js"></script>
        <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../assets/js/html5shiv.min.js"></script>
        <script src="../assets/js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            function startup() {
                $("#wrapper").fadeIn(500);
            }
        </script>
        <?php
        $system_id = "";
        ?>
    </head>
    <body class="page-body login-page login-form-fall" onload="startup()">
        <div id="wrong pass">
            <?php
            $able = 0;
            include '../model/global.php';
            session_start();
            
            if (isset($_GET['usr_email']) && isset($_GET['pwd'])) {
                $tim = date("H:i", time());
                $dat = date("Y-m-d");
                $pass = "";
                $username = $_GET['usr_email'];
                $password = strtolower($_GET['pwd']);
                $ip = $_SERVER['REMOTE_ADDR'];
                $request = mysqli_query($link, "SELECT * FROM users WHERE user = '" . strtolower($username) . "' ") or die (mysqli_error($link));
                if (mysqli_num_rows($request)) {
                    while ($ligne = mysqli_fetch_array($request)) {
                        $_SESSION["id"] = $ligne["id"];
                        if (!strcmp($ligne["user"], "System")) {
                            $system_id = $ligne["id"];
                        } else {
                            $able = $ligne['etat'];
                            $pass = $ligne['pass'];
                            $id_user = $ligne["id"];
                            $web = $ligne['web'];
                        }
                    }
                    if (strtolower(($pass)) === strtolower(md5($password))) {
                        $_SESSION['username'] = $username;
                        $_SESSION["id"] = $ligne["id"];
                        $needle = "192";
                        $local_acces = 0;
                        if (strncmp($ip, "192", 3) == 0) {
                            $local_acces = 1;
                        }
                        if (strncmp($ip, "127", 3) == 0) {
                            $local_acces = 1;
                        }
                        if (strncmp($ip, "::1", 3) == 0) {
                            $local_acces = 1;
                        }
                        if ($web === "1") {
                            if ($able === "1") {
                                $word = $username . " est en line ( $tim )";
                                header("Location:../index.php");
                            } else
                                echo("Compte Desactivé");
                        }
                        if ($local_acces == 1 && $web === "0") {
                            if ($able === "1") {
                                $word = $username . " est en line ( $tim )";
                                header("Location:../index.php");
                            } else
                                echo("Erreur 101 : Compte Desactivé");
                        }
                        if ($local_acces == 0 && $web === "0") {
                            echo("Erreur 102 : Accés par Web interdit ");
                        }
                    } else
                        echo("<center>Erreur 103 : Mot de passe Incorecte !!</center>");
                } else
                    echo("<center>Erreur 104 : Nom d'utilisateur Incorecte !!</center>");
            }?>
        </div>
        <!-- This is needed when you send requests via Ajax -->
        <script type="text/javascript">
            var baseurl = '';
        </script>
        <div class="login-container">
            <div class="login-header login-caret">
                <div class="login-content">
                    <a href="../index.php" class="logo">
                        <img src="../assets/images/logo.png" width="120" alt=""/>
                    </a>
                    <p class="description">Cher Utilisateur,Connectez-Vous pour acceder à votre compte
                    </p>
                    <!-- progress bar indicator -->
                    <div class="login-progressbar-indicator">
                        <h3>43%</h3>
                        <span>logging in...</span>
                    </div>
                </div>
            </div>
            <div class="login-progressbar">
                <div></div>
            </div>
            <div class="login-form" id="wrapper">
                <div class="login-content">
                    <form name="login-form" class="login-form" action="login.php" method="GET" role="form">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>
                                <input type="text" class="form-control" name="usr_email" id="username" placeholder="Utilisateur"
                                       autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-key"></i>
                                </div>
                                <input type="password" class="form-control" name="pwd" id="password" placeholder="Mot de Passe"
                                       autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-login" name="doLogin" id="doLogin3">
                                <i class="entypo-login"></i>
                                Connecter
                            </button>
                        </div>
                    </form>
                    <div class="login-bottom-links">

                        <br/>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom scripts (common) -->
        <script src="../assets/js/gsap/TweenMax.min.js"></script>
        <script src="../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
        <script src="../assets/js/bootstrap.js"></script>
        <script src="../assets/js/joinable.js"></script>
        <script src="../assets/js/resizeable.js"></script>
        <script src="../assets/js/neon-api.js"></script>
        <script src="../assets/js/jquery.validate.min.js"></script>
        <script src="../assets/js/neon-login.js"></script>
        <!-- JavaScripts initializations and stuff -->
        <script src="../assets/js/neon-custom.js"></script>
        <!-- Demo Settings -->
        <script src="../assets/js/neon-demo.js"></script>
    </body>
</html>
