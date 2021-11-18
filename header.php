<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mobile-Shopee</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <!-- Owl-Carousel -->
  <link rel="stylesheet" href="./css/owl.carousel.min.css" />
  <!-- Owl-Carousel default theme -->
  <link rel="stylesheet" href="./css/owl.theme.default.min.css" />
  <!-- Font-Awesome -->
  <script src="./js/all.min.js"></script>
  <!-- Custom style-sheet -->
  <link rel="stylesheet" href="style.css" />
  <?php
  #require functions.php file
  require_once("functions.php");
  ?>
</head>
<!-- start #header -->
<header id="header">
  <div class="strip d-flex justify-content-between bg-light">
    <p class="font-rale font-size-12 text-black-50 m-0">
      Jordan Calderon 430-985 Eleifend St.Duluth Washington 92611(427)930-5255
    </p>
    <div class="font-size-14 font-rale">
      <a href="#" class="px-3 border-right border-left text-dark">Login</a>
      <a href="#" class="px-3 border-right text-dark">Wishlist(0)</a>
    </div>
  </div>
  <!-- Primary Navigation -->
  <nav class="navbar navbar-expand-md navbar-dark color-second-bg">
    <a class="navbar-brand font-italic">Mobile Shopee</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
      <ul class="navbar-nav m-auto font-rubik">
        <li class="nav-item active">
          <a class="nav-link" href="#">On sale <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product <i class="fas fa-chevron-down"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Coming soon</a>
        </li>
      </ul>
      <form class="font-size-14 font-rale" method="get" action="#">
        <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
          <span class="font-size-16 px-2 text-white">
            <i class="fas fa-shopping-cart"></i>
          </span>
          <span class="px-3 py-2 rounded-pill text-dark bg-light font-weight-bold">
            <?= count($product->getData("cart")); ?>
          </span>
        </a>
      </form>
    </div>
  </nav>
</header>
<!-- !start #header -->
<!-- start #main-site -->
<main id="main-site">