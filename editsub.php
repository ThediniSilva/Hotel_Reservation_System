<?php

$servername = "localhost";
$username = "root";
$password = "";
$db ="hotel";
//create connection
$conn = new mysqli($servername, $username, $password, $db);

// check connection
if($conn->connect_error){
die ("connection failed :". $conn->connct_error);   
}


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $Cname = $_POST['name'];
    $Cbirthday = $_POST['birthday'];
    $Cemail = $_POST['email'];   
    $Cpassword = $_POST['pwd'];

    // Insert user data into the database
    $sql = "INSERT INTO edit (Custname, Custbirthday, Custemail, Custpassword) VALUES ('$Cname', '$Cbirthday', '$Cemail', '$Cpassword')";

    if ($conn->query($sql)) {
        echo "Profile updated successfully!";
        echo "<script>alert('Record Inserted Successfully!!')</script>";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script>alert('Error in Insertion!!')</script>";
    } 
  
    // Close the database connection
    $conn->close();
} else {
    header("Location: Editprofile.php");
}
?>
