<?php
    //Make Button
   /* $brand = array_map(function($pro){return $pro["item_brand"];},$getData);
    $unique = array_unique($brand);
    sort($unique);*/


   $brand = array_map(function($pro){return $pro["item_brand"];},$getData);
   $unique = array_unique($brand);
   sort($unique);
    shuffle($getData);
?>
<!-- Special Price -->
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size:20px">Special Price</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn btn-checked" data-filter="">All Brand</button>
            <?php array_map(function($brand){printf("<button class=\"btn btn-checked\" data-filter=\".%s\">%s</button>",$brand,$brand);},$unique);?>
        </div>
        <div class="grid">
            <?php array_map(function($item){ ?>
            <div class="grid-item border <?php echo $item["item_brand"]?>">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="<?php printf("product.php?product=%s",$item["item_id"]);?>"><img src="<?php echo $item["item_image"] ?? "./assets/products/13.png";?>" alt="Product 1"></a>
                        <div class="text-center">
                            <h4 class="font-size-16 m-0 py-0"><?php echo $item["item_name"] ?? "Unknown";?></h4>
                            <div class="text-ratting text-warning font-size-12">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price-box py-2">
                                <span>$<?php echo $item["item_price"] ?? 0 ;?></span>
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
            </div>
            <?php },$getData);?>
        </div>
    </div>
</section>
<!-- !Special Price -->