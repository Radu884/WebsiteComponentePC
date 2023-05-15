<!DOCTYPE html>
<html>
<body>
	<?php
$nameErr = ""; // definim și inițializăm variabila de eroare cu șirul vid
$name= ""; // definim și inițializăm variabila asociată câmpului cu șirul vid
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required"; }
else {
$name = test_input($_POST["name"]); }
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
} 
?>

<form method="post" action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name">

Nume: <input type="text" name="nume"><br>
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail: <input type="text" name="email"><br>
Data nasterii:<input type="date"
name="bdaymonth"><br>
Introduceti un numar intre 1 si 10<input type="number"
name="quantity" min="1" max="10"><br>
Selectati un fisier: <input type="file"
name="myFile"><br><br>
<input type="submit"><br><br>
</form>


</body>
</html>