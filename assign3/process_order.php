<?php
    // you need to edit this file to include your mysql info
    require_once('settings.php');
	// The @ operator suppresses the display of any error messages
	// mysqli_connect returns false if connection failed, otherwise a connection value
	$conn = @mysqli_connect($host,
		$user,
		$pwd,
		$sql_db
	);

	// Checks if connection is successful
	if (!$conn) {
		// Displays an error message, avoid using die() or exit() as this terminates the execution
		// of the PHP script
		echo "<p>Database connection failure</p>";  //Would not show in a production script
	} else {
		// Upon successful connection
    if(isset($_POST['cardType'])){
            // Get data from the form for customer details
        $firstname = trim(htmlspecialchars($_POST["f_nameData"]));
        $lastname = trim(htmlspecialchars($_POST["l_nameData"]));
        $email = trim(htmlspecialchars($_POST["emailData"]));
        $street = trim(htmlspecialchars($_POST["streetData"]));
        $town = trim(htmlspecialchars($_POST["townData"]));
        $state = trim(htmlspecialchars($_POST["stateData"]));
        $code = trim(htmlspecialchars($_POST["codeData"]));
        $phone = trim(htmlspecialchars($_POST["phoneData"]));
        $contact = trim(htmlspecialchars($_POST["contactData"]));
        $product = trim(htmlspecialchars($_POST["productData"]));
        $quantity = trim(htmlspecialchars($_POST["quantityData"]));
        $price = trim(htmlspecialchars($_POST["priceData"]));

        // Get form data for card details
        $cardType = trim(htmlspecialchars($_POST["cardType"]));
		    $creditName	= trim(htmlspecialchars($_POST["creditName"]));
		    $creditNumber	= trim(htmlspecialchars($_POST["creditNumber"]));
		    $expiryDate	= trim(htmlspecialchars($_POST["expiryDate"]));
		    $cvv	= trim(htmlspecialchars($_POST["cvv"]));
        }
        else{
          header("location:enquire.php"); // directly redirects to the home page just in case someone tried to access this page through url
        }



		//Check the data - do more tests - not trust the user!

		$sql_table="orders";
        $fieldDefinition="order_id INT AUTO_INCREMENT PRIMARY KEY, f_name VARCHAR(40), l_name VARCHAR(40), email VARCHAR(255), street VARCHAR(255), town VARCHAR(255), state VARCHAR(255), code VARCHAR(4), phone VARCHAR(10), contact VARCHAR(255), product VARCHAR(255), quantity INT(255), productPrice VARCHAR(255), cardType VARCHAR(40), creditName VARCHAR(255), creditNumber INT(16), expiryDate VARCHAR(10), cvv VARCHAR(255), order_cost INT(255), order_time VARCHAR(40), order_status VARCHAR(255)";

		// check: if table does not exist, create it
		$sqlString = "show tables like '$sql_table'";  // another alternative is to just use 'create table if not exists ...'
		$result = @mysqli_query($conn, $sqlString);
		// checks if any tables of this name
		if(mysqli_num_rows($result)==0) {
			echo "<p>Table does not exist - create table $sql_table</p>"; // Might not show in a production script
			$sqlString = "create table " . $sql_table . "(" . $fieldDefinition . ")";
			$result2 = @mysqli_query($conn, $sqlString);
		    // checks if the table was created
		    if($result2===false) {
				echo "<p class=\"wrong\">Unable to create Table $sql_table.". mysqli_error($conn) . ":". mysqli_error($conn) ." </p>"; //Would not show in a production script
			}
		}


       /* Validation of Data*/
       $errMsg = "";
       // FIRST NAME VALIDATION

       if(strlen($firstname) < 0 || strlen($firstname) > 25 || !preg_match('/^[A-Za-z ]+$/', $firstname)){
         if ($firstname == ""){
            $errMsg  = $errMsg . "First Name is required<br>";
         }
         if(!preg_match('/^[A-Za-z ]+$/', $firstname)){
            $errMsg  = $errMsg . "First name only contains letters!<br>";
         }
         if (strlen($firstname) < 0 || strlen($firstname) > 25){
             $errMsg  = $errMsg . "First name has a maximum length of 25<br>";
         }
       }

       // LAST NAME VALIDATION
       if(strlen($lastname) < 0 || strlen($lastname) > 25 || !preg_match('/^[A-Za-z-]+$/', $lastname)){
        if ($lastname == ""){
            $errMsg  = $errMsg. "Last Name is required<br>";
        }
        if(!preg_match('/^[A-Za-z-]+$/', $lastname)){
            $errMsg  = $errMsg . "Last name only contains letters!<br>";
        }
         if (strlen($lastname) < 0 || strlen($lastname) > 25){
            $errMsg  = $errMsg . "Last name has a maximum length of 25<br>";
        }
      }


      // EMAIL VALIDATION
      if ($email == "" || filter_var($email, FILTER_VALIDATE_EMAIL)== false){
        if ($email == ""){
          $errMsg  = $errMsg. "Email is required<br>";
      }
      else if(filter_var($email, FILTER_VALIDATE_EMAIL)== false){
        $errMsg  = $errMsg. "Email format is not correct<br>";
      }
      }
      // Street address validation
      if($street == ""){
        $errMsg  = $errMsg ."Street Address is required<br>";
      }
      if(strlen($street) < 0  || strlen($street) > 40){
        $errMsg  = $errMsg . "Street Address has a maximum length of 40<br>";
      }

       //town validation
       if($town == ""){
        $errMsg  = $errMsg ."Town name is required<br>";
      }
      if(strlen($town) < 0  || strlen($town) > 20){
        $errMsg  = $errMsg . "Town name has a maximum length of 25<br>";
      }

      //state validation
      if($state == ""){
        $errMsg  = $errMsg ."State name is required<br>";
      }
      else{
     $code_check = substr($code , 0 , 1);
      switch (
        $state // validating post code here for different states
      ) {
        case "VIC":
          if (!($code_check == "3" || $code_check == "8")) {
            $errMsg =
              $errMsg . "Your first code digit must be 3 or 8 for Victoria.<br>";
          }
          break;
        case "NSW":
          if (!($code_check == "1" || $code_check == "2")) {
            $errMsg = $errMsg . "Your first code digit must be 1 or 2 for NSW.<br>";
          }
          break;
        case "QLD":
          if (!($code_check == "4" || $code_check == "9")) {
            $errMsg = $errMsg . "Your first code digit must be 4 or 9 for QLD.<br>";
          }
          break;
        case "NT":
        case "ACT":
          if (!($code_check == "0")) {
            $errMsg = $errMsg . "Your first code digit must be 0 for NT.<br>";
          }
          break;
        case "WA":
          if (!($code_check == "6")) {
            $errMsg = $errMsg . "Your first code digit must be 6 for WA.<br>";
          }
          break;
        case "SA":
          if (!($code_check == "5")) {
            $errMsg = $errMsg . "Your first code digit must be 5 for SA.<br>";
          }
          break;
        case "TAS":
          if (!($code_check == "7")) {
            $errMsg = $errMsg . "Your first code digit must be 7 for TAS.<br>";
          }
        default:
          $errMsg =
            $errMsg . "Your first code digit doesn't meet any specified digit<br>";
      }
    }

      // POSTAL CODE VALIDATION
      if(strlen($code) != 4 ){
        $errMsg = $errMsg . "Postal Code must be 4 characters.<br>";
      }

      // PHONE VALIDATION

      if($phone == ""){
        $errMsg  = $errMsg ."Phone number is required<br>";
      }
      else if (strlen($phone) < 0  || strlen($phone) > 10){
        $errMsg  = $errMsg . "Phone number has a maximum length of 10.<br>";
      }

      // Preferred Contact Validation
      if($contact == ""){
        $errMsg  = $errMsg ."Preferred Contact type is required<br>";
      }

      // Quantity Validation
      if (!($quantity > 1 && $product != "")) {
        $errMsg = $errMsg . " Your quantity must be greater than 0<br>";
      }

      // Product Validation
      if ($product == "") {
        $errMsg = $errMsg . " Your product must have a value.<br>";
      }

      // Credit Card Type and number Validation
      $result = true;
      $cardType = strtolower($cardType);
      if (
        !(
          $cardType == "visa" ||
          $cardType == "mastercard" ||
          $cardType == "american express"
        )
      ) {
        $errMsg =
          $errMsg .
          "Your card type must a Visa card, Mastercard or an An American Express card.<br>";
           $result = false;
      }


      if (!(strlen($creditNumber) == 15 || strlen($creditNumber) == 16)) {
        $errMsg =
          $errMsg . "Your credit card number must be 15 or 16 digit long.<br>";
        $result = false;
      }

      if (
        $cardType == "visa" &&
        !(
          $result == true ||
          strlen($creditNumber)  == 16 ||
          substr($creditNumber , 0 , 1) == "4"
        )
      ) {
        $errMsg = $errMsg . "Visa cards  have 16 digits and start with a 4.<br>";
        $result = false;
      } else if (
        $cardType == "mastercard" &&
        !(
          $result == true ||
          strlen($creditNumber)  == 16 ||
          substr($creditNumber , 0 , 2) >= "51" ||
          substr($creditNumber , 0 , 2) <= "55"
        )
      ) {
        $errMsg =
          $errMsg +
          "MasterCard have 16 digits and start with digits 51 through to 55.<br>";
        $result = false;
      } else if (
        $cardType == "american express" &&
        !(
          $result == true ||
          strlen($creditNumber)  == 15 ||
          (substr($creditNumber, 0, 2) == "34" ||
          substr($creditNumber, 0 , 2) == "37")
        )
      ) {
        $errMsg =
          $errMsg . "American Express has 15 digits and starts with 34 or 37.<br>";
        $result = false;
      }

      // Credit Card Name validation
      if(strlen($creditName) < 0 || strlen($creditName) > 40 || !preg_match('/^[A-Za-z ]+$/', $creditName)){
        if ($creditName == ""){
           $errMsg  = $errMsg . "Credit Name is required<br>";
        }
        if(!preg_match('/^[A-Za-z ]+$/', $creditName)){
           $errMsg  = $errMsg . "Credit name only contains letters!<br>";
        }
        if (strlen($creditName) < 0 || strlen($creditName) > 40){
            $errMsg  = $errMsg . "Credit name has a maximum length of 40<br>";
        }
      }

      //CC expiry date validation
      if($expiryDate == ""){
        $errMsg  = $errMsg ."Expiry Date is required<br>";
      }
      else if (!preg_match('/\d{1,2}-\d{1,2}/' , $expiryDate)){
        $errMsg  = $errMsg ."Expiry Date is not in the right format<br>";
      }

      // CVV Validation
      if($cvv == ""){
        $errMsg  = $errMsg ."CVV is required<br>";
      }
      else if (!preg_match('/[0-9]{3}/' , $cvv)){
        $errMsg  = $errMsg ."CVV is not in the right format<br>";
      }
      // Checking error message
      if ($errMsg != "") {
         session_start();
        //  $_SESSION["errMsg"] = $errMsg;
         $_SESSION["f_nameData"] = $firstname;
         $_SESSION["l_nameData"] = $lastname;
         $_SESSION["emailData"] = $email;
         $_SESSION["streetData"] = $street;
         $_SESSION["townData"] = $town;
         $_SESSION["stateData"] = $state;
         $_SESSION["codeData"] = $code;
         $_SESSION["phoneData"] = $phone;
         $_SESSION["contactData"] = $contact;
         $_SESSION["productData"] = $product;
         $_SESSION["priceData"] = $price;
         $_SESSION["quantityData"] = $quantity;
         $_SESSION["cardType"] = $cardType;
         $_SESSION["creditName"] = $creditName;
         $_SESSION["creditNumber"] = $creditNumber;
         $_SESSION["expiryDate"] = $expiryDate;
         $_SESSION["cvv"] = $cvv;

         header("location:fix_order.php?errMsg=$errMsg");
         exit();
      }
      else{
         $order_cost = $price * $quantity;
         $order_status = "PENDING";5
         $order_time = "12:00";
         if(isset($_POST['f_nameData'])){
          $insert_data = "INSERT INTO `orders`(`f_name`, `l_name`, `email`, `street`, `town`, `state`, `code`, `phone`, `contact`, `product`, `quantity`, `productPrice`, `cardType`, `creditName`, `creditNumber`, `expiryDate`, `cvv`, `order_cost`, `order_time`, `order_status`) VALUES ('$firstname','$lastname','$email', '$street', '$town', '$state', '$code', '$phone', '$contact', '$product', '$quantity', '$price', '$cardType', '$creditName', '$creditNumber', '$expiryDate', '$cvv', '$order_cost', '$order_time', '$order_status')";
          $query = mysqli_query($conn, $insert_data);
          if ($query == true) {
              // echo "Your data is sent";
            //   echo "<script>
            // window.location.href='http://localhost/assign3/receipt.php';
            // </script>";
        header("location:receipt.php");

          } else {
              echo "Send error";
          }

         }


      }

		// close the database connection
		mysqli_close($conn);
	}  // if successful database connection
?>