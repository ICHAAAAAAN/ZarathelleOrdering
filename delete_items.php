<?php
include('session_m.php');

if (!isset($login_session)) {
  header('Location: managerlogin.php');
}
$_SESSION["page"] = "delete item";

?>
<!DOCTYPE html>
<html>

<head>
  <title> Manager Login | Zarathelle PH </title>
</head>

<link rel="stylesheet" type="text/css" href="css/delete_items.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

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
        <form action="delete_items1.php" method="POST">
          <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> DELETE YOUR FOOD ITEMS FROM HERE </h3>


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
                <th> # </th>
                <th> Food ID </th>
                <th> Food Name </th>
                <th> Price </th>
                <th> Description </th>
              </tr>
            </thead>

            <?PHP
              //OUTPUT DATA OF EACH ROW
              while ($row = mysqli_fetch_assoc($result)) {
              ?>

            <tbody>
              <tr>
                <td> <input name="checkbox[]" type="checkbox" value="<?php echo $row['ID']; ?>" /> </td>
                <td><?php echo $row["ID"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
              </tr>
            </tbody>

            <?php } ?>
          </table>
          <br>
          <div class="form-group">
            <button type="submit" id="submit" name="delete" value="Delete" class="btn btn-danger pull-right">
              DELETE</button>
          </div>

          <?php } else { ?>

          <h4>
            <center>0 RESULTS</center>
          </h4>

          <?php } ?>

        </form>
      </div>

    </div>
  </div>

</body>

</html>