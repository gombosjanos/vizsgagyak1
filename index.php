<?php


session_start();

require 'includes/db.inc.php';
require 'includes/functions.inc.php';

// default oldal
$page = 'index';

// kilépés végrehajtása
if (!empty($_REQUEST['action'])) {
        if ($_REQUEST['action'] == 'kilepes') session_unset();
}




// ki vagy be vagyok lépve?
if (!empty($_SESSION["userID"])) {
        $szoveg =": Kilépés";
        $action = "kilepes";
} else {
        $szoveg = "Belépés";
        $action = "belepes";
}



// router
if (isset($_REQUEST['page'])) {
        if (file_exists('controller/' . $_REQUEST['page'] . '.php')) {
                $page = $_REQUEST['page'];
        }
}

if (isset($_SESSION["userID"])) {
        $menupontok = array(
                'index' => "Főoldal",
                'felhasznalo' => $szoveg,
        );
}  else
        $menupontok = array(
                'index' => "Főoldal",
                'felhasznalo' => "$szoveg",
);

$title = $menupontok[$page];

if (isset($_REQUEST['regisztraciok']) and $_REQUEST['regisztraciok']) {
        $page = "regisztraciok";
        $title = "regisztraciok";
}
if (isset($_REQUEST['successfulreg']) and $_REQUEST['successfulreg']) {
        $page = "successfulreg";
        $title = "Sikeres regisztráció!";
}










include 'includes/htmlheader.inc.php';
?>

<body>
        <?php

        include 'includes/menu.inc.php';
        include 'controller/' . $page . '.php';




        ?>
</body>

</html>