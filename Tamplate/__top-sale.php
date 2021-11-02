<?php

    shuffle($getData);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $item_id = htmlentities(htmlspecialchars($_POST["item_id"]));
        //call cart
        $passData = $cart->getDataCart($userId,$item_id);
    }
?>

<!-- Top Sale -->
<section id="topsale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4><hr>
        <!-- Owl Carousel  -->
        <div class="owl-carousel owl-theme">
            <?php foreach($getData as $item){ ?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf("product.php?product=%s",$item["item_id"]);?>"><img src="<?php echo $item["item_image"]??"./assets/products/1.png";?>" alt="Product 1"></a>
                    <div class="text-center">
                        <h4 class="font-size-16 m-0 py-0"><?php echo $item["item_name"]??"Unknown";?></h4>
                        <div class="text-ratting text-warning font-size-12">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price-box py-2">
                            <span>$<?php echo $item["item_price"]??"00.00";?></span>
                        </div>
                        <?php if(isset($_SESSION["userid"])){
                            printf("<form method=\"post\">
                                    <input type=\"hidden\" name=\"item_id\" value=\"%s\">
                                    <button class=\"font-size-12 btn btn-warning\">Add To Card</button>
                                </form>",$item["item_id"]);
                        }else{
                            printf("<a href='%s' class=\"font-size-12 btn btn-danger\">%s</a>","login.php","Login") ;
                        }?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- Owl Carousel  -->

    </div>
</section>
<!-- !Top Sale -->