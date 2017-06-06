<?
include_once 'connection.php';

$query = $conn->prepare('SELECT * FROM task'); //SQL query
$query->execute(); //Execute query
$query->bind_result($id, $name, $checked);//Bind query results

$results = array();

while($query->fetch()){
	$results[] = array('id' => $id, 'name' => $name, 'checked' => $checked);
}

$query->close();
$conn->close();
$results = json_encode($results);
echo $results;
?>
