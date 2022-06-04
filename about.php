<!DOCTYPE html>
+<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>eProject</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section id="header">
      <a href="#"><img src="/image/-13.png" class="logo" alt="" /></a>

      <div>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a class="active" href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li id="lg-bag">
            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
          </li>
          <a href="#" id="close"><i class="fas fa-times"></i></a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>

    <section id="page-header" class="about-header">
      <h2>#KnowUs</h2>
      <p>Lorem ipsum dolor sit amet consectetur.</p>
    </section>

    <section id="about-head" class="section-p1">
      <img src="image/about/a6.jpg" alt="" />
      <div>
        <h2>Who We Are?</h2>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum
          reprehenderit, autem ipsa tempora, officiis nostrum debitis nulla,
          molestias iste velit error provident officia amet ullam aliquam vel
          illo similique perferendis veniam voluptas libero eveniet! Nulla
          perferendis consequuntur blanditiis fugiat incidunt hic reiciendis
          ipsa excepturi. Nam ab fugit quisquam cupiditate animi.
        </p>

        <abbr title=""
          >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum nam
          fugit quam quis voluptate soluta blanditiis ullam corrupti alias
          eum.</abbr
        >

        <br /><br />

        <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%"
          >Create stunning images with as much or as little control as you like
          thanks to a choice of Basic and Creative modes.</marquee
        >
      </div>
    </section>

    <section id="about-app" class="section-p1">
      <h1>Cukak Remix <a href="#">Video</a></h1>
      <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/mZF9BRZkTDQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>

    <section id="feature" class="section-p1">
      <div class="fe-box">
        <img src="image/features/f1.png" alt="" />
        <h6>Free Shipping</h6>
      </div>
      <div class="fe-box">
        <img src="image/features/f2.png" alt="" />
        <h6>Online Order</h6>
      </div>
      <div class="fe-box">
        <img src="image/features/f3.png" alt="" />
        <h6>Save Money</h6>
      </div>
      <div class="fe-box">
        <img src="image/features/f4.png" alt="" />
        <h6>Promotions</h6>
      </div>
      <div class="fe-box">
        <img src="image/features/f5.png" alt="" />
        <h6>Happy Sell</h6>
      </div>
      <div class="fe-box">
        <img src="image/features/f6.png" alt="" />
        <h6>F24/7 Support</h6>
      </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>
          Get E-mail updates about our latest shop and
          <span>special offers.</span>
        </p>
      </div>
      <div class="form">
        <input type="text" placeholder="Your email address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="image/logo.png" alt="" />
        <h4>Contact</h4>
        <p><strong>Address: </strong> 285 Doi Can, Ba Dinh, Ha Noi</p>
        <p><strong>Phone: </strong> +123 456 7890 / (+84) 01 2345 6789</p>
        <p><strong>Hours: </strong> 8:00 - 18:00, Mon - Sat</p>
        <div class="follow">
          <h4>Follow us</h4>
          <div class="icon">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>

      <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
      </div>

      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
      </div>

      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
          <img src="image/pay/app.jpg" alt="" />
          <img src="image/pay/play.jpg" alt="" />
        </div>
        <p>Secured Payment Gateways</p>
        <img src="image/pay/pay.png" alt="" />
      </div>

      <div class="copyright">
        <p>2022, Pham Quoc Thang - eProjectI</p>
      </div>
    </footer>
    <script src="main.js"></script>
  </body>
</html>
