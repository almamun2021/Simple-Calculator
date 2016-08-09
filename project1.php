<!DOCTYPE html>
<html>
<head>
	<title>This is Calculate Term</title>
		<style type="text/css">
		body{
			width: 960px;
			margin: 0 auto;
			border: 1px solid blue;
			padding: 50px;
		}
	</style>
</head>
<body>

<?php include "function.php" ?>

	<form action="" method="post">
		<tr>
			<td>Enter the first number : </td>
			<td><input type="number" name="num1"></td>
		</tr>
		<tr>
			<td>Enter the second number : </td>
			<td><input type="number" name="num2"></td>
		</tr>
		<br>
		<tr>
			<td></td>
			<td><input type="submit" name="calculate" value="Calculate"></td>
		</tr>
		<br><br>
	</form>

	<?php 

	if (isset($_POST['calculate'])) {
		$numOne = $_POST['num1'];
		$numTwo = $_POST['num2'];

		if (empty($numOne) or empty($numTwo)) {
			echo "<b style='color:red'>Please Fill Up This Field</b> <br>";
		} else {
			echo "First Number is: ".$numOne. " & Second Number is ".$numTwo. "<br><br>";
		
		$cal = new Calculator;

		$cal->addition($numOne, $numTwo);
		$cal->subtraction($numOne, $numTwo);
		$cal->multiplication($numOne, $numTwo);
		$cal->division($numOne, $numTwo);
		}
	}
 ?>

</body>
</html>