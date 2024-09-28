<?php
// Include the database connection file
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "lossfound";

$db = mysqli_connect($servername,$username,$password,$database);
if($db){


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prevent SQL injection by using prepared statements
    $stmt = "SELECT * FROM he_login WHERE username='$username' AND password='$password'";
    $result = $db->query($stmt);
    
    // If user is found in the database
    if (isset($result)) {
        $_SESSION['login_user'] = $username;
        header("location: show.php");
    } else {
        $error = "Invalid username or password!";
    }
    $stmt->close();
    $conn->close();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    
    <form action="" method="POST">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    // Display error message if the login fails
    if (isset($error)) { 
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
</body>
</html>


<style >
/* Style for body */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Style for the form container */
form {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
}

/* Form heading */
h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

/* Style for labels */
label {
    font-size: 14px;
    color: #333;
}

/* Style for input fields */
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
}

/* Style for the submit button */
input[type="submit"] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Error message styling */
p {
    text-align: center;
    font-size: 14px;
}
h2{
    text-align: center;
}
</style>