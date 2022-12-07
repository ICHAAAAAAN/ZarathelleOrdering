<!-- FROM managerlogin.php -->

<?php
include('DB/login.php'); // Includes Login Script

if (isset($_SESSION['login_user1'])) {
  header("location: store.php"); //Redirecting to myrestaurant Page
}
?>

<!DOCTYPE html>
<html>

<head>
  <title> Manager Login | Zarathelle PH </title>

  <link rel="stylesheet" type="text/css" href="css/managerlogin.css">
  <?php include "../components/libraries.php" ?>

</head>

<body>
  <?php include '../components/navbar.php' ?>

  <div class="container">
    <div class="jumbotron">
      <h1>Hi Manager,<br> Welcome to <span class="edit"> Zarathelle PH </span></h1>
      <br>
      <p>Kindly LOGIN to continue.</p>
    </div>
  </div>

  <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
    <div class="col-md-5 col-md-offset-4">
      <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <div class="panel-heading"> Login </div>
        <div class="panel-body">

          <form action="" method="POST">
            <div class="row">
              <div class="form-group col-xs-12">
                <label for="username">
                  <span class="text-danger" style="margin-right: 5px;">*</span> Username:
                </label>
                <div class="input-group">
                  <input class="form-control" id="username" type="text" name="username" placeholder="Username"
                    required="" autofocus="">
                  <span class="input-group-btn">
                    <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                  </span>
                  </span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-12">
                <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password:
                </label>
                <div class="input-group">
                  <input class="form-control" id="password" type="password" name="password" placeholder="Password"
                    required="">
                  <span class="input-group-btn">
                    <label class="btn btn-primary"><span class="glyphicon glyphicon-lock"
                        aria-hidden="true"></span></label>
                  </span>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-xs-4">
                <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>
              </div>

            </div>
            <label style="margin-left: 5px;">or</label> <br>
            <label style="margin-left: 5px;"><a href="managersignup.php">Create a new account.</a></label>

          </form>
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