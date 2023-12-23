<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <section class="feature-products">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center feature-title">
              <h2>FEATURED PRODUCTS</h2>
              <a class="feature-active" href="#">BEST SELLER</a> | <a href="#">NEW ARRIVAL</a> | <a href="#">MOST WANTED</a>
            </div>
            @foreach ($products as $product )
                <div class="col-md-3 col-sm-6">
              <div class="product-grid">
                <div class="product-image">
                  <a href="#" class="image" style="background-color:#F3F3F3;">
                    <img class="pic-1" src="http://www.free-css.com/assets/files/free-css-templates/preview/page219/garage/assets/image/featurporch1.jpg">
                  </a>
                  <a class="add-to-cart" href=""> + </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="#">Product Name</a></h3>

                  <div class="price">$21.60</div>
                  <ul class="rating">
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star"></li>
                    <li class="fas fa-star disable"></li>
                  </ul>
                </div>

                <div class="action-buttons">
                  <a class="btn-outline">ADD TO CART</a>
                  <a class="btn-outline-icon"><i class="far fa-heart"></i></a>
                  <a class="btn-outline-icon"><i class="fas fa-chart-pie"></i></a>
                </div>
              </div>
            </div>
            @endforeach


          </div>
        </div>
      </section>
</body>
</html>
