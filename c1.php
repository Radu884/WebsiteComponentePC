<?php
/*Conexiunea la serverul MySQL
Presupunând că rulați MySQL server cu setarea implicită ( utilizator "root" fără parolă) */
$link = mysqli_connect("localhost", "root", "", "ProiectWEB1");
 // Verificarea conexiunii
if($link === false){
    die("ERROR: Conexiunea nu a putut fi realizata." . mysqli_connect_error());
} 
// Pregatirea unei instructiuni de inserare
$sql = "INSERT INTO test (card, serie, numar) VALUES (?, ?, ?)";
if($stmt = mysqli_prepare($link, $sql)){
    //Legarea variabilele la instrucțiunile pregătite ca parametri
    mysqli_stmt_bind_param($stmt, "ssi", $card, $serie, $numar);
    // Setarea parametrilor
    $card = $_POST['card'];
    $serie = $_POST['serie'];
    $numar = $_POST['numar'];
    
    
    // Executatea instructiunii pregatite mai sus
    if(mysqli_stmt_execute($stmt)){
        echo "Datele au fost salvate.";
    } else{
        echo "ERROR: Nu a putut fi executat: $sql. " . mysqli_error($link);
    }
} else{
    echo "ERROR: Nu a putut fi pregatit: $sql. " . mysqli_error($link);
}
// Inchiderea declaratiei
mysqli_stmt_close($stmt);
// Inchiderea conexiunii
mysqli_close($link);
?>