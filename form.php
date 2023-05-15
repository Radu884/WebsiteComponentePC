<!DOCTYPE html>

<html>
    <head>
        <title>Form</title>
    </head>
    <body>
    


        <form action="form.php" method="post">
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
              <p>
                <label for="gender">Gender:</label><br>
                <input type="radio" name="gender" value="male"> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
                <input type="radio" name="gender" value="other"> Other
            </p>
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress">
            </p>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>