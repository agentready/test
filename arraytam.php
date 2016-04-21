<html>
<head></head>
<body>
	<?php
		if(!isset($_POST[submit])){		
	?>
			<p>Take some input</p>
			<form action="" method="POST">
				<input type="text" name="firstinput" />
				<input type="submit" name="submit" value="Enter"/>
			</form>			

	<?php
			
		} else {			

	?>

	<?php
			$firstinput = $_POST['firstinput'];
			if(!is_array($firstinput)){
				$firstinput = explode(',', $_POST['firstinput']);
			}
			var_dump($firstinput);
			echo "<p>You have entered : </p>";
			echo "<ol>";			
			foreach ($firstinput as $input) {
				echo "<li>" .$input. "</li>";
			}
			echo "</ol>";
	?>
			
			<p>1 . Take some more input</p>
			<form action="" method="POST">
				<input type="text" name="secondinput" />
				<?php
					//Send current array as hidden form data.
					foreach ($firstinput as $input){
						echo "<input type=\"hidden\" name=\"firstinput[]\" value=\"$input\" />";
					}
				?>
				<input type="submit" name="submit" value="Enter"/>
			</form>
		
	<?php
			// $firstinput = $_POST['firstinput'];
			// // $firstinput = explode(',', $_POST['firstinput']);
			// var_dump($firstinput);
			$secondinput = explode(',', $_POST['secondinput']);
			// array_splice($firstinput, count($firstinput), 0, $secondinput);
			var_dump($secondinput);
			$firstinput = array_merge($firstinput,$secondinput);

			foreach ($firstinput as $input) {
				echo "<li>" .$input. "</li>";
			}		
	?>	
			
			<p>2. Take some more input</p>
			<form action="" method="POST">
				<input type="text" name="secondinput2" />
				<?php
					foreach ($firstinput as $input){
						echo "<input type=\"hidden\" name=\"firstinput[]\" value=\"$input\" />";
					}
				?>
				<input type="submit" name="submit2" value="Enter"/>
			</form>
			
	<?php
		}	
	?>		

</body>
</html>