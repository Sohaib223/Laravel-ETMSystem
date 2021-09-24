<?php


if (!isset($_SESSION["userinfo"]) && !isset($_SESSION["designation"]))
{

    $URL="Index.php";
    echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
    echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';


}





?>