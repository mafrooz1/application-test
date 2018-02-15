<!DOCTYPE html>
<html lang="en">
  <head>
    	<title>App Test</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
		
		//Alert script
		$(document).ready(function()
		{
			$(document).on('click', 'button', function(){
				//Setting first name alert
				notice = $(this).closest("tr").find("td:nth-child(2)").text();
				// Setting last name alert
				notice += " " + $(this).closest("tr").find("td:nth-child(3)").text();
				// Setting email alert
				notice += " , " + $(this).closest("tr").find("td:nth-child(4)").text();
				alert(notice);
				});
		});
		</script>
  </head>
  <tbody>

	<?php
		function build_table($people){
		// start table
		$html = '<table>';
		// header row
		$html .= '<tr>';
		foreach($people[0] as $key=>$value){
				$html .= '<th>' . htmlspecialchars($key) . '</th>';
			}
		$html .= '</tr>';

		// data rows
		foreach( $people as $key=>$value){
			$html .= '<tr>';
			foreach($value as $key2=>$value2){
				$html .= '<td>' . htmlspecialchars($value2) . '</td>';
			}
			$html .= '<td><button type="button">Click Me!</button></td>'.'</tr>';
		}

		// finish table and return it

		$html .= '</table>';
		return $html;
	}

	$people = array(
	   array('Id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	   array('Id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	   array('Id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	   array('Id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	   array('Id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
	);

	echo build_table($people);
	?>
	</tbody>
</html>
