<?php
	$Nume = $_POST['Nume'];
	$Adresa = $_POST['Adresa'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$Item = $_POST['Item'];
	$SerieCard = $_POST['SerieCard'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','pt_php');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into test(Nume, Adresa, email, gender, Item, SerieCard, number) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssi", $Nume, $Adresa, $email, $gender, $Item, $SerieCard, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}