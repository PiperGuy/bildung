<html>
<body>

<form action="<?php $PHPSELF?>" method="POST">

<?php

$question=array("How are you ?","How good is your managerial skills ?","How good are you at presenting yourself ?","Do you like talking to new people","How do you like solving problem ?","Do you like to know how gadgets work ?","Where do you prefer to live ?");
echo json_encode($question[0]);
?>

<input type="text" id="1" name="choice"/><br>
<input type="submit" name="Submit" onclick="<?php foreach ($question as $key){
	$question[$key] += 1;?>
	
<?php endforeach ?>" >



</form>
</body>
</html>