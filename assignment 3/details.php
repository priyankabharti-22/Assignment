<?php
include_once('config.php');
?>
<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows > 0){
?>
        <table border='1px'>
            <thead>
                <tr>
                    <th>UserName</th>
                    <th>E-Mail</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>Edit</th>
				    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $result->fetch_array()){
                ?>
                        <tr>
                            <td><?php echo $row[1]?></td>
                            <td><?php echo $row[2]?></td>
                            <td><?php echo $row[3]?></td>
                            <td><?php echo $row[4]?></td>
                            <td><a href="edit.php?id=<?php echo $row[0]?>">
				            <input type="button" value="Edit"></a></td>
				            <td><a href="delete.php?id=<?php echo $row[0]?>">
				            <input type="button" value="Delete"></a></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
<?php
    }
    else{
        echo "no data";
    }
?>
<html>
    <title>
        User Details
    </title>
    <body></body>
</html>
