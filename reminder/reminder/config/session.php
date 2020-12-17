<?php 

if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
    header("location: .");
    exit;
}
?>