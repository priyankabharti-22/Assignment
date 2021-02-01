<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['City'];
    $course = $_POST['Course'];
    $interest = $_POST['interest'];
    echo "
    <table border='1' >
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>City</th>
    <th>Course></th>
    <th colspan='3'>Interests</th>
    </tr>
    <tr>
    <td>$name</td>
    <td>$email</td>
    <td>$contact</td>
    <td>$city</td>
    <td>$course</td>
    <td>$interest[0]</td>
    <td>$interest[1]</td>
    <td>$interest[2]</td>
     </tr>
     </table>
        ";}

    ?>

<html>
<head>
<script>
function validateForm() {
  var x = document.forms["FORM"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var y = document.forms["FORM"]["contact"].value;
  if (y.length!=10) {
    alert("length must be 10");
    return false;
  }
  var le =document.getElementsByTagName("input");
  var c=0;
  for(var i=0;i<le.length;++i){
      if(le[i].type=="checkbox" && le[i].checked==true)
      {
          c++;
      }
  }
    if(c<3 || c>5)
     {alert("At least 3 interests and at max 5 interests");return false;}
    return true;
  
}
</script>
</head>
<body>

<form name="FORM" action="assignment2.php" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="name" required><br>
  EMAIL<input type="email" name="email" required ><br>
  CONTACT<input type="text" name="contact" required><br>
  CITY<select  name="City" >
                 <option>Dehradun</option>
                 <option>Delhi</option>
                 <option>Chandigarh</option>
                 <option>London</option>
                 <option>Lahore</option>
                 <option>Others</option>
                 </select><br>
        COURSE<select name="Course" >
               <option>BTECH</option>
                 <option>BCA</option>
                 <option>MCA</option>
                 <option>BBA</option>
                 <option>MBA</option>
                 <option>Others</option>
                 </select><br>
                 INTERESTS
        Programming<input type="checkbox" name="interest[]" value="Programming">
        Cricket<input type="checkbox" name="interest[]" value="Cricket">
        Football<input type="checkbox" name="interest[]" value="Football">
        Reading<input type="checkbox" name="interest[]" value="Reading">
        Singing<input type="checkbox" name="interest[]" value="Singing">
        Painting<input type="checkbox" name="interest[]" value="Painting">
        <br>


  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>