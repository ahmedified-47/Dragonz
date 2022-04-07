<?php
include("settings.php");
$conn = @mysqli_connect($host,
		$user,
		$pwd,
		$sql_db
	);
if (isset($_POST['update'])) {
  $id = $_POST['update'];

  $select = "SELECT * FROM orders WHERE order_id='$id'";
  $query = mysqli_query($conn, $select);
  $row = mysqli_fetch_assoc($query);
?>
<input type="hidden" id="update_id" value="<?php echo $row['order_id']; ?>">
  <div class="modal-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Status</label>
      <select class = "form-control pb-5" name = "status_update" id="status_update" multiple>
                  <option value = "" disabled selected>None</option>
                  <option value = "PENDING">Pending</option>
                  <option value = "FULLFILLED">Full-Filled</option>
                  <option value = "PAID">Paid</option>
                  <option value = "ARCHIVED">Archived</option>
        </select>
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
    let status = $("#status_update option:selected").val();
    // alert(status);
    // alert(id);
    $.ajax({
      url : "update_ajax.php",
      type : "POST",
      data : {
        id_update : id,
        status_update : status,
      },
      success : function(data){
        // $("#table").load("table.php");
        $("#exampleModal").modal('hide');
      }
    })
  })
  // $("#table").load("table.php");
</script>