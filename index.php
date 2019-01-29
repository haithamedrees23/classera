<?php
class grades
{

public function getNextMultiplesOfFive($input=0)
{
if(empty($input))
	return $input;

 $target=ceil($input/5);
 $nextValue=$target*5;

 $target=$nextValue-$input;
 if($target<3)
 	return $nextValue;
 else
 	return $input;

}
}

$grade=new grades();
echo $grade->getNextMultiplesOfFive(82);
?>