<?php


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
$sql = "Select * from HighScores  ORDER BY Score DESC";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Nome"]."-". $row["Score"]."|";
    }
} else {
    echo "0 results";
}

$conn->close();






//mysql_query(" Insert into HighScores  (Nome, Score) VALUES ('$person','$score')");
?>