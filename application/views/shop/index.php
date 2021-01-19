<!DOCTYPE html>
<html lang="en">
<head>
  <title>Skenray Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="57x57" href="http://localhost/skanray/assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="http://localhost/skanray/assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="http://localhost/skanray/assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="http://localhost/skanray/assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="http://localhost/skanray/assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="http://localhost/skanray/assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="http://localhost/skanray/assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="http://localhost/skanray/assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/skanray/assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="http://localhost/skanray/assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/skanray/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="http://localhost/skanray/assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/skanray/assets/favicon/favicon-16x16.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    margin: 0;
    font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: .8125rem;
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    background-color: #2196F3
}

.mt-50 {
    margin-top: 50px
}

.mb-50 {
    margin-bottom: 50px
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .1875rem
}

.card-img-actions {
    position: relative
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    text-align: center
}

.card-img {
    /* width: 350px */
    height: auto;
}

.star {
    color: red
}

.bg-cart {
    background-color: orange;
    color: #fff
}

.bg-cart:hover {
    color: #fff
}

.bg-buy {
    background-color: green;
    color: #fff;
    padding-right: 29px
}

.bg-buy:hover {
    color: #fff
}

a {
    text-decoration: none !important
}
.singleProduct {
    padding: 10px;
}
.ajaxloader{
        width: 33px;
        float: right;
        padding: 2px;
    }
    .ajax_modal
    {
        position: fixed;
        z-index: 999;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        background-color: Black;
        filter: alpha(opacity=60);
        opacity: 0.6;
        -moz-opacity: 0.8;
    }
    .center
    {
        z-index: 1000;
        margin: 300px auto;
        padding: 10px;
        width: 150px;
        background-color: White;
        border-radius: 10px;
        filter: alpha(opacity=100);
        opacity: 1;
        -moz-opacity: 1;
    }
    .center img
    {
        height: 128px;
        width: 128px;
    }
  </style>
</head>
<body>

<div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <div class="col-md-8">
            <?php foreach ($products as $product): $image = explode("|",$product->images); $features = explode("|",$product->features); ?>
            <input type="hidden" id="price_<?= $product->id; ?>" value="<?= $product->dicount_price; ?>">
            <input type="hidden" id="quenty_<?= $product->id; ?>" value="1">
                <div class="col-md-4 mt-2 singleProduct">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions"> <img src="<?php echo ($image[0] != '') ? base_url().'uploads/products/'.$image[0] : 'https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg'; ?>" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                        </div>
                        <div class="card-body bg-light text-center">
                            <div class="mb-2">
                                <h6 class="font-weight-semibold mb-2"> <a href="<?= base_url().'product/'.implode("-",explode(" ",$product->product_name)); ?>" class="text-default mb-2" data-abc="true"><?= $product->product_name ?></a> </h6> <a href="#" class="text-muted" data-abc="true"><?=$features[0];?></a>
                            </div>
                            <h3 class="mb-0 font-weight-semibold"><b>Rs.<?= $product->dicount_price; ?></b> <del>Rs.<?= $product->price; ?></del> (<?= number_format((float) 100 * ($product->price - $product->dicount_price) / $product->price, 2, '.', '').'%'; ?>)</h3>
                            <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                            <button type="button" class="btn bg-cart add_to_card" data-id="<?= $product->id; ?>"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <center><h4><p class="paginationLinks"><?php echo $links; ?></p></h4></center>
        </div>

        <div class="col-sm-4">
    <div class="well">
      <h3>My Card</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quenty</th>
            <th></th>
          </tr>
        </thead>
        <tbody id="show_card_produst"></tbody>
      </table>
    </div>
   
  </div>
    </div>
</div>

<!-- AJAX Loader Start-->

<div class="ajax_modal" style="display: none; z-index: 7777777777777777;">
      <div class="center">
          <img alt="" src="<?php echo base_url(); ?>assets/loader.gif" />
      </div>
</div>

<!-- AJAX Loader End-->

<!-- CART SCRIPT START -->
<script>
var BASE_URL = '<?php echo base_url(); ?>';
</script>
<script src="<?php echo base_url().'assets/js/cart.js';?>"></script>

<!-- CART SCRIPT END -->
</body>
</html>
