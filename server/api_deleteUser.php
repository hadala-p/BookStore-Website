<?php

 session_start();
 if(!isset($_SESSION['zalogowany']))
{
  header("Location:loggin.php");
  exit();
} 
 if($_SESSION['nick'] !== "admin")
    {
        header("Location:loggin.php");
        exit();
    }
require_once"../elements/connect.php";
$mysqli = new mysqli($host, $db_user, $db_password, $db_name);

// Sprawdzanie po��czenia
if ($mysqli->connect_error) {
    die("B��d po��czenia: " . $mysqli->connect_error);
}

	function deleteUser($userId) {
    global $mysqli;

    // Przygotowanie zapytania SQL
    $stmt = $mysqli->prepare("CALL deleteUser(?)");
    if ($stmt === false) {
        // Obs�uga b��d�w
        die("B��d przygotowania zapytania: " . $mysqli->error);
    }

    // Powi�zanie parametr�w
    $stmt->bind_param("i", $userId);

    // Wykonanie zapytania
    if ($stmt->execute()) {
        echo "U�ytkownik usuni�ty.";
    } else {
        echo "B��d podczas usuwania u�ytkownika: " . $stmt->error;
    }

    // Zamkni�cie zapytania
    $stmt->close();
}

// Pobranie ID u�ytkownika z ��dania
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userId'])) {
    deleteUser($_POST['userId']);
} else {
    echo "Niepoprawne ��danie";
}
?>