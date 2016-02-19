<?php

$page = $_REQUEST['page'];

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

if ($page == 'show') {
	$id = $_REQUEST['id'];
	show($id);
}

if ($page == 'create'){
	create();
}

// Load the page
function show($id) {
	global $connection;
	$object = array(
		'title' => '',
		'question' => '',
		'description' => '',
		'code' => '',
		'date' => ''
	);
    
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
	// include view 
	include "question-show-view.php";
}

function create(){
	include "question-create-view.php";
}

?>