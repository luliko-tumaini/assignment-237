
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname= $_POST["firstname"];
    $lastname=$_POST['lastname'];

    $password = $_POST["password"];

    //validate and sanitize user input before using in a query
    $firstname = mysqli_real_escape_string($conn, $firstname);
    $lastname = mysqli_real_escape_string($conn, $lastname);


    // Retrieve user data from the database
    $sql = "SELECT * FROM  form  WHERE firstname = '$firstname' AND lastname='$lastname' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            //session
            echo "Invalid password";
        
        } else {
            
            header("Location: home.php");
        }
    } else {
        echo "User not found";
    }
}

// Close the database connection
$conn->close();



?>

