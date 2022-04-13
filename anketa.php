<?php
  require_once 'header.php';
  require_once 'dbConn.php';
// connect to the database
$pdo = pdo_connect_mysql();

session_start();

echo $_COOKIE['Test'];

 //if (isset($_GET['vertical_id'])) {
// $stmt = $pdo->prepare('SELECT * FROM poll_answers WHERE vertical_id = ?');
//     $stmt->execute([$_GET['vertical_id']]);
// }
//connect to the database and select the publisher

$sql = 'SELECT poll_id, vertical_id, title, title1 FROM poll_answers WHERE vertical_id = 1';
//$sql = 'SELECT poll_id, vertical_id, title, title1 FROM poll_answers WHERE vertical_id = ?';

?>
<div class="container">
    <h3>Выберите профессию</h3>
 
    <form action="<?php $_PHP_SELF ?>" method="post" name="">
    <input type="hidden" name="" value=""> 
<?php

foreach ($pdo->query($sql) as $row) {
?>
<input type="text" class="hidden" name="spam">
<?php print $row['poll_id']. "\n"; ?>
	<input type="radio" id="A" name="<?php print $row['poll_id']. "\n"; ?>" value=""><label for="a"><?php print $row['title']. "\n"; ?></label>
  
  <input type="radio" id="B" name="<?php print $row['poll_id']. "\n"; ?>" value=""><label for="b"><?php print $row['title1']. "\n"; ?></label>

<br><br>
<?php 
}
?>


    <input type="submit" name="voteSubmit" class="button" value="Submit">
    
 
    </form>
</div>

 
 
