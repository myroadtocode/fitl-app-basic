<?php
$id = $_REQUEST['id'];
$object = array(
	'title' => '',
	'question' => '',
	'description' => '',
	'code' => '',
	'date' => ''
);

// Databese connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

// Create connection
$connection = new mysqli($servername, $username, $password);

// Check for an error
if ($connection->connect_error) {
	echo 'Connection failed: '. $connection->connect_error;
	exit;
}
// Otherwise connection is successfull
// echo 'Connected successfully';

// Connect to the "fitl" database
$connection->select_db('fitl');

// Query to select an object
$sql = 'SELECT * FROM questions WHERE id = ' . $id;

// Execute the query
$result = $connection->query($sql);

// Check for and retrieve the object
if ($result->num_rows > 0){
	$object = $result->fetch_assoc();
	// echo '<pre>';
	// print_r($object);
	// echo '</pre>';

}

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['title']; ?></title>
    </head>
    	<p><?php echo $object['description']; ?></p>
    	<pre>
    		<?php echo $object['code']; ?>
    	</pre>
    	<p>Question date: <?php echo $object['submitted_at']; ?> </p>
    <body>
    </body>
</html>