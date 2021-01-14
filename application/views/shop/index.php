<!DOCTYPE html>
<html lang="en">
<head>
  <title>Skenray Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    width: 350px
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

  </style>
</head>
<body>

<div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
    <?php foreach ($products as $product): $image = explode("|",$product->images); $features = explode("|",$product->features); ?>
        <div class="col-md-4 mt-2 singleProduct">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="<?php echo ($image[0] != '') ? base_url().'uploads/products/'.$image[0] : 'https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg'; ?>" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="<?= $product->id ?>" class="text-default mb-2" data-abc="true"><?= $product->product_name ?></a> </h6> <a href="#" class="text-muted" data-abc="true"><?=$features[0];?></a>
                    </div>
                    <h3 class="mb-0 font-weight-semibold"><b>Rs.<?= $product->dicount_price; ?></b> <del>Rs.<?= $product->price; ?></del> (<?= number_format((float) 100 * ($product->price - $product->dicount_price) / $product->price, 2, '.', '').'%'; ?>)</h3>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                    <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
        

    </div>
    <center><h4><p class="paginationLinks"><?php echo $links; ?></p></h4></center>
</div>

</body>
</html>
