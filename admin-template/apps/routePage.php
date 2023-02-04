<?php

$page = (isset($_GET["page"])) ? $_GET["page"] : "";


switch ($page) {
    case 'home':
        include "index.php";
        break;

    case 'data-siswa':
        include "data-siswa.php";
        break;

    case 'data-kosong':
        include "data-kosong.php";
        break;

    default:
        include "../404.php";
}
?>
