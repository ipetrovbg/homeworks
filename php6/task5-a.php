<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Wiki за актьори</title>
</head>
<body>

<?php
	
	$actor = array(array());

	$actor[0] = array(
		'pic'		=>		'<img src="pic/Tom-Hanks.jpg" />',
		'name'		=> 		'Tom Hanks',
		'info'		=> 		'Thomas Jeffrey Hanks was 
							born in Concord, California, to Janet Marylyn 
							(Frager), a hospital worker, and Amos Mefford 
							Hanks, an itinerant cook. His father had 
							English, and some German, ancestry, while his mother`s family, 
							originally surnamed "Fraga", was entirely Portuguese.
							<br /><br />
							“ Acting Abilities:

							Acting Skill - 5 Stars<br />
							Overall Versatility - 4.8 Stars<br />
							Role Transformation - 4.9 Stars<br />
							<br /><br />
							Awards & Nominations:<br />
							<br /><br />
							Oscars: 2<br />
							Oscar Nominations: 5<br />
							BAFTA Awards: 0<br />
							BAFTA Nominations: 4<br />
							Golden Globes: 4<br />
							Golden Globe Nominations: 8<br />
							<br /><br />
							Greatest Performances:<br />
							<br /><br />
							"Forrest Gump" - Level of Difficulty - 5 Stars<br />
							"Philadelphia" - Level of Difficulty - 4.8 Stars<br />
							"Saving Private Ryan" - Level of Difficulty - 4.7 Stars ” - ChrisWalczyk55'
		

		);
	$actor[1] = array(
		'pic'		=>		'<img src="pic/Paul-Newman.jpg" />',
		'name'		=> 		'Paul Newman',
		'info'		=> 		'Screen legend, superstar, and the 
							man with the most famous blue eyes in movie 
							history, Paul Leonard Newman was born in January 
							1925, in Cleveland, Ohio, the second son of Theresa 
							(Fetsko) and Arthur Sigmund Newman. Paul`s father was 
							Jewish, the son of immigrants from Poland and Hungary;
							 he owned a successful sporting goods store.
							<br /><br />
							“ Acting Abilities:
							<br /><br />
							Acting Skill - 4.8 Stars<br />
							Overall Versatility - 4.7 Stars<br />
							Role Transformation - 4.7 Stars<br />
							<br /><br />
							Awards & Nominations:<br />
							<br /><br />
							Oscars: 1<br />
							Oscar Nominations: 10<br />
							BAFTA Awards: 1<br />
							BAFTA Nominations: 5<br />
							Golden Globes: 3<br />
							Golden Globe Nominations: 12<br />
							<br /><br />
							Greatest Performances:<br />
							<br /><br />
							"The Verdict" - Level of Difficulty - 4.7 Stars<br />
							"Road to Perdition" - Level of Difficulty - 4.7 Stars<br />
							"The Color of Money" - Level of Difficulty - 4.8 Stars ” - ChrisWalczyk55'
		

		);
	$actor[2] = array(
		'pic'		=>		'<img src="pic/denzel-washington.jpg" />',
		'name'		=> 		'Denzel Washington',
		'info'		=> 		'Denzel Hayes Washington, Jr. was 
							born on December 28, 1954 in Mount Vernon, 
							New York. He is the middle of three children
							 of a beautician mother, Lennis (Lowe), from
							  Georgia, and a Pentecostal minister father, 
							  Denzel Washington, Sr., from Virginia.
							<br /><br />
							“ Acting Abilities:
							<br /><br />
							Acting Skill - 5 Stars<br />
							Overall Versatility - 4.7 Stars<br />
							Role Transformation - 4.8 Stars<br />
							<br /><br />
							Awards & Nominations:
							<br /><br />
							Oscars: 2<br />
							Oscar Nominations: 6<br />
							BAFTA Awards: 0<br />
							BAFTA Nominations: 0<br />
							Golden Globes: 2<br />
							Golden Globe Nominations: 7
							<br /><br />
							Greatest Performances:
							<br /><br />
							"Glory" - Level of Difficulty - 4.6 Stars<br />
							"Malcolm X" - Level of Difficulty - 4.8 Stars<br />
							"Training Day" - Level of Difficulty - 5 Stars ” - ChrisWalczyk55'
		

		);
	$actor[3] = array(
		'pic'		=>		'<img src="pic/clint-eastwood.jpg" />',
		'name'		=> 		'Clint Eastwood',
		'info'		=> 		'Perhaps the icon of macho movie stars, 
							Clint Eastwood has become a standard in 
							international cinema. He was born in 1930
							 in San Francisco, to Margaret Ruth (Runner), 
							 a factory worker, and Clinton Eastwood, Sr.,
							  a steelworker. 
							<br /><br />
							“ Acting Abilities:
							<br /><br />
							Acting Skill - 4.5 Stars<br />
							Overall Versatility - 4.2 Stars<br />
							Role Transformation - 4.6 Stars<br />
							<br /><br />
							Awards & Nominations:
							<br /><br />
							Oscars: 2 (Directing)
							Oscar Nominations: 7 (6 for Directing)<br />
							BAFTA Awards: 0<br />
							BAFTA Nominations: 3 (Directing)<br />
							Golden Globes: 3 (Directing)<br />
							Golden Globe Nominations: 12 (Directing)
							<br /><br />
							Greatest Performances:
							<br /><br />
							"Unforgiven" - Level of Difficulty - 4.4 Stars
							"Million Dollar Baby" - Level of Difficulty - 4.5 Stars<br />
							"The Good, the Bad, and the Ugly" - Level of Difficulty - 4.4 Stars ” - ChrisWalczyk55'
		

		);

if ($_GET) {	

	switch ($_GET['actor']) {
		case '0':
			foreach ($actor[$_GET['actor']] as $key => $value) {
				echo $key . ' - ' . $value . '<br />';
			}
			break;
		case '1':
			foreach ($actor[$_GET['actor']] as $key => $value) {
				echo $key . ' - ' . $value . '<br />';
			}
			break;
		case '2':
			foreach ($actor[$_GET['actor']] as $key => $value) {
				echo $key . ' - ' . $value . '<br />';
			}
			break;
		case '3':
			foreach ($actor[$_GET['actor']] as $key => $value) {
				echo $key . ' - ' . $value . '<br />';
			}
			break;
		
		default:
			# code...
			break;
	}

}
	

?>

	<form method="get" action="">
		<h4>Избери актьор</h4>
		<select name="actor">
			
			<option value="0">Tom Hanks</option>
			<option value="1">Paul Newman</option>
			<option value="2">Denzel Washington</option>
			<option value="3">Clint Eastwood</option>

		</select>
		<input type="submit" name="submit" value="Check" />
	</form>
</body>
</html>