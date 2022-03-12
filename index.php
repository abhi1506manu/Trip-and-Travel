<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trip and Travel</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!--menu-bar----------------------------------------->
    <nav>
      <div class="navigation" id="navi">
        <!--logo------------>
        <h1>Trip and Travel</h1>
        <!--menu----------------->
        <ul class="menu">
          <li><a href="#">Home</a></li>
          <li><a href="#book">Book</a></li>
          <li><a href="#packages">Package</a></li>
          <li><a href="#gallary">Gallary</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
        <!--right-menu----------->
        <div class="right-menu">
          <a href="#" class="search">
            <i class="fas fa-search"></i>
        </a>
        <a href="#" class="user">
            <i class="far fa-user"></i>
        </a>
        </div>
      </div>
    </nav>

    <!-- ************LOGIN FORM************ -->
    <div class="form" id="form">
      <!--login---------->
      <div class="login-form" id="logi">
          <!--cancel-btn---------------->
          <a href="#" class="form-cancel">
              <i class="fas fa-times"></i>
          </a>
          <strong>Log In</strong>
          <!--inputs-->
          <form action="validation.php" method="POST">
              <input type="email" name="email" placeholder="Example@gmail.com" required />
              <input type="password" name="password" placeholder="Password" required />
              <input type="submit" value="Log In" />
          </form>
          <div class="form-btns">
                <a href="#" class="sign-up-btn">Create Account</a>
        </div>
      </div>
      <!-- **********SIGN UP********** -->
      <div class="sign-up-form">
        <!--cancel-btn---------------->
        <a href="#" class="form-cancel">
            <i class="fas fa-times"></i>
        </a>
        <strong>Sign Up</strong>
        <!--inputs-->
        <form action="signup.php" method="POST">
            <input type="email" name="email" placeholder="Example@gmail.com" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="submit" value="Sign Up" />
        </form>
        <!--forget-and-sign-up-btn-->
        <div class="form-btns">
            <a href="#" class="already-account">
                Already Have Account?</a>
        </div>
 </div>

</div>

    <!-- IMAGE HOME PAGE -->

    <div class="himage">
      <img src="images/himg3.jpg" alt="tour" />
      <h1 class="explore">Explore India.</h1>
      <h1 class="explore_sec">Explore Uniqueness.</h1>
    </div>

    <!-- ***********BOOK PACKAGE********* -->

    <section class="book" id="book">
      <div>
      <h1 class="heading">
        <span>B</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>N</span>
        <span>o</span>
        <span>w</span>
      </h1>
      

      <div class="row">
        <div class="image">
          <img src="images/book-img.svg" alt="" />
        </div>

        <form method="POST" action="book_now.php">

        <div class="inputBox">
            <h3>Username</h3>
            <input type="text" name="userid" placeholder="Example@gmail.com" />
            <!-- <span class="error">* <?php echo $nameerr; ?> </span>   -->
    <!-- <br><br> -->
          </div>
         <div class="inputBox">
            <h3>From</h3>
            <!-- <input type="text" name="source" placeholder="place name" require/> -->
            <select id="form" name="source">
            <option value="Guwahati">Guwahati</option>
           <option value="Kolkata">Kolkata</option>
  </select>
    <!-- <br><br> -->
          </div>
          <div class="inputBox">
            <h3>where to</h3>
            <!-- <input type="text" name="where_to" placeholder="place name" require /> -->
            <select id="form" name="where_to">
            <option value="Guwahati">Guwahati</option>
           <option value="Kolkata">Kolkata</option>
  </select>
          </div>
          <div class="inputBox">
            <h3>how many</h3>
            <input type="number" name="guest" placeholder="number of guests" />
            <!-- <span class="error">* <?php echo $guesterr; ?> </span>   -->
    <!-- <br><br> -->
          </div>
          <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date"  name="start_date" />
          </div>
          <div class="inputBox">
            <h3>leaving</h3>
            <input type="date" name="ret_date" />
          </div>
          <input type="submit" class="btn" value="book now" />
        </form>
      </div>
</div>
</section>

    <!-- *****************Package*********** -->
    <Section>
      <div>
    <div class="packages" id="packages">
      <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="images/to9.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Delhi</h3>
            <p>Red Fort, India Gate, Lotus Temple, Qutub Minar, Jantar Mantar </p>
            <div class="price">₹1500.00 <span>₹2220.00</span></div>
            <a href="#book" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/to21.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Rajgir</h3>
            <p>Golghar, Patna Museum, Mahatma Gandhi Setu, Nalanda University, Pawapuri</p>
            <div class="price">₹1100.00 <span>₹2000.00</span></div>
            <a href="#book" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/to17.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Guwahati</h3>
            <p>Kamkhya Temple, Rongghor, Umananda Temple, Nabagraha Temple, Accoland, Assam State Zoo</p>
            <div class="price">₹1500.00 <span>₹1900.00</span></div>
            <a href="#book" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/to7.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Amritsar</h3>
            <p>Golden Temple, Jallianwallah Bagh, Wagah Border, Moorish Mosque, Virasat-e-Khalsa, Lodhi Fort</p>
            <div class="price">₹900.00 <span>₹1200.00</span></div>
            <a href="#book" class="btn">book now</a>
          </div>
        </div>

      </div>

    
    </div>
  </Section>

  <!-- services section starts  -->

<section class="services" id="services">

<h1 class="heading">
    <span>s</span>
    <span>e</span>
    <span>r</span>
    <span>v</span>
    <span>i</span>
    <span>c</span>
    <span>e</span>
    <span>s</span>
</h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>Booking a hotel as a choice of accommodation has several advantages. With so many services and amenities available, the overall luxuries that hotels provide its just a click away now. Book Cheap Hotels Online. No reservation costs. Great rates. Sign Up For Deals. Register Online. Become An Affiliate.</p>
    </div>
    <div class="box">
        <i class="fas fa-utensils"></i>
        <h3>food and drinks</h3>
        <p>Get some extraordinary cuisine with mouthwatering delicacies in your platters. Coming all over the India, the flavours of magnificent spices and soothing beverages. Great deals and discounts on food and drinks and special cashback offers in online orders.</p>
    </div>
    <div class="box">
        <i class="fas fa-bullhorn"></i>
        <h3>safty guide</h3>
        <p>Safety and security- the utmost priority of life. Get a life insurance,  offering a range of life insurance plans and policies to ensure Lifetime Protection for you. Pay for 5 years and Get covered up to 85 years with ICICI Pru iProtect Smart. *T&C</p>
    </div>
    <div class="box">
        <i class="fas fa-globe-asia"></i>
        <h3>around the world</h3>
        <p>Explore. Enjoy. Enlighten.

The wonders of the world and unimaginable views of the landscapes are awaiting for your dreamy eyes to catch! Book your tickets now and make your vacation a memorable one.</p>
    </div>
    <div class="box">
        <i class="fas fa-plane"></i>
        <h3>fastest travel</h3>
        <p>Want to enjoy some more days? Reduce your traveling time with the fastest mode of travelling with cheapest rates. Reach your destination prior and enjoy your vacations the fullest and finest with your family and friends.</p>
    </div>
    <div class="box">
        <i class="fas fa-hiking"></i>
        <h3>adventures</h3>
        <p>Life means adventure. Make your adventurous life a little more enjoyable by choosing an affordable priced trips and travels with your loved ones and spend some quality time exploring the extends of the world.</p>
    </div>

</div>

</section>

<!-- services section ends -->


<!-- *********************Gallary************ -->
<div>
    <div class="gal" id="gallary">
      <h1 class="heading">
        <span>G</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
      </h1>
      <div class="Gallery">
        <div class="photo">
          <img src="images/to1.jfif" alt="" />
        </div>

        <div class="photo">
          <img src="images/to2.jpg" alt="" />
        </div>

        <div class="photo">
          <img src="images/to3.jpg" alt="" />
        </div>

        <div class="photo">
          <img src="images/to4.jpg" alt="" />
        </div>

        <div class="photo">
          <img src="images/to5.jpg" alt="" />
        </div>

        <div class="photo">
          <img src="images/to7.jpg" alt="" />
        </div>

        <div class="photo">
          <img src="images/to14.jpg" alt="" />
        </div>

        <div class="photo">
          <img src="images/to8.jpg" alt="" />
        </div>

        <div class="photo">
          <img src="images/to9.jpg" alt="" />
        </div>
        .

        <div class="photo">
          <img src="images/to13.jpg" alt="" />
        </div>
      </div>
    </div>
    </div>

    <!-- *************** FOOTER ************ -->
    <div class="footer" id="contact">
      <h1>Design By</h1>
      <li>Abhimanyu Kumar <span>(190310007002)</span></li>
      <li>Subhranil Ghosh <span>(190310007048)</span></li>
      <div class="soicon">
        <i class=" fab fa-instagram  so-icon"></i>
        <i class="fab fa-github  so-icon"></i>
        <i class="fab fa-twitter-square  so-icon"></i>
        <i class="fab fa-linkedin  so-icon"></i>
      </div>
    </div>

    <script src="index.js"></script>
  </body>
</html>
