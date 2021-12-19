<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Contact Form</title>
</head>
<body>
<form action="data.php" method="POST">
<div class="container">
<h1> Contact Form</h1>	
<label>Title</label>
<!--for drop-down list select tag is use-->
<select name="title1">	
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Ms">Ms</option>
</select><br><br>
<!-- input tag use for create input field--->
<label>Firstname :*</label>
<!--- user required to fill * mark field---->
<input type="text" name="fn" placeholder="Enter your first name" required><br>
<label>Lastname :*</label>
<input type="text" name="ln" placeholder="Enter your last name" required><br>
<label>Date of Birth :</label>
<input type="date" name="DOB"><br>
<label>Telephone Number : *</label>
<input type="tel" name="Number" placeholder="Enter your number" maxlength="10" required><br>
<label>File upload (only pdf and images) :</label>
<!---only pdf and images accept in this field---> 
<input type="file" onchange="readURL(this);" name="File" accept=".jpg,.pdf" required><br>
<label>Email : </label>
<input type="text" name="em" placeholder="Enter your email id" required ><br>
<!-- Maxlength attribute used to accept maximum 300 charaters--->
<label>Message :</label> 
<input type="text" name="msg" placeholder="Enter Message" maxlength="300"><br>
<input type="submit" name="submit" id="submit">
</div>	
</form>	
</body>
</html>
