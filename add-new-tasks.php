<?
include_once 'connection.php';

$taskName = $_POST["name"];
$query = $conn->prepare('INSERT INTO task (name) VALUES (?)'); //SQL query
$query->bind_param("s", $taskName);
$query->execute(); //Execute query

if ($query) {
    echo "New record created successfully";
} else {
    echo "Error";
}

$query->close();
$conn->close();
?>
