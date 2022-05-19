<?php 
    include_once 'headersign.php';
?>




<div class="wrapper_center slide-left">
<div class="wrapper">
    <header class="title-sections">Signup</header>
    <form action="./includes/signin.inc.php" method="post">
      <div class="field email">

      <div class="input-area">
        <input type="text" name="name" placeholder="Full Name" />
         
        </div>
        <div class="input-area">
        <input type="text" name="uid" placeholder="Username" />
        <?php
         if (isset($_GET["error"])) {

          if ($_GET["error"] == "invaliduid") {
            echo '<h3 style="color:red;">write a valid username</h3>';
          }}
        ?>
        </div>
        <div class="input-area">
          <input type="text" name="email" placeholder="Email Address">
          <?php
              if (isset($_GET["error"])) {
    
                if ($_GET["error"] == "invalidEmail") {
                  echo '<h3 style="color:red;">Email Incorrect! </h3>';
           }}
          ?>
          <i class="icon fas fa-envelope"></i>
        </div>

        
      </div>
      <div class="field password">
        <div class="input-area">

          <input type="password" name="pwd" placeholder="Password">

          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="input-area">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="input-area">
      <div class="pass-txt"><a href="#">Forget you password?</a></div>
      </div>
      <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyInput") {
              echo '<h3 style=" color:red;">Fill in all field</h3>';
            }
            if ($_GET["error"] == "pwdmatch") {
              echo '<h3 style=" color:red;">repeat the password correctly! </h3>';
            }
            if ($_GET["error"] == "usertaken") {
              echo '<h3 style=" color:red;">User already exist! </h3>';
            }
            if ($_GET["error"] == "stmtfailed") {
              echo '<h3 style=" color:red;">statment failed! </h3>';
            }
            if ($_GET["error"] == "none") {
              echo '<h3 style=" color:green;">user signed up  correctly! </h3>';
            }
          }
        ?>
      <input type="submit" name="submit" value="Signup">
    </form>
    <div class="sign-txt">You are a member? <a href="./login.php">LogIn now</a></div>


  </div>

</div>

<?php 
 include_once 'footer.php';
?>