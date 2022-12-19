<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET" name="">
	<table>
		<tr>
			<td><input type="text" name="url" value="<?php echo isset($_GET['url']) ? $_GET['url'] : ''; ?>" placeholder="Enter your search keywords" /></td>
			<td><input type="submit" name="" value="Search" /></td>
		</tr>
	</table>
</form>
<?php

  if (isset($_GET['url'])) {
    $url = $_GET['url'];
    header("Location: $url");
    exit;
  }
?> 
</body>
</html>