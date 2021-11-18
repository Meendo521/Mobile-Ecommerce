<?php
#request method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["delete-cart-submit"])) {
    # call method deleteWishList
    #$deletedRecord = $cart->deleteWishList($_POST["item_id"]);
  }
}
?>
<!-- Shopping cart section  -->
<section id="cart" class="py-3 mb-5">
  <div class="container-fluid w-75">
    <h5 class="font-baloo font-size-20">Wishlist</h5>

    <!--  shopping cart items   -->
    <div class="row">
      <div class="col-sm-8">
        <?php
        foreach ($product->getData('wishlist') as $item) :
          $Cart = $product->getProduct($item['item_id']);
          $subTotal[] = array_map(function ($item) {
        ?>
            <!-- cart item -->
            <div class="row border-top py-3 mt-3">
              <div class="col-sm-2">
                <img src=" <?= htmlentities($item["item_image"]) ?? "../assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid" />
              </div>
              <div class="col-sm-8">
                <h5 class="font-baloo font-size-20"> <?= htmlentities($item["item_name"]) ?? "unknown" ?></h5>
                <small>by <?= htmlentities($item["item_brand"]) ?? "brand" ?></small>

                <!-- product rating -->
                <div class="d-flex">
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                </div>
                <!--  !product rating-->

                <!-- product qty -->
                <div class="qty d-flex pt-2">
                  <form method="post">
                    <input type="hidden" name="item_id" value="<?= $item["item_id"] ?? 0 ?>">
                    <button name="delete-cart-submit" type="submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">
                      Delete
                    </button>
                    <button name="" type="submit" class="btn font-baloo text-danger">
                      Add to Cart
                    </button>
                </div>
                </form>
                <!-- !product qty -->
              </div>

              <div class="col-sm-2 text-right">
                <div class="font-size-20 text-danger font-baloo">
                  $<span class="product_price" data-id="<?= $item["item_id"] ?? "0" ?>">
                    <?= htmlentities($item["item_price"]) ?? "0" ?>
                  </span>
                </div>
              </div>
            </div>
            <!-- !cart item -->
        <?php
            return $item["item_price"];
          }, $Cart); #closing array_map function
        endforeach;
        ?>
      </div>
    </div>
    <!--  !shopping cart items   -->
  </div>
</section>
<!-- !Shopping cart section  -->