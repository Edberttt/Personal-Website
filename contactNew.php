<?php
include 'connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sql = "INSERT INTO `contactme` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";

// if($conn->query($sql) === TRUE){
//     echo "Your message has been sent. Thank you!";
// }
// else{
//     echo "" . $sql . "<br>" . $conn->error;
// }

if ($conn->query($sql) === TRUE) {
    echo "Your message has been sent. Thank you!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>




