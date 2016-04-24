<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Input Aarray</title>
</head>
<body>
<?php

if (isset($_POST['send'])){
	$data = $_POST['something'];

	print_r($data);
}
?>
<form method="POST" action="">
		<input type="text" name="something[]" id="" placeholder="Input Something ...">
		<?php

			if($data){
				foreach ($data as $key => $value) {
					echo "<input type='hidden' name='something[]' value=$value>";
				}
			}

		?>
		<input type="submit" value="Submit" name="send">
	</form>
</body>
</html>