<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Commerce Website | Home</title>

  <!-- LINKS -->
  <?php include 'includes/links.php' ?>
</head>

<body>

  <!-- HEADER -->
  <?php include 'includes/header.php' ?>

  <!-- IMAGE -->
  <div class="boxs container">
    <div class="button">
      <button class="btm btmm">Shop Now&#8594;</button>
    </div>
  </div>

  <!-- FEATURE -->
  <div class="feature-head container">
    <h2 class="head">Our Products</h2>
  </div>
  <div class="products container">
    <div class="colm">
      <img class="product_img" src="img/smart phone.png" alt="">
      <h4 class="name_product">Smart Phone</h4>
      <p class="name_product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis officiis voluptatem accusantium distinctio ea similique sed nobis.</p>
      <div class="buy">
        <!-- <div class="product_price container">&#8377;10,999</div> -->
        <button class="product_btn my-2">Buy Now</button>
      </div>
    </div>
    <div class="colm">
      <img class="product_img" src="img/smartwatch.png" alt="">
      <h4 class="name_product">Smart Phone</h4>
      <p class="name_product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis officiis voluptatem accusantium distinctio ea similique sed nobis.</p>
      <div class="buy">
        <!-- <div class="product_price container">&#8377;10,999</div> -->
        <button class="product_btn my-2">Buy Now</button>
      </div>
    </div>
    <div class="colm">
      <img class="product_img" src="img/ear_buds.png" alt="">
      <h4 class="name_product">Smart Phone</h4>
      <p class="name_product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis officiis voluptatem accusantium distinctio ea similique sed nobis.</p>
      <div class="buy">
        <!-- <div class="product_price container">&#8377;10,999</div> -->
        <button class="product_btn my-2">Buy Now</button>
      </div>
    </div>

  </div>

  <div class="container">
    <center>
      <br><br>
      <button class="btn btnn" data-toggle="popover" data-content="Our products increasing day by day you must to check them😀" data-placement="bottom">
        Explore Our Products&#8594;
      </button>
    </center>
  </div>
  <script>
    $('[data-toggle="popover"]').popover({
      title: "Our Team",
      trigger: "hover"
    });
  </script>

  <!-- POLICIES -->
  <div class="poli_container">
    <div class="policies-head container">
      <h2 class="head">Our Policies</h2>
    </div>
    <div class="policies d-flex container">
      <div class="colm my-4">
        <img class="po_image" src="img/vecteezy_COVID-19-_-Technology-Illustration-02_in0121.svg" alt="">
        <h4 class="name_po">Buy Online</h4>
      </div>

      <div class="colm my-4">
        <img class="po_image" src="img/vecteezy_untact_illustration3_aa0121.svg" alt="">
        <h4 class="name_po">Payment After Delivery</h4>
      </div>

      <div class="colm my-4">
        <img class="po_image" src="img/vecteezyonline-delivery-illustrationyd0721.svg" alt="">
        <h4 class="name_po">Easy Returns</h4>
      </div>
    </div>
  </div>


  <!-- OUR CLIENTS -->
  <div class="client_container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/client.jfif" class="d-block w-100" alt="...">
          <div class="carousel-caption client_content d-none d-md-block">
            <h3>Shop What You Want!!</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/client2.jfif" class="d-block w-100" alt="...">
          <div class="carousel-caption client_content d-none d-md-block">
            <h3>Shop That You Like!!</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/client3.jfif" class="d-block w-100" alt="...">
          <div class="carousel-caption client_content d-none d-md-block">
            <h3>We Will Give You Discount</h3>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>


  <!-- FOOTER -->
  <?php include 'includes/footer.php' ?>

  <!-- LOGIN MODAL -->
  <?php include 'includes/loginModal.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>