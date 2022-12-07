<?php
session_start();
?>

<html>

<head>
  <title> About | Zarathelle PH </title>

  <link rel="stylesheet" type="text/css" href="css/aboutus.css">
  <?php include "components/libraries.php" ?>

</head>

<body>
  <?php include 'components/navbar.php' ?>


  <div class="wide">
    <div class="tagline">About Us</div>

    <!-- template starts here -->
    <div id="banner"><img src="images/headerimg.png" height="auto" width="100%" alt="" /></div>
    <div id="three-columns">
      <div class="content">
        <div id="column1">
          <h2>Developers Information</h2>
          <ul class="list-style1">
            <li class="first">
              <h3>Jacob Emmanuel Cabrera</h3>
              <p>A meticulous college student from Technological University of the Philippines-Manila, pursuing to
                become successful, and someday, give back to the programming community and inspire others to reach their
                limits. </p>
              <p><a href="https://www.linkedin.com/in/jacob-cabrera-146018145/" class="link-style">LinkedIn</a></p>
            </li>
            <li>
              <h3>Kristian Fanuncio</h3>
              <p>An IT student and aspiring web developer from the Technological University of the Philippines. </p>
              <p><a href="https://www.linkedin.com/in/kristian-fanuncio-a21a84258" class="link-style">LinkedIn</a></p>
            </li>
            <li>
              <h3>Loven Joy Velasquez</h3>
              <p>An Information Technology student that aims to contribute to the advancement of the technology and to
                create applications that will be helpful to people. </p>
              <p><a href="https://www.linkedin.com/in/loven-joy-velasquez-b39382250/" class="link-style">LinkedIn</a>
              </p>
            </li>
            <li>
              <h3>Janne Carol Villadelgado</h3>
              <p>A dedicated student of Technological University of the Philippines that aims to be a successfull data
                analyst and web developer in the coming years.</p>
              <p><a href="https://www.linkedin.com/in/carie-villadelgado-45a898252/" class="link-style">LinkedIn</a></p>
            </li>
          </ul>
        </div>
        <div id="column2">
          <h2>About Zarathelle PH</h2>
          <p><img src="images/aboutproducts.png" alt="" /></p>
          <p>
            <brb><br>Zarathelle Resin and Crafts, also known as Zarathelle PH, offers handmade jewelries made with
              resin. We have been in the business for over a year, which has given us the experience to know what
              products will work best for our customers.
              Our goal is to provide unique items that are reasonably priced. All our jewelry pieces are made from only
              the finest quality materials with an emphasis on color and detail.<br><br> We are also available in
              Shopee, Instagram, and Facebook. Click below to check our Shopee!
          </p>
          <p><a
              href="https://shopee.ph/zarathelle.ph?categoryId=100009&entryPoint=ShopByPDP&itemId=12135054655&upstream=search"
              class="link-style">Shopee</a></p>
        </div>

      </div>
    </div>
  </div>

  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </button>

  <script type="text/javascript">
  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("myBtn").style.display = "block";
    } else {
      document.getElementById("myBtn").style.display = "none";
    }
  }

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>

</body>

</html>