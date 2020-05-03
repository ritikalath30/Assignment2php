<?php
session_start()
 ?>


<html>
   <head>
      <title>Select Color</title>
      <link href="https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="GET"){
          $name=$_GET['fname'];
          $model=$_GET['model'];
        }
        $_SESSION["fname"] = $name;
        $_SESSION["model"] = $model;
        ?>




<p></p>
         <h2 class="centerText">Select Color</h2>


         <div class="pageContainer">
            <form action="order3.php" method="get" class="formLayout">
               <div class="formGroup">
                  <label>Car color:</label>
                  <div class="formElements">
                     <select name="color" required >
                        <option  value=""></option>
                        <option style="background-color: blue; color:white;" value="blue">Blue</option>
                        <option style="background-color: red" value="red">Red</option>
                        <option style="background-color: yellow" value="yellow">Yellow</option>
                     </select>

                  </div>
               </div>
               <div class="formGroup">
                  <label></label>
                  <button type="submit"> >> Next >> </button>
               </div>
               <div class="centerText vertGap55">
                  <button type="submit" formnovalidate>Submit without validation</button><br><br>
                  <a href="?">Reload page</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>
