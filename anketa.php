<?php
  require_once 'header.php';
  require_once 'dbConn.php';
// connect to the database
$pdo = pdo_connect_mysql();

session_start();

echo $_COOKIE['Test'];

$sql = 'SELECT poll_id, vertical_id, title, title1, horizontal_id FROM poll_answers WHERE vertical_id = 1';

?>
<div class="container">
    <h3>Выберите профессию</h3>


<form action="anketa_func.php" method="post" >
<?php

foreach ($pdo->query($sql) as $row) {
?>

<input type="hidden" name="poll_id[]" value="<?php print $row['poll_id']. "\n"; ?>"> 

<?php print $row['poll_id']. "\n"; ?>

	<input type="radio" id="1" name="title_<?php print $row['horizontal_id']. "\n"; ?>" value="1">
  <label for="a"><?php print $row['title']. "\n"; ?></label>
  
  <input type="radio" id="2" name="title_<?php print $row['horizontal_id']. "\n"; ?>" value="2">
  <label for="b"><?php print $row['title1']. "\n"; ?></label>

<br><br>



<?php 
}
?>

<br><br><br>
    <input type="submit" name="voteSubmit" class="button" value="прейти на следуший">
  </form>
</div>

 
 
