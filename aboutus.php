<?php
session_start();
?>

<html>

  <head>
    <title> About | Zarathelle PH </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
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

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Zarathelle PH</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="store.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="itemlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

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
						      <p>A meticulous college student from Technological University of the Philippines-Manila, pursuing to become successful, and someday, give back to the programming community and inspire others to reach their limits. </p>
						      <p><a href="https://www.linkedin.com/in/jacob-cabrera-146018145/" class="link-style">LinkedIn</a></p>
					      </li>
					      <li>
                <h3>Kristian Fanuncio</h3>
						      <p>An IT student and aspiring web developer from the Technological University of the Philippines. </p>
						      <p><a href="https://www.linkedin.com/in/kristian-fanuncio-a21a84258" class="link-style">LinkedIn</a></p>
					      </li>
					      <li>
                <h3>Loven Joy Velasquez</h3>
						      <p>An Information Technology student that aims to contribute to the advancement of the technology and to create applications that will be helpful to people. </p>
						      <p><a href="https://www.linkedin.com/in/loven-joy-velasquez-b39382250/" class="link-style">LinkedIn</a></p>
					      </li>
                <li>
                <h3>Janne Carol Villadelgado</h3>
						      <p>A dedicated student of Technological University of the Philippines that aims to be a successfull data analyst and web developer in the coming years.</p>
						      <p><a href="https://www.linkedin.com/in/carie-villadelgado-45a898252/" class="link-style">LinkedIn</a></p>
					      </li>
				        </ul>
			</div>
			<div id="column2">
				<h2>About Zarathelle PH</h2>
				<p><img src="images/aboutproducts.png" alt="" /></p>
				<p><brb><br>Zarathelle Resin and Crafts, also known as Zarathelle PH, offers handmade jewelries made with resin. We have been in the business for over a year, which has given us the experience to know what products will work best for our customers.
        Our goal is to provide unique items that are reasonably priced. All our jewelry pieces are made from only the finest quality materials with an emphasis on color and detail.<br><br> We are also available in Shopee, Instagram, and Facebook. Click below to check our Shopee!</p>
				<p><a href="https://shopee.ph/zarathelle.ph?categoryId=100009&entryPoint=ShopByPDP&itemId=12135054655&upstream=search" class="link-style">Shopee</a></p>
      </div>
			
		</div>
    </div>
    </div>
  </body>
</html>