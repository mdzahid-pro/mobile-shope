<!-- Shopping Card Section -->
<section id="cart">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>
        <!-- Shopping Cart Item -->
        <div class="row">
            <div class="col-9">
                <?php
                    //$product->tottalValue($userId);
                    $i = 1;
                    foreach ($product->getDataUser("$userId","cart") as $items) :

                        $cart = $product->getProduct($items["item_id"]);
                        $subTotal[] = array_map(function($item){
                    ?>

                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item["item_image"] ?? "./assets/products/2.png";?>" alt="Cart Product Item" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-18"> <?php echo $item["item_name"] ?? "Unknowun";?></h5>
                        <span>By <?php echo $item["item_brand"];?></span>
                        <!-- Product Ratting -->
                        <div class="d-flex">
                            <div class="text-ratting text-warning font-size-12">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20,534 ratings </a>
                        </div>
                        <!-- !Product Ratting -->

                        <!-- Product Qty -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="pro<?php  echo $item["item_id"]; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" class="qty-input w-100" data-id="pro<?php echo $item["item_id"];?>" disabled placeholder="1" value="1">
                                <button class="qty-down border bg-light" data-id="pro<?php echo $item["item_id"];?>"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <button class="font-baloo btn text-danger px-3 border-right">Delete</button>
                            <button class="font-baloo btn text-danger">Save For Latter</button>
                        </div>
                        <!-- !Product Qty -->

                    </div>
                    <div class="col-sm-2">
                        <div class="font-size-20 text-danger font-baloo text-right">
                            $ <span class="product_price"><?php echo $item["item_price"];?></span>
                        </div>
                    </div>
                </div>
                <?php  return $item["item_price"];
                        },$cart);
                        endforeach;
                        print_r($subTotal);
                        echo $cart->getSum($subTotal);
                ?>
            </div>
            <!-- Cart Subtitle Section -->
            <div class="col-3">
                <div class="sub-total text-center mt-2 border">
                    <div class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</div>
                    <div class="py-4 border-top">
                        <h4 class="font-baloo font-size-20">Subtotal ( 1 item): <br><span class="text-danger text-bold"><?php echo isset($subTotal) ? $cart->getSum($subTotal):0  ?></span></h4>
                    </div>
                    <button class="btn btn-warning text-light mb-4 font-baloo">Proceed To Buy</button>
                </div>
            </div>
            <!-- !Cart Subtitle -->
        </div>
        <!-- !Shopping Cart Item -->
    </div>
</section>
<!-- !Shopping Card Section -->