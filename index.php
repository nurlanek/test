
<?php
    //include and initialize Poll class 
    include 'header.php';

?>

<div class="container">
    <h3>Перед началом тестирования, ответьте пожалуйста на вопросы (все поля обязательны к заполнению)</h3>
    	<input type="hidden" name="" value="">
    <form action="index_next.php" method="post" name="">
    
    <label>Name </label>
    <input type="Text" name="name" id="name" > <br><br>
    <label>Surename </label>
    <input type="Text" name="surname" id="surname" >

    <br><br>
    <input type="submit" name="voteSubmit" class="button" value="Submit">
    
 
    </form>
</div>
