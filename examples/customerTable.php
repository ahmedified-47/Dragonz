<?php
include("connection.php");

$select_data = mysqli_query($conn, "SELECT * FROM customer");

while ($row = mysqli_fetch_assoc($select_data)) {
?>
    <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['registered_date']; ?></td>
        <td><?php echo $row['product']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
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
                $("#customerTable").load("customerTable.php");
            }

        });
    })
</script>