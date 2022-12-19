<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form>
        <input type="text" name="num1" value="">
        <input type="text" name="num2" value="">
        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="*">
        <input type="submit" name="sub" value="/">
    </form>     -->


    <?php
if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$result=$num1+$num2;
	else if($oprnd=="-")
		$result=$num1-$num2;
	else if($oprnd=="x")
		$result=$num1*$num2;
	else if($oprnd=="/")
		$result=$num1/$num2;
}?>
<html>
<head>
	<style type="text/css">
		.container
		{
			left: 25%;
			padding: 100px;
			text-align: center;
			border: 1px solid green;
			
		}
		input, select {
  			width: 40%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		}

		input[type=submit] {
  			width: 5%;
 		 	background-color: #4CAF50;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
	 	 	border-radius: 4px;
  			cursor: pointer;
}
	</style>
</head>
<body>
<div class="container">
<form method="post" action="">
<h1>Simple Calculator</h1>
<br>
First Number:<input name="n1" value="">
<br>
Second Number:<input name="n2" value="">
<br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
<br>
<br>Result: <input type='text' value="<?php echo $result; ?>"><br>
</form>
	</div>
</body>
</html>