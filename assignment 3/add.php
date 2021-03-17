<?php
include_once('config.php');
?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "INSERT INTO `users` (`id`, `username`, `email`, `gender`, `city`) VALUES (NULL, '$username', '$email', '$gender', '$city')";
    mysqli_query($conn,$sql);
}
else{
    echo "please click submit button";
}

?>
<html>
    <head>
        <title>Form Data on Table</title>
    </head>
    <body>
        <form method="POST" action="add.php">
            UserName*<input type="text" name="username" placeholder="First Name" required/><br>
            E-mail*<input type="email" name="email" placeholder="Mail@example.com"required/><br>
            Gender  Male <input type="radio" name="gender" value="male">
            Female <input type="radio" name="gender" value="female"><br>
            City*<Select name="city" required>
                <option value="Dehradun"> Dehradun</option>
                <option value="Delhi"> Delhi</option>
                <option value="Chandigarh"> Chandigarh</option>
                <option value="Mumbai"> Mumbai</option>
                <option value="Kolkata"> Kolkata</option>
                <option value="Chennai"> Chennai</option>
                <option value="Jaipur"> Jaipur</option>
                <option value="NULL"> Other</option>
                </Select><br>
            <input type="submit" name="submit" value="Click here to submit">
        </form>
    </body>
</html>
