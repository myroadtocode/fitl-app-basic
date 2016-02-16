<?php
$id = $_REQUEST['id'];
$object = array(
	'title' => '',
	'question' => '',
	'description' => '',
	'code' => '',
	'date' => ''
);
if ( $id == 1 ){
	$object = array (

		'title' => 'Programming Question #1',
		'question' => 'I\'m having trouble displaying JavaScript alert',
		'description' => 'I think I\'m using the correct function, but I can\'t figure out what\'s wrong. Could you point me in the right direction?',
		'code' => 'alert(This is a message)',
		'date' => 'February 16, 2016'
		);
}
elseif ($id == 2) {
	$object = array (
		'title' => 'Programming Question #2',
		'question' => 'My HTML list isn\'t displaying properly.',
		'description' => 'I think I\'m using the right list element,',
		'code' => '&lt;ul&gt;
		           	item 1
		           	item 2
		           	item 3
		         &lt;/ul&gt;',
		'date' => 'February 16, 2016'
	);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['title']; ?></title>
    </head>
    	<h1><?php echo $object['question']; ?></h1>
    	<p><?php echo $object['description']; ?></p>
    	<pre>
    		<?php echo $object['code']; ?>
    	</pre>
    	<p>Question date: <?php echo $object['date']; ?> </p>
    <body>
    </body>
</html>