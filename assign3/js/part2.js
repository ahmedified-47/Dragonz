 "use strict";
$(document).ready(function () {
  // submitting data to payment.html
  var debug = false;
  $("#submitForm").on("click", function (e) {
    e.preventDefault();
    if (validateForm() == false && debug == true) {
      return false;
    }

    var f_name = $("#f_name").val();
    console.log(f_name);
    localStorage.setItem("f_name", f_name);

    var l_name = $("#l_name").val();
    console.log(l_name);
    localStorage.setItem("l_name", l_name);

    var email = $("#email").val();
    console.log(email);
    localStorage.setItem("email", email);

    var street = $("#street").val();
    console.log(street);
    localStorage.setItem("street", street);

    var town = $("#town").val();
    console.log(town);
    localStorage.setItem("town", town);

    var state = $("#state option:checked").text();
    console.log(state);
    localStorage.setItem("state", state);

    var code = $("#code").val();
    console.log(code);
    localStorage.setItem("code", code);

    var phone = $("#phone").val();
    console.log(phone);
    localStorage.setItem("phone", phone);

    var contact = $("#contact").val();
    console.log(contact);
    localStorage.setItem("contact", contact);

    var product = $("#product option:selected").text();
    console.log(product);
    localStorage.setItem("product", product);

    var quantity = $("#quantity").val();
    console.log(quantity);
    localStorage.setItem("quantity", quantity);

    var productPrice = $("#product option:selected").val();
    console.log(productPrice);
    // var total = quantity * productPrice;
    localStorage.setItem("productPrice", productPrice);

    // getting values for payment page
    window.open("payment.php", "_self");
  });

  $("#checkout").on("click", function (e) {
    e.preventDefault();
    if (validateCard() == false && debug == true) {
      return false;
    }
  });

  $("#f_nameData").val(localStorage.getItem("f_name"));

  $("#l_nameData").val(localStorage.getItem("l_name"));

  $("#emailData").val(localStorage.getItem("email"));

  $("#streetData").val(localStorage.getItem("street"));

  $("#townData").val(localStorage.getItem("town"));

  $("#stateData").val(localStorage.getItem("state"));

  $("#codeData").val(localStorage.getItem("code"));

  $("#phoneData").val(localStorage.getItem("phone"));

  $("#contactData").val(localStorage.getItem("contact"));

  $("#productData").val(localStorage.getItem("product"));

  $("#quantityData").val(localStorage.getItem("quantity"));

  $("#priceData").val(localStorage.getItem("productPrice"));

  function validateForm() {
    var result = true;
    var errMsg = "";
    var product = document.getElementById("product").value;
    var quantity = document.getElementById("quantity").value;
    var state = document.getElementById("state").value;
    var code = document.getElementById("code").value;
    var code_check = parseInt(code.substring(0, 1));

    if (!(quantity > 1 && product != "")) {
      //validating quality here
      // errMsg = errMsg + " Your quantity must be greater than 0\n";
      result = false;
    }

    switch (
      state // validating post code here for different states
    ) {
      case "VIC":
        if (!(code_check == "3" || code_check == "8")) {
          errMsg =
            errMsg + "Your first code digit must be 3 or 8 for Victoria. \n";
          result = false;
        }
        break;
      case "NSW":
        if (!(code_check == "1" || code_check == "2")) {
          errMsg = errMsg + "Your first code digit must be 1 or 2 for NSW. \n";
          result = false;
        }
        break;
      case "QLD":
        if (!(code_check == "4" || code_check == "9")) {
          errMsg = errMsg + "Your first code digit must be 4 or 9 for QLD. \n";
          result = false;
        }
        break;
      case "NT":
      case "ACT":
        if (!(code_check == "0")) {
          errMsg = errMsg + "Your first code digit must be 0 for NT. \n";
          result = false;
        }
        break;
      case "WA":
        if (!(code_check == "6")) {
          errMsg = errMsg + "Your first code digit must be 6 for WA. \n";
          result = false;
        }
        break;
      case "SA":
        if (!(code_check == "5")) {
          errMsg = errMsg + "Your first code digit must be 5 for SA. \n";
          result = false;
        }
        break;
      case "TAS":
        if (!(code_check == "7")) {
          errMsg = errMsg + "Your first code digit must be 7 for TAS. \n";
          result = false;
        }
      default:
        errMsg =
          errMsg + "Your first code digit doesn't meet any specified digit";
    }
    if (errMsg != "") {
      alert(errMsg);
    }
    return result;
  }

  // validation of forms in payment.html

  // var cardForm = document.getElementById("card_form");
  // cardForm.onsubmit = validateCard;

  function validateCard() {
    var errMsg = "";
    var result = true;
    var cardType = document.getElementById("cardType").value;
    var creditNumber = document.getElementById("creditNumber").value;
    // alert(creditNumber);

    cardType = cardType.toLowerCase();
    if (
      !(
        cardType == "visa" ||
        cardType == "mastercard" ||
        cardType == "american express"
      )
    ) {
      errMsg =
        errMsg +
        "Your card type must a Visa card, Mastercard or an An American Express card. \n";
      result = false;
    }

    if (!(creditNumber.length == 15 || creditNumber.length == 16)) {
      errMsg =
        errMsg + "Your credit card number must be 15 or 16 digit long. \n";
      result = false;
    }

    if (
      cardType == "visa" &&
      !(
        result == true &&
        creditNumber.length == 16 &&
        creditNumber.substring(0, 1) == "4"
      )
    ) {
      errMsg = errMsg + "Visa cards  have 16 digits and start with a 4. \n";
      result = false;
    } else if (
      cardType == "mastercard" &&
      !(
        result == true &&
        creditNumber.length == 16 &&
        creditNumber.substring(0, 2) >= "51" &&
        creditNumber.substring(0, 2) <= "55"
      )
    ) {
      errMsg =
        errMsg +
        "MasterCard have 16 digits and start with digits 51 through to 55. \n";
      result = false;
    } else if (
      cardType == "american express" &&
      !(
        result == true &&
        creditNumber.length == 15 &&
        (creditNumber.substring(0, 2) == "34" ||
          creditNumber.substring(0, 2) == "37")
      )
    ) {
      errMsg =
        errMsg + "American Express has 15 digits and starts with 34 or 37. \n";
      result = false;
    }
    if (errMsg != "") {
      alert(errMsg);
    }
    return result;
  }
});
