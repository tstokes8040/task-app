<?
include_once 'connection.php';

$query = $conn->prepare('SELECT id, name, checked FROM task'); //SQL query
//$query = $conn->prepare('SELECT id, name, checked FROM task WHERE id = ?');
//$query->bind_param('i', 2); // i stands for integer, there's also s for string
$query->execute(); //Execute query
$query->bind_result($id, $name, $checked);//Bind query results
$query->store_result();

if ($query->num_rows > 0) {
    // output data of each row
    while($query->fetch()){
    	if($checked){
    		echo '<p class="checked">'.$name.'</p>';
    	}
      else {
    		echo '<p class="not-checked">'.$name.'</p>';
    	}
    }
}
else {
    echo "No tasks have been added";
}
$query->close();
$conn->close();
?>
