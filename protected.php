<?php
session_start();
?>
<html>
   <head>
      <title>Password Protected Page</title>
      <link href="/sandvig/mis314/assignments/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">
      <?php
      if($_SERVER["REQUEST_METHOD"]=="GET"){
        $username = $_GET['username'];
      }
      $_SESSION["username"] = $username;
      ?>

            <h2>Password Protected Page</h2><hr>

            <h2>Welcome <? echo $_SESSION["username"] ?></h2>
            <img src="https://yorktown.cbe.wwu.edu//sandvig/mis314/assignments/images/vault.jpg" style="width:400px;height:auto;" />
            <br>
                 Your session will timeout
                 after 24 minutes of inactivity.<br><br>

         <form method="post" action="login.php" class="formLayout">
            <div class="formGroup">
               <input type="hidden" name="abandon" value="true">
               <label> </label>
               <button type="submit">Logout</button>
            </div>
         </form>
         <?php
         if($_SERVER["REQUEST_METHOD"]=="post"){
           session_unset();
           header('location:login.php');
         }
         ?>

      </div>
   </body>
</html>
