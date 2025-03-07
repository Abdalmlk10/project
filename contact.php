<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
  <title>SUPER_PROJECT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="surfside media" />
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/plugins/swiper.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/custom.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>


<body class="gradient-bg">
<?php include 'header.php' ?>
  <main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="contact-us container">
      <div class="mw-930">
        <h2 class="page-title">CONTACT US</h2>
      </div>
    </section>

    <hr class="mt-2 text-secondary " />
    <div class="mb-4 pb-4"></div>

    <section class="contact-us container">
      <div class="mw-930">
        <div class="contact-us__form">
          <form name="contact-us-form" class="needs-validation" novalidate="" method="POST">
            <h3 class="mb-5">Get In Touch</h3>
            <div class="form-floating my-4">
              <input type="text" class="form-control" name="name" placeholder="Name *" required="">
              <label for="contact_us_name">Name *</label>
              <span class="text-danger"></span>
            </div>
            <div class="form-floating my-4">
              <input type="text" class="form-control" name="phone" placeholder="Phone *" required="">
              <label for="contact_us_name">Phone *</label>
              <span class="text-danger"></span>
            </div>
            <div class="form-floating my-4">
              <input type="email" class="form-control" name="email" placeholder="Email address *" required="">
              <label for="contact_us_name">Email address *</label>
              <span class="text-danger"></span>
            </div>
            <div class="my-4">
              <textarea class="form-control form-control_gray" name="comment" placeholder="Your Message" cols="30"
                rows="8" required=""></textarea>
              <span class="text-danger"></span>
            </div>
            <div class="my-4">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
<?php include 'footer.php' ?>

</body>

</html>
