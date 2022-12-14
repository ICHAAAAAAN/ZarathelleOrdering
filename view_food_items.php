<?php
include('session_m.php');

if (!isset($login_session)) {
  header('Location: managerlogin.php'); // Redirecting To Home Page
}
$_SESSION["page"] = "view items";

?>
<!DOCTYPE html>
<html>

<head>
  <title> Manager Login | Zarathelle PH </title>

  <link rel="stylesheet" type="text/css" href="css/view_food_items.css">
  <?php include "components/libraries.php" ?>
</head>

<body>

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
          <li><a href="aboutus.php">About</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
          <li class="active"> <a href="managerlogin.php">MANAGER CONTROL PANEL</a></li>
          <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
        </ul>
      </div>

    </div>
  </nav>




  <div class="container">
    <div class="jumbotron">
      <h1>Hello Manager! </h1>
      <p>Manage all your restaurant from here</p>

    </div>
  </div>

  <div class="container">
    <div class="container">
      <div class="col">

      </div>
    </div>


    <?php include "components/inventory-menu.php" ?>

    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
          <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> YOUR FOOD ITEMS LIST </h3>


          <?php

          // Storing Session
          $user_check = $_SESSION['login_user1'];
          $sql = "SELECT * FROM items ORDER BY ID";
          $result = mysqli_query($conn, $sql);


          if (mysqli_num_rows($result) > 0) {

          ?>

          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th> </th>
                <th> Food ID </th>
                <th> Food Name </th>
                <th> Price </th>
                <th> Description </th>
                <th> Option </th>
              </tr>
            </thead>

            <?PHP
              //OUTPUT DATA OF EACH ROW
              while ($row = mysqli_fetch_assoc($result)) {
              ?>

            <tbody>
              <tr>
                <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
                <td><?php echo $row["ID"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
                <td><?php echo $row["options"]; ?></td>
              </tr>
            </tbody>

            <?php } ?>
          </table>
          <br>


          <?php } else { ?>

          <h4>
            <center>0 RESULTS</center>
          </h4>

          <?php } ?>

        </form>


      </div>

    </div>
  </div>
  <br>
  <br>
  <br>
  <br>

</body>

</html>