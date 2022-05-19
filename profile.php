
<?php 
    include_once 'headersign.php';

    
    if (isset($_SESSION["useruid"])) {
        echo '<h1> Hello '.$_SESSION["useruid"].', How are you today!</h1>';
      }
      echo "<br>";
      echo "<h2>User Full Name: ".$_SESSION["username"]."</h2>";
      echo "<h2>User Email: ".$_SESSION["useremail"]."</h2>";
      echo "<br>";
?>




<?php
  include_once 'footer.php';
?>

