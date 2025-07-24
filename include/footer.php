<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- icons -->
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css"
    rel="stylesheet" />
  <link
    href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
    rel="stylesheet" />
  <style>
    /* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
    :root {
      --background-color: #eaeaea;
      --default-color: #212529;
      --heading-color: #131212;
      --accent-color: #cc6600;
      --surface-color: #faf9f6;
      --contrast-color: #faf9f6;
    }

    /* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
    :root {
      --nav-color: #212529;
      --nav-hover-color: #cc6600;
      --nav-mobile-background-color: #faf9f6;
      --nav-dropdown-background-color: #faf9f6;
      --nav-dropdown-color: #212529;
      --nav-dropdown-hover-color: #cc6600;
    }

    /* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

    .light-background {
      --background-color: #f3f9ff;
      --surface-color: #faf9f6;
    }

    .dark-background {
      --background-color: #cc6600;
      --default-color: #faf9f6;
      --heading-color: #faf9f6;
      --surface-color: #cc6600;
      --contrast-color: #faf9f6;
    }

    /* footer section */

    .footer-section {
      background: var(--accent-color);
      padding: 2em;
      position: relative;
      background-size: cover;
      background-position: center;
    }

    .footer1,
    .footer2 {
      display: flex;
      gap: 1em;
    }

    .footer1 {
      justify-content: space-between;
    }

    .footer1 .item1 img {
      max-width: 250px;
      background: #f0eeed;
      border-radius: 20px;
    }

    .footer1 .item1 p {
      font-size: 14px;
      line-height: 1.5;
      color: #ddd;
      margin: 0;
      position: relative;
    }

    .footer1 .item1 .social_contac {
      display: flex;
      gap: 1em;
      margin-top: 1em;
    }

    .footer1 .item1 .social_contac a {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2em;
      text-decoration: none;
      width: 40px;
      height: 40px;
      color: var(--background-color);
      border-radius: 50%;
      border: 2px solid var(--contrast-color);
      transition: transform 0.3s ease, background-color 0.3s ease,
        color 0.3s ease;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .footer1 .item1 .social_contac a:hover {
      color: #e67e22;
      background-color: #f9f9f9;
      transform: scale(1.1);
    }

    .footer1 .item2,
    .footer1 .item3,
    .footer1 .item4 {
      flex: 1 1 calc(25% - 1em);
    }

    .footer1 h3 {
      font-size: 18px;
      color: var(--background-color);
      margin-bottom: 1em;
    }

    .footer1 .links a {
      display: block;
      color: var(--contrast-color);
      text-decoration: none;
      margin-bottom: 2em;
      font-size: 13px;
      margin-left: 1em;
    }

    .footer1 .service p a {
      display: block;
      color: var(--contrast-color);
      text-decoration: none;
      margin-bottom: 2em;
      font-size: 13px;
    }

    .footer1 .service p a:hover {
      text-decoration: underline;
    }

    .footer1 .links a {
      color: var(--contrast-color);
    }

    .hired .hire {
      display: inline-block;
      background-color: var(--background-color);
      color: var(--accent-color);
      width: 80px;
      height: 30px;
      font-size: 11px;
      line-height: 25px;
      text-align: center;
      border-radius: 15px;
      font-weight: bold;
      margin-bottom: 0.5em;
      margin-left: 1em;
    }

    .footer1 .links a:hover {
      text-decoration: underline;
    }

    /* Contact Details */
    /* Location Details Styling */
    .footer1 .details .location:first-child {
      display: flex;
      align-items: flex-start;
      gap: 1em;
      margin-left: 0;
      margin-bottom: 1em;
    }

    .footer1 .details .location:not(:first-child) {
      display: flex;
      align-items: flex-start;
      gap: 1em;
      margin-bottom: 1em;
      padding-left: 1em;
    }

    /* Icons Styling */
    .footer1 .details i {
      font-size: 1.8em;
      color: var(--background-color);
      margin-right: 0.5em;
    }

    .footer1 .details .location_address {
      color: var(--contrast-color);
    }

    .footer1 .email_address {
      margin-bottom: 2em;
      display: flex;
    }

    .footer1 .email_address a {
      color: var(--contrast-color);
      text-decoration: none;
    }

    .footer1 .email_address a:hover {
      text-decoration: underline;
    }

    /* Contacts Section Styling */
    .footer1 .contact {
      display: flex;
    }

    .footer1 .contacts-Line {
      display: block;
    }

    .footer1 .contacts-Line a {
      display: block;
      font-size: 12px;
      color: var(--background-color);
      text-decoration: none;
      margin-bottom: 0.8em;
    }

    .footer1 .contacts-Line a:hover,
    .footer1 .email_address a:hover {
      text-decoration: underline;
    }

    /* Location Address Styling */
    .footer1 .location_address {
      display: block;
    }

    .footer1 .location_address span {
      display: inline-block;
      background-color: var(--background-color);
      color: var(--accent-color);
      width: 100px;
      height: 25px;
      font-size: 11px;
      line-height: 25px;
      text-align: center;
      border-radius: 15px;
      font-weight: bold;
      margin-bottom: 0.5em;
    }

    /* Footer Bottom Section */
    .footer2 {
      justify-content: space-between;
      align-items: center;
      margin-top: 3em;
      padding: 1em 0;
      border-top: 1px solid rgba(255, 255, 255, 0.3);
    }

    .footer2 div {
      display: flex;
      align-items: center;
      gap: 1em;
      flex-wrap: wrap;
    }

    .footer2 p,
    .footer2 a {
      font-size: 12px;
      color: #ddd;
      text-decoration: none;
    }

    .footer2 a:hover {
      text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .footer1 .item1 img {
        max-width: 150px;
        background: #f0eeed;
        border-radius: 20px;
      }

      .footer1 {
        flex-direction: column;
        gap: 2em;
      }

      .footer1 .item2,
      .footer1 .item3,
      .footer1 .item4 {
        flex: 1 1 100%;
      }

      .footer1 .item1 {
        text-align: center;
      }

      .footer2 {
        flex-direction: column;
        align-items: flex-start;
        text-align: center;
        gap: 1em;
      }
    }
    /* Back to Top Button */
    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background-color: #f39c12;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out, background-color 0.3s ease;
      z-index: 1000;
    }

    .back-to-top a {
      color: #fff;
      font-size: 1.5em;
      text-decoration: none;
    }

    .back-to-top:hover {
      background-color: #e67e22;
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <!-- footer -->
  <section id="footer" class="footer-section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 align-items-center justify-content-between">
        <!-- Footer Content -->
        <div class="footer1" data-aos="fade-up" data-aos-delay="200">
          <div class="item1">
            <a href="index.php">
              <img
                src="./assets/img/logo/ROUNDED_DEACONS_LOGO-.png"
                alt="Company Logo" />
            </a>
            <p>Follow us on our social media</p>
            <div class="social_contac">
              <a
                href="https://www.facebook.com/Deaconspublishers/"
                target="_blank"
                title="Visit our Facebook">
                <i class="ri-facebook-circle-fill"></i>
              </a>
              <a
                href="https://www.instagram.com/deacons_publishers/"
                target="_blank"
                title="Visit our Instagram">
                <i class="ri-instagram-fill"></i>
              </a>
              <a
                href="http://www.youtube.com/@deaconspublishers/"
                target="_blank"
                title="Visit our YouTube">
                <i class="ri-youtube-fill"></i>
              </a>
              <a
                href="https://x.com/DeaconsPub/"
                target="_blank"
                title="Visit our Twitter">
                <i class="ri-twitter-fill"></i>
              </a>
              <a
                href="https://www.tiktok.com/@deacons_publishers/"
                target="_blank"
                title="Visit our Tiktok">
                <i class="ri-tiktok-fill"></i>
              </a>
            </div>
          </div>
          <div class="item2">
            <h3>Quick Links</h3>
            <div class="links">
              <a href="index.php">Home</a>
              <a href="about.php">About Us</a>
              <a href="service.php">Services</a>
              <a href="product.php">Products</a>
              <a href="career.php" class="hired">Career
                <div class="hire">
                  <span>We're hiring</span>
                </div>
              </a>
              <a href="index.php#faq">FAQ</a>
              <a href="contact.php">Contact Us</a>
            </div>
          </div>
          <div class="item3">
            <h3>Services</h3>
            <div class="service">
              <p><a href="" onclick="return false;">Educational Podcast</a></p>
              <p><a href="https://prep50books.prep50mobileapp.com.ng/" target="_blank">Prep50 Bookshop</a></p>
              <p><a href="prep50_app.php">Prep50 Mobile App</a></p>
              <p>
                <a href="" onclick="return false;">Production of Prep50 (Basic & Secondary)</a>
              </p>
              <p>
                <a href="https://prep50.ng/" target="_blank">Prep50 Mock Assessment: Online Assessment</a>
              </p>
            </div>
          </div>
          <div class="item4">
            <h3>Contact Us</h3>
            <div class="details">
              <div class="location">
                <i class="bx bx-current-location"></i>
                <div class="location_address">
                  <span>Head Office</span>
                  <p>
                    Legion House, Basilica of the Most Holy Trinity,
                    Onitsha, Anambra State, Nigeria.
                  </p>
                  <span>Branch Office</span>
                  <p>
                    No. 19b Regina Nwankwu Drive, GRA Onitsha. Beside Onitsha Business
                    School, Onitsha, Anambra State, Nigeria.
                  </p>
                </div>
              </div>
              <div class="email_address">
                <i class="ri-mail-send-line"></i>
                <a href="mailto:deaconspublishers@gmail.com">deaconspublishers@gmail.com</a>
              </div>
              <div class="contact">
                <i class="ri-customer-service-2-line"></i>
                <div class="contacts-Line">
                  <a href="tel:09037916995">+234 903 7916 995</a>
                  <a href="tel:09038356928">+234 903 8356 928</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer2">
          <div>
            <p>&copy; 2024 Deacons Publishers. All Right Reserved</p>
          </div>
          <!-- <div>
            <p>
              Built By:<a
                target="_blank"
                href="https://donwilliams501.github.io/anthonyanso">
                <b>AnthonyAnso</b></a>
            </p>
          </div> -->
          <div>
            <a href="#" onclick="return false;">Privacy Policy</a>
            <a href="#" onclick="return false;">Terms & Condition</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Back to Top Button -->
    <div class="back-to-top">
      <a href="#home" title="Go to Top">
        <i class="ri-arrow-up-line"></i>
      </a>
    </div>
  </section>
  <!-- footer ends here -->

  <script src="../assets/js/script.js"></script>
</body>

</html>