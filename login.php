
<?php include_once 'include/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>astrology</title>
<?php include 'include/style_link.php'; ?>
  <style media="screen">
    header{
      margin-bottom: 8rem;
    }
  </style>
</head>
<body>
  <header><?php include 'include/navigation.php'; ?></header>
  <?php

  $message ='';
  if (isset($_POST['login'])) {
    if (user_login($_POST['email'], $_POST['password']) > 0) {
      $message = "<div class='alert alert-success' role='alert'> User Login </div>";

          if (!check_user_type($_SESSION['user_id'])) {
            if (isset($_REQUEST['redirurl'])) {
              $url = $_REQUEST['redirurl'];
            }else {
              $url = "index.php";
            }
            header('Location: $url');
            // header('Location: admin/index.php');
          }
    }else {
       $message = "<div class='alert alert-danger' role='alert'> User Not Registerd, Please Register Yourself!! </div>";
    }
  }
   ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto p-auto">
        <div class="p-5 z-depth-2">
          <form method="post" action="" enctype="multipart/form-data">
            <fieldset class="form-group">
              <input type="hidden" name="redirurl" value="<? echo $_SERVER['HTTP_REFERER']; ?>">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="useremail" name="email" required placeholder="Enter email">
            </fieldset>
            <fieldset class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="userpassword" name="password" required placeholder="Password">
            </fieldset>
            <button type="submit" class="btn btn-primary" name="login"> Login </button>
            <?php echo $message;  ?>
          </form>
          <a href="register.php"><strong>Register Here ?</strong></a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include 'include/footer.php'; ?>
