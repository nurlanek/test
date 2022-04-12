<?php
    //include and initialize Poll class 
    require_once 'header.php';
    require_once 'dbConn.php';


// connect to the database
$pdo = pdo_connect_mysql();
$msg = '';

// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Check if POST variable "title" exists, if not default the value to blank, basically the same for all variables
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
    // Insert new record into the "polls" table
    $stmt = $pdo->prepare('INSERT INTO profile1 VALUES (NULL, ?, ?)');
    $stmt->execute([$name, $surname]);
  
    // Output message to the user 

    $msg = 'Profile created successfully!';
	
}

?>
<?php if ($msg): ?>
        <p><?=$msg?></p>
    <?php endif; 

    ?>