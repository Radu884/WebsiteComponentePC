<!DOCTYPE html>

<html>
    <head>
        <title>Form</title>
    </head>
    <style>
        input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
} 


input[type=submit], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: yellow;
}
</style>
   <body  style="background-image: url('comfy.jpg');">
        <form action="insert.php" method="post">
            <p>
                <label for="firstName" style="color:red">First Name:</label><br>
                <input type="text" name="first_name" id="firstName">
            </p>
            <p>
                <label for="lastName" style="color:red">Last Name:</label><br>
                <input type="text" name="last_name" id="lastName">
            </p>
            <p style="color:red">
                 Gender: 
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
            </p>
            <p>
                <label for="emailAddress" style="color:red">Email Address:</label><br>
                <input type="text" name="email" id="emailAddress">
            </p>
            <input type="submit" value="Submit"><br>
        </form>
    </body>
</html>