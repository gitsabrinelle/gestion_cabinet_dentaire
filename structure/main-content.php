<div class="main-content">
    <?php
    include 'haut.php';
    if (isset($_GET["p"])) {
        if ($_GET["p"] !== 'index' && $_GET["p"] !== 'index.php') {
            $page = $_GET["p"];

            $vars = null;
            if (($pos = strpos($page, ".php")) !== FALSE) {
                $variables = substr($page, $pos + 4);
                $vars = explode("/", $variables);
            }
            if (strlen($page) > 0) {
                $exploaded = explode(".php", $page);
                $exploadedPage = $exploaded [0] . ".php";
                if (file_exists($exploadedPage)) {
                    include($exploadedPage);
                } else {
                    include("404.php");
                }
            }
        } else
            include 'home.php';
    } else {
        include 'home.php';
    }
    ?>
</div>