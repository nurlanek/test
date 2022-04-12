<?php
  require_once 'header.php';
  require_once 'dbConn.php';
$publisher_id = 1;
// connect to the database
$pdo = pdo_connect_mysql();

?>
<?php



//$vertical_id = 1;

//connect to the database and select the publisher

$sql = 'SELECT poll_id, vertical_id, title FROM poll_answers WHERE vertical_id = 1';





// $sql = 'SELECT poll_id, vertical_id, title
// 		FROM poll_answers
//         WHERE vertical_id = : vertical_id';

//  $statement = $pdo->prepare($sql);
//  $statement->bindParam(':vertical_id', $vertical_id, PDO::PARAM_INT);
//  $statement->execute();
// $vertical = $statement->fetch(PDO::FETCH_ASSOC);

// if ($vertical) {
// 	foreach ($vertical as $verticals) {
		
	
// 	echo $vertical['vertical_id'] . '.' . $vertical['poll_id'];
// 	}

// } else {
// 	echo "The answers with id $vertical_id was not found.";
// }


?>

<div class="container">
    <h3>Выберите профессию</h3>
    <input type="hidden" name="" value="">
    <form action="anketa-1.php" method="post" name="">
    
<?php 
foreach ($pdo->query($sql) as $row) {
    print $row['vertical_id'] . "\t";
    print $row['poll_id'] . "\t";
    print $row['title'] . "\n";
}


foreach ($pdo->query($sql) as $row) {
?>
<?php print $row['poll_id']. "\n"; ?>
	<input type="radio" id="" name=""><label for="a"><?php print $row['title']. "\n"; ?></label>
  
  <input type="radio" id="" name=""><label for="a"><?php print $row['title']. "\n"; ?></label>

<br><br>
<?php 
}
?>





   <br><br>
    <input type="submit" name="voteSubmit" class="button" value="Submit">
    
 
    </form>
</div>

 
 
