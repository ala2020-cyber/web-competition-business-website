<?php
   include_once 'headersign.php'
?>
<div class="wrapper_center slide-left">
<div class="wrapper">
    <header class="title-sections">Login</header>
    <form action="includes/login.inc.php" method="post">
      <div class="field email">
        <div class="input-area">
          <input type="text" name="name" placeholder="Email Address">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" name="pwd" placeholder="Password">
          <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "wrongpassword") {
              echo ' <h3 style="color:red;">Password is Incorrect!</h3>';
            }
          }
    ?>
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="pass-txt"><a href="">Forget you password?</a></div>
      <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyInput") {
              echo '<h3 style="color:red;">Fill in all field!</h3>';
            }
            
            if ($_GET["error"] == "wronglogin") {
              echo ' <h3 style="color:red;">User dont exist!</h3>';
            }

          }
    ?>
      <input type="submit" name="submit" value="Login">
    </form>
    <div class="sign-txt">Not yet member? <a href="./signin.php">SignIn now</a></div>


  </div>

</div>

<?php 
 include 'footer.php';
?>