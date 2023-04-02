<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {   
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form name="f1" method="post" action="welcome.php">  
  <div class="container">  
  	<center>  <h1> Student Registeration Form</h1> </center>  
  	<label> Student Name </label>   
	<input type="text" name="sname" placeholder= "Your Name" size="15" required />      
  	<div>  
		<label>Course :</label>   
		<select name="course">  
			<option value="Course">Course</option>  
			<option value="BCA">BCA</option>  
			<option value="BBA">BBA</option>  
			<option value="B.Tech">B.Tech</option>  
			<option value="MBA">MBA</option>  
			<option value="MCA">MCA</option>  
			<option value="M.Tech">M.Tech</option>  
		</select>  
	</div>  
	<div>  
		<label>Gender :</label><br>  
		<input type="radio" value="Male" name="gender" checked > Male
		<input type="radio" value="Female" name="gender"> Female   
		<input type="radio" value="Other" name="gender"> Other  
  	</div>
	<label>Phone :</label>   
		<input type="text" name="phone" placeholder="Phone Number" size="10"/ required>   
	<label>Student Address :</label>
	<textarea cols="80" rows="1" placeholder="Student Address" name="saddress" required></textarea>  
 	<label for="email"><b>Email</b></label>  
 	<input type="text" placeholder="Enter Email" name="email" required>  
	<label for="psw"><b>Password</b></label>  
    	<input type="password" placeholder="Enter Password" name="pass" required>  
    	<button type="submit" class="registerbtn">Register</button>
</div>  
</form>  
</body>  
</html>