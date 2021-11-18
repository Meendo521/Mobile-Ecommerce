<?php
shuffle($product_shuffle);

#request method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["top_sale_submit"])) {
    # call method addToCart
    $cart->addToCart($_POST["user_id"], $_POST["item_id"]);
  }
}
?>

<!-- Top sales -->
<section id="top-sale">
  <div class="container py-5">
    <h4 class="font-rubik font-size-20">Top Sale</h4>
    <!-- owl-carousel -->
    <div class="owl-carousel owl-theme">
      <?php foreach ($product_shuffle as $item) : ?>
        <div class="item py-2">
          <div class="product font-rale">
            <a href="<?php printf('%s?id=%s', 'product.php', $item['item_id']); ?>">
              <img class="img-fluid" src=" <?= htmlentities($item['item_image']) ?? "./assets/products/1.png"; ?>" alt="product1" />
            </a>
            <div class="text-center">
              <h6><?= htmlentities($item['item_name']) ?? "unknow"; ?></h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$<?= htmlentities($item['item_price']) ?? "0"; ?></span>
              </div>
              <form method="post">
                <input class="form-control" type="hidden" name="item_id" value="<?= htmlentities($item['item_id']) ?? "1"; ?>">
                <input class="form-control" type="hidden" name="user_id" value="<?= "1"; ?>">
                <?php
                if (in_array($item['item_id'],  $cart->getCartId($product->getData("cart")) ?? [])) {
                  echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button';
                } else {
                  echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12"> Add to Cart
                </button>';
                }
                ?>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- owl-carousel -->
</section>
<!-- !Top sales -->