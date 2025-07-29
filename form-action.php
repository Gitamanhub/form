<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $father = $_POST['father'];
    $cnic = $_POST['cnic'];
    $niv = $_POST['niv'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    // DB Connection
    $conn = new mysqli("localhost", "root", "", "pmci_database");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO admissions (name, father, cnic, niv, email, phone, country, message) 
            VALUES ('$name', '$father', '$cnic', '$niv', '$email', '$phone', '$country', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
