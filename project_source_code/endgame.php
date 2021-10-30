<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">

   <head>
      <title>Yashas Production</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">

      <style>
      body
      {
        background-image: url(https://image.freepik.com/free-photo/blurred-abstract-background-interior-view-looking-out-toward-empty-office-lobby-entrance-doors-glass-curtain-wall-with-frame_1339-6363.jpg);
        background-size: cover;
        background-attachment: fixed;
      }
      h1{
        font-size: 40px;
        font-family: Chalkduster, fantasy;
      }


      </style>

   </head>

   <body>
     <center><h1><em>Admin Login</em></h1></center>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <div class = "container form-signin">

         <?php
            $msg = '';

            if (isset($_POST['login']) && !empty($_POST['username'])
               && !empty($_POST['password'])) {

               if ($_POST['username'] == 'admin' &&
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';

                  echo header("location:ret.php");
               }else {
                  $msg = 'Invalid Username or Password';
               }
            }
         ?>
      </div> <!-- /container -->

      <div class = "container">


         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <center>


            <input type = "text" class = "form-control"
               name = "username" placeholder = "Username"
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required>
               <br />
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Login</button>
             </center>
         </form>



      </div>

   </body>
</html>
