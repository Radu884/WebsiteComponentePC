<?php
define('DB_SERVER', 'localhost'); // numele serverului
define('DB_USERNAME', 'root'); //id-ul userului
define('DB_PASSWORD', ''); // parola
define('DB_NAME', 'Proiect WEB1'); //numele bazei de date
/* Conectarea la baza de date */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Verificare conexiune
if($link === false){
    die("ERROR: Nu s-a putut face conexiunea " . mysqli_connect_error());
}
?>
