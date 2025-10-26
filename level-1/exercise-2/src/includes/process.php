<?php
session_start();

$username = "";
$age = "";
$location = "";
$email = "";
$errorMsgs = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $errorMsgs[] = "The ‘Username’ field cannot be empty.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty($_POST["age"])) {
        $errorMsgs[] = "The ‘Age’ field cannot be empty.";
    } elseif (!filter_var($_POST["age"], FILTER_VALIDATE_INT) || $_POST["age"] < 1 || $_POST["age"] > 110) {
        $errorMsgs[] = "The ‘Age’ field must be a number between 1 and 110.";
    } else {
        $age = intval($_POST["age"]);
    }

    if (empty($_POST["location"])) {
        $errorMsgs[] = "The ‘City/Town’ field cannot be empty.";
    } else {
        $location = trim($_POST["location"]);
    }

    if (empty($_POST["email"])) {
        $errorMsgs[] = "The ‘Email address’ field cannot be empty.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errorMsgs[] = "The ‘Email address’ address is not valid.";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty($errorMsgs)) {
        $_SESSION['username'] = $username;
        $_SESSION['location'] = $location;
        $_SESSION['age'] = $age;
        $_SESSION['email'] = $email;

        header("Location: ../data.php");
        exit;
    } else {
        foreach ($errorMsgs as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<a href='../index.html'>Back to the form</a>";
    }
}

?>

