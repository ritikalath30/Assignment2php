<?php
session_start();
?>
<html>
   <head>
      <title>Order Confirmation</title>
      <link href="/sandvig/mis314/assignments/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
     <?php
     if($_SERVER["REQUEST_METHOD"]=="GET"){
       $color=$_GET['color'];
     }
     $_SESSION["color"]=$color;
    ?>
      <div class="pageContainer centerText">
        <?php
        if ($_SESSION["color"]=="Blue" && $_SESSION["model"]=="mustang"){
          echo "Congratulations you have ordered  ".$_SESSION["color"].$_SESSION["model"].".";
          echo "<br> <br> <br>";
          echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
        }
        elseif($_SESSION["color"]=="Blue" && $_SESSION["model"]=="corvette"){
          echo "Congratulations you have ordered  ".$_SESSION["color"].$_SESSION["model"].".";
          echo "<br> <br> <br>";
          echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
        }
        elseif($_SESSION["color"]=="Blue" && $_SESSION["model"]=="sabaru"){
          echo "Congratulations you have ordered  ".$_SESSION["color"].$_SESSION["model"].".";
          echo "<br> <br> <br>";
          echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
        }
        elseif($_SESSION["color"]=="Red" && $_SESSION["model"]=="mustang"){
          echo "Congratulations you have ordered  ".$_SESSION["color"].$_SESSION["model"].".";
          echo "<br> <br> <br>";
          echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
        }
        elseif($_SESSION["color"]=="Red" && $_SESSION["model"]=="corvette"){
          echo "Congratulations you have ordered  ".$_SESSION["color"].$_SESSION["model"].".";
          echo "<br> <br> <br>";
          echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
        }
        elseif($_SESSION["color"]=="Red" && $_SESSION["model"]=="sabaru"){
          echo "Congratulations you have ordered  ".$_SESSION["color"].$_SESSION["model"].".";
          echo "<br> <br> <br>";
          echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
        }
        elseif($_SESSION["color"]=="Yellow" && $_SESSION["model"]=="mustang"){
          echo "Congratulations you have ordered  ".$_SESSION["color"].$_SESSION["model"].".";
          echo "<br> <br> <br>";
          echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
        }
        elseif($_SESSION["color"]=="Yellow" && $_SESSION["model"]=="corvette"){
          echo "Congratulations you have ordered  ".$_SESSION["color"].$_SESSION["model"].".";
          echo "<br> <br> <br>";
          echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
        }
        else {
          echo "Congratulations you have ordered  ".$_SESSION["color"].$_SESSION["model"].".";
          echo "<br> <br> <br>";
          echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
        }
?>
<p></p>
<a href="order1.php">Place another order</a>

      </div>
   </body>
</html>
