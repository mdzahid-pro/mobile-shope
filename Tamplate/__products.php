<?php
    $getIdNumber = htmlentities(htmlspecialchars(mysqli_real_escape_string($db->con,$_GET["product"])));
    foreach($product->getData() as $item) :
        if($item["item_id"] == $getIdNumber) :
?>
<!-- Product -->
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item["item_image"] ??"./assets/products/1.png";?>" alt="Product 1" class="img-fluid">
                <form action="#" class="form-row pt-4 font-baloo font-size-14">
                    <div class="col">
                        <button class="btn btn-danger form-control">Proccest to Buy</button>
                    </div>
                    <div class="col">
                        <?php if(isset($_SESSION["userid"])){
                            printf("<form method=\"post\">
                                    <input type=\"hidden\" name=\"item_id\" value=\"%s\">
                                    <button class=\"font-size-12 btn btn-warning\">Add To Card</button>
                                </form>",$item["item_id"]);
                        }else{
                            printf("<a href='%s' class=\"font-size-16 btn btn-danger\">%s</a>","login.php","Login") ;
                        }?>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-size-20"><?php echo $item["item_name"] ?? "Unknown";?></h5>
                <small>By <?php echo $item["item_brand"] ?? "Unknown";?></small>
                <!-- Product Ratting -->
                <div class="d-flex">
                    <div class="text-ratting text-warning font-size-12">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                </div>
                <hr class="m-0">

                <!-- Product Price -->
                <table class="my-3">
                    <tr class="font-rale font-size-20">
                        <td>M.R.P:</td>
                        <td><strike>$<?php echo $item["item_price"] ?? 0;?></strike></td>
                    </tr>
                    <tr class="font-rale font-size-20">
                        <td>Deal Prices:</td>
                        <td class="font-size-20 font-rale text-danger">$<small>152</small><small class="text-dark ">&nbsp;&nbsp; Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-20">
                        <td>You Save:</td>
                        <td class="font-size-20 font-rale text-danger">$<small>10</small></td>
                    </tr>
                </table>
                <!-- !Product Price -->

                <!-- Policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secund">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-size-12 font-rale">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secund">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-size-12 font-rale">Hand TO Hand <br> Deliverd</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secund">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-size-12 font-rale">1Year <br> Warenty</a>
                        </div>
                    </div>
                </div>
                <!-- !Policy -->
                <hr>
                <!-- Order Detals -->
                <div id="product-ditals" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by: July 20 25</small>
                    <small>Sold By: <a href="#">Hand To Hand Electronics</a></small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                </div>
                <!-- !Order Detals -->

                <div class="row">
                    <div class="col-6">
                        <!-- Color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color</h6>
                                <div class="color-yellow-bg p-2 rounded-circle">
                                    <button class='btn font-size-14'></button>
                                </div>
                                <div class="color-secund-bg p-2 rounded-circle">
                                    <button class='btn font-size-14'></button>
                                </div>
                                <div class="color-primary-bg p-2 rounded-circle">
                                    <button class='btn font-size-14'></button>
                                </div>
                            </div>
                        </div>
                        <!-- !Color -->
                    </div>
                    <!-- Quenty Selector -->
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty:</h6>
                            <div class="d-flex font-rale px-4">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" name="" id="" data-id="pro1" class="qty-input px-2 border w-50 bg-light" value="1" disabled placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- !Quenty Selector -->
                </div>

                <!-- Size -->
                <div class="size py-3">
                    <h6 class="font-baloo">Size:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="font-size-14 p-0 btn">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="font-size-14 p-0 btn">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="font-size-14 p-0 btn">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- !Size -->
            </div>

            <!-- Product Description -->
            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?
                    <br><br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?
                </p>
            </div>
            <!-- !Product Description -->
        </div>
    </div>
</section>
<!-- !Product -->

<?php
        endif;
        endforeach;
?>