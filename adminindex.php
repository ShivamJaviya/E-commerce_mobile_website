<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="style2.css" />
  <title>Ecommerce Website</title>
</head>

<body>
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.html"><img src="https://i.ibb.co/kDVwgwp/logo.png" alt="RedStore" width="125px" /></a>
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
        <a href="cart.html"><img src="https://i.ibb.co/PNjjx3y/cart.png" alt="" width="30px" height="30px" /></a>
        <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
      </div>
      <div class="row">
        <div class="col-2">
          <h1>
            Give Your Workout <br />
            A New Style!
          </h1>
          <p>
            Success isn't always about greatness. It's about consistency.
            Consistent <br />hard work gains success. Greatness will come.
          </p>
          <a href="#" target="_blank" rel="noopener noreferrer" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="https://i.ibb.co/QpTmdX5/image1.png" alt="" />
        </div>
      </div>
    </div>
  </div>

  <!-- Featured categories -->
  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <img src="https://i.ibb.co/sqnY1pG/category-1.jpg" alt="" />
        </div>
        <div class="col-3">
          <img src="https://i.ibb.co/GCJLQRQ/category-2.jpg" alt="" />
        </div>
        <div class="col-3">
          <img src="https://i.ibb.co/wYsXqP5/category-3.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>

  <!-- Featured products -->
  <div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
      <div class="col-4">
        <a href="product_details.html"><img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" /></a>
        <a href="product_details.html">
          <h4>Red Printed T-shirt</h4>
        </a>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/b7ZVzYr/product-2.jpg" alt="" />
        <h4>Black Shoes</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹950.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" />
        <h4>Track Pant</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p>₹550.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/0cMfpcr/product-4.jpg" alt="" />
        <h4>Blue T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹700.00</p>
      </div>
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
      <div class="col-4">
        <img src="https://i.ibb.co/bQ5t8bR/product-5.jpg" alt="" />
        <h4>Gray Shoes</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹1500.00</p>
        <br>
      <div>
        <span><a href="#"></a></span>
        </div>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/vVpTyBD/product-6.jpg" alt="" />
        <h4>Green Puma T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹850.00</p>
        <br>
      <div>
        <span><a href="#"></a></span>
        </div>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/hR5FGwH/product-7.jpg" alt="" />
        <h4>Socks</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p>₹250.00</p>
        <br>
      <div>
        <span><a href="#"></a></span>
        </div>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/QfCgdXZ/product-8.jpg"  alt="" />
        <h4>Men'S Black Watch(Chain Belt)</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹1000.00</p>
        <br>
      <div>
        <span><a href="#"></a></span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <img src="https://i.ibb.co/nw5xZwk/product-9.jpg" alt="" />
        <h4>Men's Watch(Leather Belt)</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹1250.00</p>
        <br>
      <div>
        <span><a href="#"></a></span>
        </div>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/9HCsmjf/product-10.jpg" alt="" />
        <h4>sport Shoes</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹3000.00</p>
        <br>
      <div>
        <span><a href="#"></a></span>
        </div>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/JQ2MBHR/product-11.jpg" alt="" />
        <h4>Gray Shoes</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p>₹1500.00</p>
        <br>
      <div>
        <span><a href="#"></a></span>
        </div>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/nRZMs6Y/product-12.jpg" alt="" />
        <h4>Sport's Track pant</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹750.00</p>
        <br>
      <div>
        <span><a href="#"></a></span>
        </div>
      </div>
    </div>
  </div>


    <?php
    $conn = mysqli_connect("localhost","root","","new");
            
    $query = "select * from data where status=1";
    $records = mysqli_query($conn, $query);

      while (($row = mysqli_fetch_array($records)) == true ) 
      {
            echo "<div class='col-4'>";
            echo " <img class='imgheight' src=".$row['file']." height='100'>";
            echo " <h4>" .$row['name']. "</h4>";
            echo " <div class='rating'>";
            echo "  <i class='fas fa-star'></i>";
            echo "  <i class='fas fa-star'></i>";
            echo " <i class='fas fa-star'></i>";
            echo " <i class=fas fa-star'></i>";
            echo " <i class=far fa-star'></i>";
            echo " </div>";
            echo " <p>".$row['price']."</p>";
            echo "<br>";
            echo "<div>";
            echo "<span><a href=''></a></span>";
            echo  "</div>";
            echo " </div>";
      }
      echo "<br>";
      echo "<br>";
    if($_SESSION['roleid'] = 1)
    {
      echo  "<a href='adminhome.php'><h1> Click Here To add data</h1> </a>";
    }

    
    ?>
  <!-- offer -->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="https://i.ibb.co/HF5TncZ/exclusive.png" alt="" class="offer-img" />
        </div>
        <div class="col-2">
          <p>Exclusively Available on RedStore</p>
          <h1>Smart Band 4</h1>
          <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3)
            AMOLED color full-touch display with adjustable brightness, so
            everything is clear as can be.</small>
          <br />
          <a href="#" class="btn">Buy Now &#8594;</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonial -->
  <div class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fas fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis, quae molestias error id est voluptatibus quos amet
            numquam aspernatur nam cumque ullam? Veritatis eveniet et, maxime
            eaque soluta quas modi.
          </p>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <img src="https://i.ibb.co/zfXD2Tx/user-1.png" alt="" />
          <h3>Marta W.</h3>
        </div>

        <div class="col-3">
          <i class="fas fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis, quae molestias error id est voluptatibus quos amet
            numquam aspernatur nam cumque ullam? Veritatis eveniet et, maxime
            eaque soluta quas modi.
          </p>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <img src="https://i.ibb.co/FVyK1KM/user-2.png" alt="" />
          <h3>Rula P.</h3>
        </div>

        <div class="col-3">
          <i class="fas fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis, quae molestias error id est voluptatibus quos amet
            numquam aspernatur nam cumque ullam? Veritatis eveniet et, maxime
            eaque soluta quas modi.
          </p>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <img src="https://i.ibb.co/jZ3tQqK/user-3.png" alt="" />
          <h3>Vika Z.</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- brands -->
  <div class="brands">
    <div class="small-container">
      <div class="row">
        <div class="col-5">
          <img src="https://i.ibb.co/Gfwzz1S/logo-godrej.png" alt="" />
        </div>

        <div class="col-5">
          <img src="https://i.ibb.co/vjrRZFM/logo-oppo.png" alt="" />
        </div>

        <div class="col-5">
          <img src="https://i.ibb.co/3zs234S/logo-coca-cola.png" alt="" />
        </div>

        <div class="col-5">
          <img src="https://i.ibb.co/7Wt343W/logo-paypal.png" alt="" />
        </div>

        <div class="col-5">
          <img src="https://i.ibb.co/GVSNwJD/logo-philips.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>Download App for Android and iso mobile phone.</p>
          <div class="app-logo">
            <img src="https://i.ibb.co/KbPTYYQ/play-store.png" alt="" />
            <img src="https://i.ibb.co/hVM4X2p/app-store.png" alt="" />
          </div>
        </div>

        <div class="footer-col-2">
          <img src="https://i.ibb.co/j3FNGj7/logo-white.png" alt="" />
          <p>
            Our Purpose Is To Sustainably Make the Pleasure and Benefits of
            Sports Accessible to the Many.
          </p>
        </div>

        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>

        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>YouTube</li>
          </ul>
        </div>
      </div>
      <hr />
      <p class="copyright">Copyright &copy; 2021 - Red Store</p>
    </div>
  </div>

  <!-- js for toggle menu -->
   <script src="index.js"></script>
</body>

</html>