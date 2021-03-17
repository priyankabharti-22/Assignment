<?php
include('config.php');
?>

<?php
    $id=$_GET['id'];
    $sql = "SELECT * FROM `users` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $email = $row['email'];
    $gender = $row['gender'];
    $city = $row['city'];
?>
<?php
    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];

        $sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender', city='$city' WHERE id='$id'";
        if(mysqli_query($conn, $sql)){
            echo "Data updated successfully...";
            header("Location:details.php");
    }
    else{
        echo "Updation failed..";
    }
}
?>
<html>
    <head>
        <title>Edit</title>
    </head>
    <body>
        <form method="POST" action="edit.php?id=<?php echo "$id"?>">
            UserName*<input type="text" name="username" value=<?php echo "$username" ?> placeholder="First Name" required/><br>
            E-mail*<input type="email" name="email" value=<?php echo "$email" ?> placeholder="Mail@example.com"required/><br>
            Gender  Male <input type="radio" name="gender" value="male" <?php if($gender=="male"){echo "checked";}?>>
            Female <input type="radio" name="gender" value="female" <?php if($gender=="female"){echo "checked";}?>><br>
            City*<Select name="city" required>
                <option value="Dehradun"<?php if($city=="Dehradun"){echo "selected";}?>> Dehradun</option>
                <option value="Delhi"<?php if($city=="Delhi"){echo "selected";}?>> Delhi</option>
                <option value="Chandigarh"<?php if($city=="Chandigarh"){echo "selected";}?>> Chandigarh</option>
                <option value="Mumbai"<?php if($city=="Mumbai"){echo "selected";}?>> Mumbai</option>
                <option value="Kolkata"<?php if($city=="Kolkata"){echo "selected";}?>> Kolkata</option>
                <option value="Chennai"<?php if($city=="Chennai"){echo "selected";}?>> Chennai</option>
                <option value="Jaipur"<?php if($city=="Jaipur"){echo "selected";}?>> Jaipur</option>
                <option value="NULL"<?php if($city=="NULL"){echo "selected";}?>> Other</option>
                </Select><br>
            <input type="submit" name="update" value="Click here to edit">
        </form>
    </body>
</html>
