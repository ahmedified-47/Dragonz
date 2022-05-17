<?php
include("connection.php");

if (isset($_POST['update'])) {
  $id = $_POST['update'];
  $select = "SELECT * FROM user WHERE id='$id'";
  $query = mysqli_query($conn, $select);
  $row = mysqli_fetch_assoc($query);
?>
<input type="hidden" id="update_id" value="<?php echo $row['id']; ?>">
  <div class="modal-body">
    <div class="form-group">
      <label for="exampleInputEmail1">User</label>
      <input type="text" class="form-control" id="name_update" value="<?php echo $row['name']; ?>">

    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="mail_update" value="<?php echo $row['mail']; ?>" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="password_update" value="<?php echo $row['password']; ?>">
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
    let name = $("#name_update").val();
    let mail = $("#mail_update").val();
    let password = $("#password_update").val();
// alert(id);
    $.ajax({
      url : "update_ajax_member.php",
      type : "POST",
      data : {
        id_update : id,
        name : name,
        mail : mail,
        password : password,
      },
      success : function(data){
        $("#memberTable").load("memberTable.php");
        $("#exampleModalMember").modal('hide');
      }
    })
  })
</script>