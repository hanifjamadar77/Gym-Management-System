<?php
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "gym";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $conform_password = $conn->real_escape_string($_POST['conform_pass']);
    $gender = isset($_POST['gender']) ? $conn->real_escape_string($_POST['gender']) : '';

    if (empty($username) || empty($email) || empty($password) || empty($conform_password) || empty($gender)) {
        echo '<script>alert("Please Fill All Fields Properly")</script>';
    }
    elseif ($password !== $conform_password) {
        echo '<script>alert("The Password and Conform Password are not Matched")</script>';
    } else {

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, gender) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $email, $hashed_password, $gender);
        if ($stmt->execute()) { 
            echo '<script>alert("Account Created Successfully")</script>';
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}
$conn->close();
?>
