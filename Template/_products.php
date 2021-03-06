    <!-- products -->
    <?php
    $id = $_GET['id'] ?? 1;
    foreach ($product->getData() as $item) :
      if ($item['item_id'] == $id) :
    ?>
        <section id="product" class="py-3">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <img class="img-fluid" src="<?= htmlentities($item['item_image'] ?? "./assets/products/1.png") ?>" alt="product" />
                <div class="form-row pt-4 font-size-16 font-baloo">
                  <div class="col">
                    <button class="btn btn-danger form-control" type="submit">
                      Proceed to Buy
                    </button>
                  </div>
                  <div class="col">
                    <button class="btn btn-warning form-control" type="submit">
                      Add to Cart
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?= htmlentities($item['item_name'] ?? "Unknown") ?></h5>
                <small>by <?= htmlentities($item['item_brand'] ?? "Unknown") ?></small>
                <div class="d-flex">
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <a href="#" class="px-2 font-rale ont-size-14">
                    20,534 ratings| 1000+ answered questions
                  </a>
                </div>
                <hr class="m-0" />
                <!-- pricing section -->
                <table class="my-3">
                  <tr class="font-rale font-size-14">
                    <td>M.R.P:</td>
                    <td class="font-italic"><strike>$162.00</strike></td>
                  </tr>
                  <tr class="font-rale font-size-14">
                    <td>Deal Price:</td>
                    <td class="font-size-20 text-danger">
                      $<span><?= htmlentities($item['item_price'] ?? "0") ?></span>
                      <small class="text-dark font-size-12">
                        &nbsp;&nbsp;Inclusive of all taxes</small>
                    </td>
                  </tr>
                  <tr class="font-rale font-size-14">
                    <td>You save:</td>
                    <td>
                      <span class="font-size-16 text-success"> $10.00</span>
                    </td>
                  </tr>
                </table>
                <!-- !pricing section -->

                <!-- policy -->
                <div id="policy">
                  <div class="d-flex">
                    <div class="return text-center mr-5">
                      <div class="font-size-20 my-2 color-second">
                        <span class="border p-3 rounded-pill">
                          <i class="fas fa-retweet"></i>
                        </span>
                      </div>
                      <a href="#" class="font-rale font-size-12">10 Dyas<br />Replacement</a>
                    </div>
                    <div class="return text-center mr-5">
                      <div class="font-size-20 my-2 color-second">
                        <span class="border p-3 rounded-pill">
                          <i class="fas fa-truck"></i>
                        </span>
                      </div>
                      <a href="#" class="font-rale font-size-12 font-italic">Meen Tycoon<br />Deliver</a>
                    </div>
                    <div class="return text-center mr-5">
                      <div class="font-size-20 my-2 color-second">
                        <span class="border p-3 rounded-pill">
                          <i class="fas fa-check-double"></i>
                        </span>
                      </div>
                      <a href="#" class="font-rale font-size-12">1 year<br />Warranty</a>
                    </div>
                  </div>
                </div>
                <!-- !policy -->
                <hr />
                <!-- order details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                  <small>Delivery by:Mar - Apr 1</small>
                  <small>Sold by: <a href="#">Daily Electronics</a>(4.5 out of 5 |
                    18,198 ratings)</small>
                  <small>
                    <i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                </div>
                <!-- !order details -->

                <div class="row">
                  <div class="col-6">
                    <!-- colors -->
                    <div class="color my-3">
                      <div class="d-flex justify-content-between">
                        <h6 class="font-baloo">Color</h6>
                        <div class="p-2 color-yellow-bg rounded-circle">
                          <button class="btn font-size-14"></button>
                        </div>
                        <div class="p-2 color-primary-bg rounded-circle">
                          <button class="btn font-size-14"></button>
                        </div>
                        <div class="p-2 color-second-bg rounded-circle">
                          <button class="btn font-size-14"></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- product qty section -->
                  <div class="qty d-flex">
                    <h6 class="font-baloo">Qty</h6>
                    <div class="px-4 d-flex font-rale">
                      <button class="qty-up border bg-light" data-id="pro1">
                        <i class="fas fa-angle-up"></i>
                      </button>
                      <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light text-center" disabled value="1" placeholder="1" />
                      <button data-id="pro1" class="qty-down border bg-light">
                        <i class="fas fa-angle-down"></i>
                      </button>
                    </div>
                  </div>
                  <!-- !product qty section -->
                </div>

                <!-- Size -->
                <div class="size my-3">
                  <h6 class="font-baloo">Size</h6>
                  <div class="d-flex justify-content-between w-75">
                    <div class="font-rubik border p-2 border-success">
                      <button class="btn p-0 font-size-14" type="button">
                        4GB RAM
                      </button>
                    </div>
                    <div class="font-rubik border p-2 border-danger">
                      <button class="btn p-0 font-size-14" type="button">
                        8GB RAM
                      </button>
                    </div>
                    <div class="font-rubik border p-2 border-primary">
                      <button class="btn p-0 font-size-14" type="button">
                        12GB RAM
                      </button>
                    </div>
                  </div>
                </div>
                <!-- Size -->
              </div>

              <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr />
                <p class="font-rale font-size-14">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                  soluta praesentium magni, asperiores fuga tempora quia quas
                  suscipit reprehenderit a molestiae! Doloremque quidem perferendis,
                  iure error sit dicta fuga possimus?
                </p>
                <p class="font-rale font-size-14">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                  soluta praesentium magni, asperiores fuga tempora quia quas
                  suscipit reprehenderit a molestiae! Doloremque quidem perferendis,
                  iure error sit dicta fuga possimus?
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- !product -->
    <?php
      endif;
    endforeach;
    ?>