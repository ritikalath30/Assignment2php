<!DOCTYPE html>
<html>
   <head>
      <title>Validation Confirm</title>
      <link href="https://yorktown.cbe.wwu.edu//sandvig/mis314/assignments/style.css" rel="stylesheet" type="text/css">

   </head>
   <body>
      <div class="pageContainer centerText">
         <?php
         include 'validationUtilities.php';

         //Retrieve inputs (using helper function)
         $email = $_GET['email'];
         $fname = $_GET['fname'];
         $phone = $_GET['phone'];
         $state = $_GET['state'];

         //set validation flag
         $IsValid = true;

         echo "<p class='centeredNotice'>";
         //email
         if (!fIsValidEmail($email)) {
            echo "Invalid email<br>";
            $IsValid = false;
         }

         if (!fIsValidLength($fname, 2, 20)) {
            echo "Enter first name (2-20 characters)<br>";
            $IsValid = false;
         }

         if (!fIsValidPhone($phone)) {
            echo "Enter 10 digit phone number<br>";
            $IsValid = false;
         }

         if (!fIsValidStateAbbr($state)) {
            echo "Enter 2-character state abbreviation<br>";
            $IsValid = false;
         }
         if(!fIsValidAge($age,9,100)){
           echo "Enter age between 9 to 100";
           $IsValid=false;
         }
         if(!fIsValidZipcode($zipcode)){
           echo "Enter 5 digit zipcode";
           $IsValid=false;
         }

         echo "</p>";
         if (!$IsValid) {
            //at least one element not valid. Echo a message and stop execution
            echo "<img class='validImage' src='https://yorktown.cbe.wwu.edu//sandvig/mis314/images/red_x.jpg' /><br><br>
            <p><input type='button' class='button' value='<< Go Back <<' onClick='history.back()'><br></p>";
            //stop execution.
            exit();
         }

         //all inputs are valid.
            echo "<div class='center'>
            <img class='validImage' src='https://yorktown.cbe.wwu.edu//sandvig/mis314/images/valid.png' />
            <h3>All inputs have valid formats!</h3>
            Email: $email <br>
            First name: $fname <br>
            Phone: $phone <br>
            State: $state <br>
            Age: $age <br>
            Zipcode: $zipcode <br>
            ";
         ?>
      </div>
   </body>
</html>
