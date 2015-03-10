<DOCTYPE html>

	<?php
	$students = [
	['name'=>'George Takei', 'Class'=>'Warp Physics', 'Grade'=>75],
	['name'=>'Leonard Nimoy', 'Class'=>'Anger Management', 'Grade'=>98],
	['name'=>'William Shatner', 'Class'=>'Ethics & the Chain of Command', 'Grade'=>69],
	['name'=>'James Doohan', 'Class'=>'Warp Physics', 'Grade'=>92],
	['name'=>'George Takei', 'Class'=>'Piloting', 'Grade'=>95],
	['name'=>'Leonard Nimoy', 'Class'=>'Warp Physics', 'Grade'=>95],
	['name'=>'Deforest Kelley', 'Class'=>'Botony', 'Grade'=>85],
	['name'=>'Nichelle Nichols', 'Class'=>'Communications', 'Grade'=>95],
	['name'=>'Zoe Saldana', 'Class'=>'Communications', 'Grade'=>35],
	['name'=>'William Shatner', 'Class'=>'Trible Care', 'Grade'=>100],
	];
	?>




	<html>
	<head>
		<title>TABLE</title>
		<meta charset "UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	</head>
	
	<style>
		.student_grade_table{
			border:1px solid black;
			margin-left:25%;
		}

		.student_grade_table tr:nth-child(even){
			background: lightgray;
		}

		.top{
			background-color:green !important;
		}

		.bottom{
			background-color:red !important;
		}

	</style>

	<body>
		
		<table class = 'student_grade_table'>
			
			<tr>
				<td>Name</td>
				<td>Class</td>
				<td>Grade</td>
			</tr>

			<?php
			$count = 0;
			$result = 0;
			$highestGrade = 0;
			$lowestGrade = 100;
			$lowestIndex;
			$highestIndex;
			
			for($i=0; $i < count($students); $i++){
				if($students[$i]['Grade']> $highestGrade){
					$highestGrade =$students[$i]['Grade'];
					$highestIndex = $i;
				}

				if($students[$i]['Grade']<$lowestGrade){
					$lowestGrade = $students[$i]['Grade'];
					$lowestIndex = $i;
				}

				$count++;
				$result+=$students[$i]['Grade'];
				$average = $result / $count;
			}


			







			for($j = 0; $j<count($students); $j++){
				$class = '';
				if($students[$j]['Grade'] === $highestGrade){
					$class = 'top';
					
				} else if($students[$j]['Grade'] === $lowestGrade) {
					$class = 'bottom';		
				} 


				echo
				"<tr class=" . $class . ">
				<td>".$students[$j]['name']."</td>
				<td>".$students[$j]['Class']."</td>
				<td>".$students[$j]['Grade']."</td>
				<td><button>Delete</button></td>
			</tr>";






		}







				/*
				echo 'Highest Grade: '. $highestGrade . '<br>';
				echo 'lowest Grade: ' . $lowestGrade . '<br>';
				echo 'Highest index: ' . $highestIndex . '<br>';
				echo 'Lowest index: ' . $lowestIndex . '<br>';
				*/

				





				?>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td> <?php echo $average; ?> </td>
					<td>&nbsp;</td>
				</tr>

			</table>


		</body>
		</html>