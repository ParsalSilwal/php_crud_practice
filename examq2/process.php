<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = isset($_POST['gender'])?$_POST['gender']:'';

    $errors = [];
    $emailFormat="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    // Validate Name (not empty)
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    // Validate Email (not empty and correct format)
    if (empty($email)) {
        $errors[] = "Email is required.";
    } 
    // elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $errors[] = "Invalid email format.";
    // }
    elseif (!preg_match($emailFormat, $email)) {
        $errors[] = "Invalid email format.";
    }

    // Validate Gender (must be selected)
    if (empty($gender)) {
        $errors[] = "Gender is required.";
    }

    // Display the results or errors
    if (empty($errors)) {
        echo "<h3>Form Data:</h3>";
        echo "Name: " .$name . "<br>";
        echo "Email: " .$email. "<br>";
        echo "Gender: " .$gender. "<br>";
    } else {
        // Display error messages
        echo "<h3>Errors:</h3>";
        foreach ($errors as $error) {
            echo "<p style='color:red;'>" . $error . "</p>";
        }
    }
}
?>
