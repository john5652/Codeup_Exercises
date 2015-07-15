<?php 

	function can_i_watch_it($movie_name, $myAge, $min_age = 0)
	{
		if ($myAge >= $min_age) {
			echo 'yes you can watch it.';
		}
		else {
			echo 'NO KID';
		}
	}

	$movies = array(
		['name' => 'The Incredibles', 'rating' => 'PG'], 
		['name' => 'The Avengers', 'rating' => 'PG-13'], 
		['name' => 'Evil Dead', 'rating' => 'R'],
		['name' => 'Wall-E', 'rating' => 'G']
		)

 ?>