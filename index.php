<?php
session_start();
?>

<html>

<head>
  <title> Home | Zarathelle PH </title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <?php include "components/libraries.php" ?>

  <style>
  .orderblock {
    min-height: 20vh;
  }
  </style>

</head>

<body>

  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <span class="fa fa-arrow-circle-up"></span>
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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>

        <?php
        if (isset($_SESSION['login_user1'])) {

        ?>


        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?>
            </a></li>
          <li><a href="store.php">MANAGER CONTROL PANEL</a></li>
          <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
        </ul>
        <?php
        } else if (isset($_SESSION['login_user2'])) {
        ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?>
            </a></li>
          <li><a href="itemlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
          <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
                  if (isset($_SESSION["cart"])) {
                    $count = count($_SESSION["cart"]);
                    echo "$count";
                  } else
                    echo "0";
                  ?>)
            </a></li>
          <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
        </ul>
        <?php
        } else {

        ?>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false"><span class="fa fa-user"></span> Sign Up <span class="caret"></span> </a>
            <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>

            </ul>
          </li>

          <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false"><span class="fa fa-user"></span> Login <span class="caret"></span></a>
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

  <div class="slider">
    <div class="load">
    </div>
    <div class="content">
      <div class="principal">
        <h1>Welcome to Zarathelle Resin and Crafts!</h1>
        <p>Specially Handmade For You</p>
      </div>
    </div>
  </div>

  <div class="orderblock">
    <h2>What are you waiting for?</h2>
    <div class="center"><a class="btn btn-success btn-lg" href="customerlogin.php" role="button"> Order Now </a></div>
  </div>



</body>

</html>