<?php
/* Conexiunea la serverul MySQL
Presupunând că rulați MySQL server cu setarea implicită ( utilizator "root" fără parolă) */
$link = mysqli_connect("localhost", "root", "", "ProiectWEB");
 // Verificarea conexiunii
if($link === false){
    die("ERROR:Conexiunea nu a putut fi realizata." . mysqli_connect_error());
} // Pregatirea unei instructiuni SELECT
$sql = "SELECT * FROM date";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }echo "</table>";
        // Eliberarea memoriei pentru rezultate
        mysqli_free_result($result);
    } else{
        echo "Nu au fost gasite inregistrari.";
    }
} else{
    echo "ERROR:  Nu a putut fi executat $sql. " . mysqli_error($link);
}// Inchiderea conexiunii
mysqli_close($link);
?>
