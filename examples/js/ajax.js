$(document).ready(function () {
  $("#table").load("table.php");
  $("#insert").click(function () {
    $("#exampleModal").modal("show");
  });

  $("#insert_form").on("submit", function (e) {
    e.preventDefault();
    // let name = $("#fname").val();
    // let product_price = $("#product_price").val();
    // let sale_price = $("#sale_price").val();
    // let images = $("#images").val();

    $.ajax({
      url: "insert.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        alert(data);
        $("#exampleModal").modal("hide");
        $("#table").load("table.php");
        // $("#moda_body").html(data);
      },
    });
  });
});
