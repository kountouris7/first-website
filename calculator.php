<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
  <meta charset="utf-8">
</head>

<body>

<form>
  <input type="text" name ="num1" placeholder = "number1">
  <input type="text" name ="num2" placeholder = "number2">
  <select name="operator">
    <option>none</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
  </select>
  <br>
  <button type="submit" name="submit" value = "submit">Calculate</button>
</form>
<p>The answer is: </p>

<?php

if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
  
  switch ($operator) {
    
    case "none";
      echo "Please select a value";
      break;
    
    case "Add";
      echo $result=$result1+$result2;
      break;

      case "Subtract";
      echo $result1-$result2;
      break;

      case "Multiply";
      echo $result1*$result2;
      break;

      case "Divide";
      echo $result1/$result2;
      break;
  }
}
?>




</body>
</html>