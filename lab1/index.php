<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css"  href="/style.css">
</head>
<body>
	<form action="registrationComplete.php" method="get">
  <label >First name:</label><br>
  <input type="text"  name="fname" ><br>
  <label >Last name:</label><br>
  <input type="text"  name="lname" ><br>
  <label >Middle name:</label><br>
  <input type="text"  name="Mname" ><br>
  <label >Address:</label><br>
  <input type="text"  name="Address" ><br>
  <label >Date of Birth:</label><br>
  <input type="date"  name="date"><br>
  <label >Place of Birth:</label><br>
  <input type="text"  name="Placeofbirth" ><br>
  <label >Gender:</label><br>
  <input type="radio" name="gender" value="male">
  <label >Male</label><br>
  <input type="radio"  name="gender" value="female">
  <label >Female</label><br>
  <input type="radio" name="gender" value="other">
  <label for="other">Other</label><br><br>
  <label >Guardian:</label><br>
  <input type="text"  name="Guardian" ><br>
  <label >Contact Number:</label><br>
  <input type="text"  name="Contactnumber" ><br>
  <label >Civil Status:</label><br>
  <input type="text"  name="Civilstatus" ><br>
  <select  name="YearLevel">
  <option >1st year</option>
  <option >2nd year</option>
  <option >3rd year</option>
  <option >4th year</option>
</select><br>
<select  name="Course">
  <option >BS-IT</option>
  <option >CPE</option>
  <option >TCM</option>
</select><br>
  <label for="fname">School Year:</label><br>
  <input type="text"  name="SchoolYear" ><br>

  <input type="submit" name="Submit" action="registrationComplete.php" method="post" value="Submit">
</form> 


</body>
</html>