<!DOCTYPE html>
<html lang="en">
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
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="contact.php">Contact</a></li>
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
      <h2>#let's_talk</h2>
      <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>

    <section id="contact-details" class="section-p1">
      <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our agency locations or contact us today</h2>
        <h3>Head Office</h3>
        <div>
          <li>
            <i class="fas fa-map"></i>
            <p>285 Doi Can, Ba Dinh, Ha Noi</p>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <p>contact@example.com</p>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i>
            <p>contact@example.com</p>
          </li>
          <li>
            <i class="fas fa-clock"></i>
            <p>Monday to Saturday: 9.00am to 16.pm</p>
          </li>
        </div>
      </div>

      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.924278651594!2d105.81684051396614!3d21.035715592918905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1653971874345!5m2!1svi!2s"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>

    <section id="form-details">
      <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your Name" />
        <input type="text" placeholder="E-mail" />
        <input type="text" placeholder="Subject" />
        <textarea
          name=""
          id=""
          cols="30"
          rows="10"
          placeholder="Your Message"
        ></textarea>
        <button class="normal">Submit</button>
      </form>

      <div class="people">
        <div>
          <img src="image/people/3.png" alt="" />
          <p>
            <span>Emma Stone</span>
            Senior Developer <br />
            Phone: + 000 123 456 7890 <br />
            Email: contact@example.com
          </p>
        </div>
        <div>
          <img src="image/people/1.png" alt="" />
          <p>
            <span>William Smith</span>
            Senior Developer <br />
            Phone: + 000 123 456 7890 <br />
            Email: contact@example.com
          </p>
        </div>
        <div>
          <img src="image/people/2.png" alt="" />
          <p>
            <span>Join Doe</span> Senior Developer <br />
            Phone: + 000 123 456 7890 <br />
            Email: contact@example.com
          </p>
        </div>
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
