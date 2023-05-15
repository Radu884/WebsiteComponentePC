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

input[type=number], select {
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
        <form action="c1.php" method="post">
                  <p>
                <label for="card" style="color:orange">card:</label><br>
                <input type="text" name="card" id="card">
            </p>
            <p>
                <label for="serie" style="color:green">serie:</label><br>
                <input type="text" name="last_name" id="serie">
            </p>
            
            <p>
                <label for="numar" style="color:blue">numar:</label><br>
                <input type="number" name="email" id="numar">
            </p>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>