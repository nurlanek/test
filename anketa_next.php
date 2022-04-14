<?php
    //include and initialize Poll class 
    require_once 'header.php';
    require_once 'dbConn.php';


session_start();

// connect to the database
$pdo = pdo_connect_mysql();
$msg = '';

// if (!empty($_POST)) {

     // $poll_id = isset($_POST['poll_id']) ? $_POST['poll_id'] : '';
     // $title_1 = isset($_POST['title_1']) ? $_POST['title_1'] : '';
     
//     // Insert new record into the "polls" table
//     $stmt = $pdo->prepare('INSERT INTO answers VALUES (NULL, ?, ?)');

//      $sql = "INSERT INTO answers (poll_id, title)
// VALUES ('$poll_id ', '$title_1')";
//     // $stmt->execute([$poll_id,  $title_1]);
    

//       //Output message to the user 

//      $msg = ' saved successfully!';
	
// }

print ("poll_id: " . $_POST['poll_id'] . ".<br>\n");
print (" Ваше имя: " . $_POST['title_1'] . ".<br>\n");


?>
<?php if ($msg): ?>
        <p><?=$msg?></p>
    <?php endif; 




    echo $_COOKIE['Test'];
    ?>

    <a href ="anketa.php?vertical_id=1">начать тест</a>