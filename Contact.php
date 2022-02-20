<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Commerce Website | Details</title>
  
  <!-- LINKS -->
  <?php include 'includes/links.php' ?>
</head>

<body>
  <!-- HEADER -->
  <?php include 'includes/header.php' ?>

  <div class="contact_container container">
    <center>
      <div class="g_map auto">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30045.026832968022!2d79.189593!3d19.7284407!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93ddb58d1b49%3A0xcfcead772f6ce1c9!2sGoogle%2C%20Hyderabad!5e0!3m2!1sen!2sin!4v1642605388199!5m2!1sen!2sin" width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>


      <div class="contact_content container ">
        <a href="https://api.WhatsApp.com/send?phone=+918329778934" target="_blank"><img style="height: 30px;" src="img/room_black_24dp.svg"> </i></a>&nbsp;&nbsp;&nbsp;
        <a href="tel: +918329778934"><img style="height: 30px;" src="img/call_black_24dp.svg"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="mailto: utkarshgayguwal@gmail.com"><img style="height: 30px;" src="img/email_black_24dp.svg"></a>
      </div>
    </center>
  </div>

  <div class="containers container">
    <h2>Contact Us!</h2>
    <form>
      <label for="Name">Full Name</label><br>
      <div class="input-group flex-nowrap my-2">
        <!-- <span class="input-group-text" id="addon-wrapping">@</span> -->
        <input type="text" class="form-control" placeholder="Enter your Name" aria-label="Username" aria-describedby="addon-wrapping">
      </div>
      <label for="Name">Your Email</label><br>
      <div class="input-group flex-nowrap my-2">
        <!-- <span class="input-group-text" id="addon-wrapping">@</span> -->
        <input type="text" class="form-control" placeholder="Enter your Email" aria-label="Username" aria-describedby="addon-wrapping">
      </div>
      <label for="Name">Your Phone Number</label><br>
      <div class="input-group flex-nowrap my-2">
        <!-- <span class="input-group-text" id="addon-wrapping">@</span> -->
        <input type="text" class="form-control" placeholder="Enter your Phone Number" aria-label="Username" aria-describedby="addon-wrapping">
      </div>
      <label for="Name">Describe what you want to contact me for here</label><br>
      <textarea class="text" cols="166" name="message" form="usrform">Your Message</textarea>
    </form>
    <button type="button" class="btn btn-success my-3">Submit</button>
  </div>


  <!-- FOOTER -->
  <?php include 'includes/footer.php' ?>

  <!-- LOGIN MODAL -->
  <?php include 'includes/loginModal.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>