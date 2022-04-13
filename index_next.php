<?php
    //include and initialize Poll class 
    require_once 'header.php';
    require_once 'dbConn.php';


session_start();

// connect to the database
$pdo = pdo_connect_mysql();
$msg = '';

$spam = $_POST['spam'];
if (empty($spam)){
// условие проверки, если поле spam пустое, то форма обрабатывается, 

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


if (SetCookie("Test","$name")) echo "<h3>Cookies успешно установлены!</h3>";

?>
<?php if ($msg): ?>
        <p><?=$msg?></p>
    <?php endif; 

} else exit ; //spam bolso chyk ehske


    echo $_COOKIE['Test'];
    ?>

    <a href ="anketa.php?vertical_id=1">начать тест</a>