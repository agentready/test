<!DOCTYPE html>
<html>
<head>
	<title>Array Exercise</title>
</head>
<body>
	<?php
		/* 
		Q2. For this exercise, you will use a list of ten of the largest cities in the world. (Please note, these are not the ten largest, just a selection of ten from the largest cities.) Create an array with the following values: Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London. Print these values to the browser separated by commas, using a loop to iterate over the array. Sort the array, then print the values to the browser in an unordered list, again using a loop. Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort the array again, and print it once more to the browser in an unordered list. 

		$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

		foreach ($cities as $c) {
			echo $c.', ';
		}
				
		sort($cities);

		echo "<ul>";
		foreach ($cities as $c) {
			echo "<li>". $c ."</li>";
		}
		echo "</ul>";

		array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

		sort($cities);

		echo "<ul>";
		foreach ($cities as $c) {
			echo "<li>". $c ."</li>";
		}
		echo "</ul>";	

		*/
	?>	

		
	<?php
		/*
		Q3. For this PHP exercise, create a form asking the user for input about the weather the user has experienced in a month of the user's choice. In separate text fields, request the city, month and year in question. Below that, show a series of checkboxes using the same weather conditions you used in Arrays Ex. #1. (Those values were: rain, sunshine, clouds, hail, sleet, snow, wind.) Set up the form to create an array from the checked items. 

		In the response section of your script, create an array using the city, month and year the user entered as values. Print the following response "In $city in the month of $month $year, you observed the following weather:", where $city, $month and $year are values from the array you created.

		Next, loop through the $weather[] array you received from the user to send back a bulleted list with the user's responses.
		*/

		/*
	    if (isset($_POST['city']) && isset($_POST['month']) && isset($_POST['year'])) {
	        $city = $_POST['city'];
	        $month = $_POST['month'];
	        $year = $_POST['year'];
	 
	        if (empty($city) === true || empty($month) === true || empty($year) === true) {
	            echo "Please fill out all the fields";
	        }else {
	         
	 
	            if (isset($_POST['weather'])) {
	            $weather = $_POST['weather'];
	                echo "In $city in the month of $month $year, you observed the following weather:";
	                echo "<ul>";
	                    foreach ($weather as $value) {      
	                        echo "<li>" . $value . "</li>";
	                    }
	                echo "</ul>";
	            exit();
	            }else {
	                echo "Please choose what weather you are experiencing";
	            }
	        }
	    }
	    */
	?>	 
	

	<h2>How Are You Traveling?</h2>
 	
			<?php
				//If form not submitted, display form.  
				if (!isset($_POST['submit'])){
				$travel=array(
				  "Automobile",
				  "Jet",
				  "Ferry",
				  "Subway"
				);			 
			?>
	
	<p>Travel takes many forms, whether across town, across the country, or
	 around the world. Here is a list of some common modes of transportation:</p>
		
	<ul>	 
			<?php
				foreach ($travel as $t){
				  echo "<li>$t</li>\n"; 
				}
			?>
	 
	</ul>

	<form method="post" action="">
		<p>Please add your favorite, local, or even imaginary modes of travel 
		to the list, separated by commas:</p>
		<input type="text" name="added" size="40" />

			<?php
				//Send current travel array as hidden form data.
				foreach ($travel as $t){
				  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
				}
			?>

		<input type="submit" name="submit" value="Go" />
	</form>
	 
			<?php
				//If form submitted, process input.
				}else{
					//Retrieve established travel array.
					$travel=($_POST['travel']);
					//Convert user input string into an array.
					$added=explode(',',$_POST['added']);
					 
					//Add to the established array.
					array_splice($travel, count($travel), 0, $added);
					//This could also be written $travel=array_merge($travel, $added);
					 
					//Return the new list to the user.
					echo "<p>Here is the list with your additions:</p>\n<ul>\n";
					foreach($travel as $t){
					  //The trim functions deletes extra spaces the user may have entered.
					  echo "<li>".trim($t)."</li>\n";  
					}
					echo"</ul>"; 			 
			?>

	<p>Add more?</p>
	<form method="post" action="">
		<input type="text" name="added" size="80" />
		
				<?php
					//Send current travel array as hidden form data.
					foreach ($travel as $t){
					  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
					}
				?>

		<input type="submit" name="submit" value="Go" />
	</form>

				<?php
				}
				?>

</body>
</html>
