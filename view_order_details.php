<?php
include('session_m.php');

if (!isset($login_session)) {
  header('Location: managerlogin.php');
}
$_SESSION["page"] = "view details";

?>
<!DOCTYPE html>
<html>

<head>
  <title> Manager Login | Zarathelle PH </title>

  <link rel="stylesheet" type="text/css" href="css/view_order_details.css">
  <?php include "components/libraries.php" ?>

</head>

<body>


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
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> YOUR FOOD ORDER LIST </h3>


          <?php




          // Storing Session
          $user_check = $_SESSION['login_user1'];
          $sql = "SELECT * FROM orders INNER JOIN items ON orders.item_ID = items.ID INNER JOIN customer ON orders.customer_ID = customer.ID ORDER BY createdOn";
          $result = mysqli_query($conn, $sql);


          if (mysqli_num_rows($result) > 0) {

          ?>

          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th> </th>
                <th> ID </th>
                <th> Order Date </th>
                <th> Food Name </th>
                <th> Price </th>
                <th> Quantity </th>
                <th> Customer </th>
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
                <td><?php echo $row["createdOn"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["quantity"]; ?></td>
                <td><?php echo $row["username"]; ?></td>
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