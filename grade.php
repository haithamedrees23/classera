<?php

/*


*/
class grades
{

private $multipleFactor=5;

//this function will recieve the original grade and then calculate  the next multiple of 5 for this grade , if the difference between the next multiple of 5 and the orginal grade is less than 3 the will return (the next multiple of 5) as final grade otherwise it will return the original grade as final grade
private function getNextMultiplesOfFive($original)
	{


	 $final=$original+ ($this->multipleFactor - $original % $this->multipleFactor)	;

	 if( ($final-$original)<3)
	 	return $final;
	 else
	 	return $original;

	}

// this function randomly generate student grades between 0 and 100 
public function generateGrades($students)
	{

		for($i=1;$i<=$students;$i++)
			$studentsGrades[$i]=rand(0,100);

		return $studentsGrades;	
	}





public function gradingStudents($grades){


echo '<table border=1>
		<tr>
			<th>ID</th>
			<th>Orginal Grade</th>
			<th>Final Grade</th>
			<th>Result</th>

		</tr>';

foreach($grades as $index=>$orginalGrade){

	$finalGrade=$this->getNextMultiplesOfFive($orginalGrade);

	if($finalGrade<40){
		$result='Failed';
		$finalGrade=$orginalGrade;
	}
	else
		$result='Passed';

echo '<tr>
		<td>'.$index.'</td>
		<td>'.$orginalGrade.'</td>
		<td>'.$finalGrade.'</td>
		<td>'.$result.'</td>
	  </tr>' ;
}

echo '</table>';
}


}//end of class

$gradeObj=new grades();
$studentsGrades=$gradeObj->generateGrades(60);
$gradeObj->gradingStudents($studentsGrades);


?>