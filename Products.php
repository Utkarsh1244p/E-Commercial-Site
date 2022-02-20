<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Commerce Website | Products</title>

  <!-- LINKS -->
  <?php include 'includes/links.php' ?>
</head>

<body>
  <!-- HEADER -->
  <?php include 'includes/header.php' ?>


  <!-- FEATURE -->
  <div class="feature-head container">
    <h2 class="head">Our Products</h2>
  </div>
  <div class="products container my-4">
    <div class="colm">
      <img class="product_img" src="img/smart phone.png" alt="">
      <h4 class="name_product">Vivo M2</h4>
      <p class="name_product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis officiis voluptatem
        accusantium distinctio ea similique sed nobis.</p>
      <div class="buy">
        <!-- <div class="product_price container">&#8377;10,999</div> -->
        <button class="product_btn my-2">Buy Now</button>
      </div>
    </div>
    <div class="colm">
      <img class="product_img" src="img/smartwatch.png" alt="">
      <h4 class="name_product">Smart Phone</h4>
      <p class="name_product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis officiis voluptatem
        accusantium distinctio ea similique sed nobis.</p>
      <div class="buy">
        <!-- <div class="product_price container">&#8377;10,999</div> -->
        <button class="product_btn my-2">Buy Now</button>
      </div>
    </div>
    <div class="colm">
      <img class="product_img" src="img/ear_buds.png" alt="">
      <h4 class="name_product">Boat Nirvana Air</h4>
      <p class="name_product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis officiis voluptatem
        accusantium distinctio ea similique sed nobis.</p>
      <div class="buy">
        <!-- <div class="product_price container">&#8377;10,999</div> -->
        <button class="product_btn my-2">Buy Now</button>
      </div>
    </div>
  </div>
  <div class="products container">
    <div class="colm">
      <img class="product_img" src="img/rolex2.png" alt="">
      <h4 class="name_product">Rolex</h4>
      <p class="name_product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis officiis voluptatem
        accusantium distinctio ea similique sed nobis.</p>
      <div class="buy">
        <!-- <div class="product_price container">&#8377;10,999</div> -->
        <button class="product_btn my-2">Buy Now</button>
      </div>
    </div>
    <div class="colm">
      <img class="product_img" src="img/laptop.png" alt="">
      <h4 class="name_product">Asus Zenbook</h4>
      <p class="name_product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis officiis voluptatem
        accusantium distinctio ea similique sed nobis.</p>
      <div class="buy">
        <!-- <div class="product_price container">&#8377;10,999</div> -->
        <button class="product_btn my-2">Buy Now</button>
      </div>
    </div>
    <div class="colm">
      <img class="product_img" src="img/redmi note 9 pro max.png" alt="">
      <h4 class="name_product">Redmi Note 9 Pro Max</h4>
      <p class="name_product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis officiis voluptatem
        accusantium distinctio ea similique sed nobis.</p>
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


  <!-- FOOTER -->
  <?php include 'includes/footer.php' ?>


  <!-- LOGIN MODAL -->
  <?php include 'includes/loginModal.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>