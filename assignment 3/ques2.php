<?php 
    if(isset($_POST['submit'])){
        $sum = $_POST['var1'] + $_POST['var2'];
        echo "sum of two variable is $sum ";
    }
    else{
        echo "No input"; 
    }
?>
<html>
    <head>
        <title>Sum of 2 variables</title>
    </head>
    <body>
        <form method="POST" action="ques2.php">
            Variable1 <input type="text" name="var1" >
            Variable2 <input type="text" name="var2" >
            <button class="submit" type="submit" value="submit" name="submit">SUBMIT</button></td></tr>   	
         	
        </form>
    </body>
</html>
