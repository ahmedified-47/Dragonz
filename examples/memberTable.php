<?php
include("connection.php");

$select_data = mysqli_query($conn, "SELECT * FROM user");

while ($row = mysqli_fetch_assoc($select_data)) {
?>
    <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['mail']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td>
            <button type="submit" value="<?php echo $row['id']; ?>" class="btn btn-success update_modal_btn">Update</button>
        </td>
        <td>
            <button type="submit" value="<?php echo $row['id']; ?>" class="btn btn-danger delete">Delete</button>
        </td>
    </tr>
<?php
}
?>
<script>
    $(".delete").click(function() {
        let del_id = $(this).val();

        $.ajax({
            url: "delete.php",
            type: "POST",
            data: {
                del_id: del_id,
            },

            success: function(data) {
                alert(data);
                $("#memberTable").load("memberTable.php");
            }

        });
    })

    $(".update_modal_btn").click(function(){
        let update = $(this).val();
        // alert(update);
        $.ajax({
            url : "updateMember.php",
            type : "POST",
            data : {
                update : update,
            },
            success : function(data){
                $("#moda_body").html(data);
                $(table).load("memberTable.php");
            }
        })
    })

    $(".update_modal_btn").click(function() {
        $("#exampleModalMember").modal('show');
    });
</script>