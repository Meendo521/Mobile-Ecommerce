<?php
ob_start();

#include header.php file
require_once("header.php");
?>

<?php
#include banner area
require_once("Template/_banner-area.php");
/* !include banner area*/
?>

<?php
#include top sale
require_once("Template/_top-sale.php");
/* !include top sale*/
?>

<?php
#include special price
require_once("Template/_special-price.php");
/* !include special price*/
?>

<?php
#include banner ads
require_once("Template/_banner-ads.php");
/* !include banner ads*/
?>

<?php
#include new phones
require_once("Template/_new-phones.php");
/* !include new phones*/
?>

<?php
#include blogs area
require_once("Template/_blogs.php");
/* !include blogs area*/
?>

<?php
#include footer.php file
require_once("footer.php");
?>