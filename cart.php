<?php
ob_start();
#include header.php file
require_once("header.php");
?>

<?php
#include cart area
require_once("Template/_cart.php");
/* !include cart area*/
?>

<?php
#include cart area
require_once("Template/_wishlist.php");
/* !include cart area*/
?>

<?php
#include new phones
require_once("Template/_new-phones.php");
/* !include new phones*/
?>

<?php
#include footer.php file
require_once("footer.php");
?>