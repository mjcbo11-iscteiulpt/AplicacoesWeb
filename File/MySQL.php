<?php



//$score = mysql_real_escape_string(html_entities($_POST['score']));
//$person = mysql_real_escape_string(html_entities($_POST['person']));
$score = $_POST['score'];
$person = $_POST['person'];



$servername = "localhost";
$username = "id9681413_admin";
$password = "admin";
$dbname = "id9681413_highscores";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
$sql = " Insert into HighScores  (Nome, Score) VALUES ('$person','$score')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();






//mysql_query(" Insert into HighScores  (Nome, Score) VALUES ('$person','$score')");
?>