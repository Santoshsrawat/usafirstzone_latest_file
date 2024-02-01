<?php
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "usafirstzone"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if(isset($_POST['footer-email']))
{
    $email = $_POST['f-email'];

    $query = "INSERT INTO email (email) VALUES ('$email')";
    $data = mysqli_query($conn, $query);
    if($data)
    {
      echo '<script>alert("Email Sent")</script>';
    }else {
        echo '<script>alert("Failed")</script>';
    }
}
?>

 
 
 <!-- ---  footer  --- -->
  <footer>
      <div class="row d-flex justify-content-between footer-section">
          <div class="col-lg-10 col-md-12 col-sm-12 footer-container">
              <div class="row d-flex">
                  <div class="col-lg-6 col-md-6 col-sm-12  col-xs-6 mb-2 mt-2">
                      <h3>Subscribe for top stories, new launches & expert reviews!</h3>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-2 mt-2">
                      <form action="" method="POST">
                          <div class="footer-email">
                              <input type="email" placeholder="Your Email Address.." name="f-email" required>
                              <button type="submit" name="footer-email"><i class="fa-solid fa-thumbs-up"
                                      style="color: #fff;"></i></button>
                          </div>
                      </form>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-2 mt-2">
                      <ul class="social-links">
                          <li><a href="" target="_blank"><img src="images/facebook.png" alt=""></a></li>
                          <li><a href="" target="_blank"><img src="images/twitter.png" alt=""></a></li>
                          <li><a href="mailto:customersupport@usafirstzone.com" target="_blank"><img
                                      src="images/gmail.png" alt=""></a></li>
                          <li><a href="youtube.com/@usafirstzone" target="_blank"><img src="images/youtube.png"
                                      alt=""></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom col-lg-10">
          <p class="footer-para">Shop Online</p>
          <p>UsaFirstzone is there to assist you choose "What to Purchase" & "From Where". Here are simple ways to
              have a great time at usaFirstzone:</p>
          <ul>
              <li>1. At usaFirstzone, we have listed the best in class products to help you take a decision fast.
                  Select your price-range & highlight prerequisites. And after that purchase the noteworthy product.
                  Straightforward.</li>

              <li><strong>2. Most recent Costs & Bargains:</strong> Most recent costs, bargains, and offices from all
                  driving online stores are listed for every item. Pick the suitable offer for the product you're
                  looking for.
              </li>

              <li><strong>3. Discover & Compare: </strong>Natural Discoverer & comparison instrument assist you find
                  Phones, Cameras, Laptops, T.Vs & compare the specifications.
              </li>
              <li><strong>4. Proposals:</strong>Valuable suggestions based on the items you browse assist you find
                  your perfect item.</li>
              <li><strong>5. Offline Store Discoverer:</strong>Search the merchants & service centers close to your
                  area.</li>
          </ul>
          <p>Visit us regularly to never miss a deal or launch of the products.</p>
          <p>Thank you for making us help the community!!</p>
          <div class="footer-logo">
              <a class="footer-logo-section" href="index.php">
                  <img src="images/logo-1.jpg" alt="">
              </a>
              <!-- <div class="new-mobile-phone">
                    <h4>New Mobile Phones</h4>
                    <ul>
                        <li><a href="">Itel It5027 </a></li>
                        <li><a href="">Xiaomi Redmi A2 Plus 128GB</a></li>
                        <li><a href="">Itel A05s</a></li>
                        <li><a href="">Realme 11x 5G 8GB RAM</a></li>
                        <li><a href="">Realme 11 256GB</a></li>
                    </ul>
                    <ul style="margin-top: -15px;">
                        <li><a href="">Vivo Y17s</a></li>
                        <li><a href="">Vivo Y17s </a></li>
                        <li><a href="">Nokia C210</a></li>
                        <li><a href="">OPPO A38</a></li>
                        <li><a href="">Honor Magic V2 Lite</a></li>
                    </ul>
                </div> -->
          </div>
          <!---   footer-logo end ----->

      </div>
  </footer>
  <div class="copyright">
      <div class="row ">
          <div class="col-lg-10 col-md-12 col-sm-12 copyright-section ">
              <div class="col-lg-10">
                  <ul class="footer-menu">
                      <li><a href="">Home</a></li>
                      <li><a href="privacy_policy.php">Privacy</a></li>
                      <li><a href="">About Us </a></li>
                      <li><a href="contact_us.php">Contact Us</a></li>
                      <li><a href="visitor.php">Visitor Agreement</a></li>
                      <li><a href="terms_conditions.php">Terms & Conditions</a></li>
                      <li><a href="">Usa Firstzone Spanish</a></li>
                  </ul>
              </div>
              <p>Copyright &copy; All Right Reserved |<a href=""> usafirstzone</a></p>
          </div>
      </div>
  </div>


  <a onclick="topFunction()" id="scrollTop"><i class="fa-solid fa-arrow-up"></i></a>  