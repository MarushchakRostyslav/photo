<?php

include 'DB.php';
$sql = "SELECT * FROM books";
$result = $conn->query($sql);





include 'header.php'

?>

<div class="admin_panel">

<?php if($result->num_rows > 0): ?>
    <table >
        
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Phone</th>
            <th>Comment</th>
        </tr>
        
        <?php  while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo  $row["id"] ?></td>
                <td><?php echo  $row["name"] ?></td>
                <td><?php echo  $row["surname"] ?></td>
                <td><?php echo  $row["phone"] ?></td>
                <td><?php echo  $row["comment"]?></td>
            </tr>
        <?php endwhile; ?>

    </table>

<?php else: ?>

    <h1>0 Results</h1>

<?php endif; ?> 
</div>
<?php

include 'footer.php'

?>