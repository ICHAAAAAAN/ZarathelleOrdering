<?php
session_start();
?>

<html>

<head>
  <title> Home | Zarathelle PH </title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">


  <?php include "components/libraries.php" ?>

  <style>
  .orderblock {
    min-height: 20vh;
  }
  </style>

</head>

<body>
  <?php include 'components/navbar.php' ?>

  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <span class="fa fa-arrow-circle-up"></span>
  </button>

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