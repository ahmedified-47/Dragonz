<?php
include("connection.php");

if (isset($_POST['update'])) {
  $id = $_POST['update'];
  $select = "SELECT * FROM product_details WHERE id='$id'";
  $query = mysqli_query($conn, $select);
  $row = mysqli_fetch_assoc($query);
?>
<input type="hidden" id="update_id" value="<?php echo $row['id']; ?>">
  <div class="modal-body">
  <div class="form-group">
      <label for="exampleInputEmail1">Image</label>
      <input type="file" class="form-control" id="image_update" name="image_update" value="<?php echo $row['image']; ?>" required>

  </div>

   <div class="form-group">
       <label for="exampleInputEmail1">Name</label>
       <input type="text" class="form-control" id="name_update" name="name_update" value="<?php echo $row['name']; ?>" aria-describedby="emailHelp" required>
   </div>
   <div class="form-group">
       <label for="exampleInputEmail1">Product Price</label>
       <input type="text" class="form-control" id="product_price_update" name="product_price_update" value="<?php echo $row['product_price']; ?>" aria-describedby="emailHelp">
   </div>
   <div class="form-group">
       <label for="exampleInputEmail1">Quantity</label>
       <input type="text" class="form-control" id="discounted_price_update" value="<?php echo $row['discounted_price']; ?>" name="discounted_price_update" aria-describedby="emailHelp" required>
   </div>
   <div class="form-group">
       <label for="exampleInputEmail1">Category</label>
       <input type="text" class="form-control" id="category_update" value="<?php echo $row['category']; ?>" name="category_update" aria-describedby="emailHelp" required>
   </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" id="update_btn" value="<?php echo $id ;?>" class="btn btn-primary">Save changes</button>
  </div>
<?php
}
?>
<script>
  $("#update_btn").click(function(){
    let id = $("#update_id").val();
    let image = $("#image_update").val();
    let name = $("#name_update").val();
    let product_price = $("#product_price_update").val();
    let discounted_price = $("#discounted_price_update").val();
    let category = $("#category_update").val();
// alert(image);
    $.ajax({
      url : "update_ajax.php",
      type : "POST",
      data : {
        id_update : id,
        image : image,
        name : name,
        product_price : product_price,
        discounted_price : discounted_price,
        category : category,
      },
      success : function(data){
        $("#table").load("table.php");
        $("#exampleModal1").modal('hide');
      }
    })
  })
</script>

