<?php
include("connection.php");
$select = "SELECT * FROM product_details";
$query = mysqli_query($conn, $select);


while ($row = mysqli_fetch_assoc($query)) {
?>
  <tr>
    <th scope="row"><?php echo $row['id']; ?></th>
    <td><img src="<?php echo "uploads/" . $row['image']; ?>" class="img-fluid"></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['product_price']; ?></td>
    <td><?php echo $row['discounted_price']; ?></td>
    <td><?php echo $row['category']; ?></td>
    <td>
      <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-success update_modal_btn">Update</button>
    </td>
    <td>
      <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-danger delete">Delete</button>
    </td>
  </tr>
<?php
}
?>

<script>
  $(".delete").click(function(e) {

    alert("delete");
    e.preventDefault();
    let del_id = $(this).val();

    $.ajax({
      url: "delete.php",
      type: "POST",
      data: {
        del_id: del_id,
      },

      success: function(data) {
        // alert(data);
        $("#table").load("table.php");
      }

    });
  });



  $(".update_modal_btn").click(function(){
        let update = $(this).val();
        // alert(update);
        $.ajax({
            url : "update.php",
            type : "POST",
            data : {
                update : update,
            },
            success : function(data){
                $("#modal_body").html(data);
                $(table).load("table.php");
            }
        })
    })

    $(".update_modal_btn").click(function() {
        $("#exampleModal1").modal('show');
    });
</script>
