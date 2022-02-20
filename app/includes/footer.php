<?php if(isset($_SESSION['username'])): ?>
<div class="footer">
    <div class="footer-content">

      <div class="footer-section about">
        <h1 class="logo-text"><span>QRCode</span>Ticketing</h1>
        <p>
         QR Code Ticketing is a web page that will enable users to buy a ticket in the form of QR Code and 
         will watch their favorite game without any delay of buying tickets manually.
         
        </p>
        <div class="contact">
          <span><i class="fas fa-phone"></i> &nbsp; 0910-00-9313</span>
          <span><i class="fas fa-envelope"></i> &nbsp; info@QRCodeTicketing.com</span>
        </div>
        <div class="socials">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-section links">
        <h2>Quick Links</h2>
        <br>
        <ul>
          <!-- <a href="#">
            <li>Request Ticket</li>
          </a> -->
          <a href="#">
            <li>Fixtures</li>
          </a>
          <a href="#">
            <li>About</li>
          </a>
          <a href="#">
            <li>More</li>
          </a>
          <a href="#">
            <li>Terms and Conditions</li>
          </a>
        </ul>
      </div>

      <div class="footer-section contact-form">
        <h2>Contact us</h2>
        <br>
        <form action="index.html" method="post">
          <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
          <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
          <button type="submit" class="btn btn-big contact-btn">
            <i class="fas fa-envelope"></i>
            Send
          </button>
        </form>
      </div>

    </div>

    <div class="footer-bottom">
         
          <script> document.write(new Date().getFullYear())</script>  &copy;QRCodeTicketing.com</p>
    </div>
    <?php endif?>
  </div>