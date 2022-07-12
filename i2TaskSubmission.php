<?php

#Variable setting for A, X and a loop limiter for your max multiplication. Raising the loop limiter could result in longer processing time.
$A = 4;
$X = 800;
$LoopLimit = 10000;

#Calling the calculation function with values specified in the email brief.

#Variable pass in rules;
#The A value, a number to add to A, the X variable, a number to multiply X by, the loop limiter.
calculation($A, 0, $X, 1, $LoopLimit);
calculation($A, 1, $X, 2, $LoopLimit);
calculation($A, 2, $X, 3, $LoopLimit);


	#This function takes in the A value, a number to add to A, the X variable, a number to multiply X by, the loop limiter.
	#It will return with a true statement if A was able to be multiplied into X. It will return false if it was not possible.
	#The function will produce a print statement for debugging the results.
	#I made this function with the assumption that the program will only deal with absolute integers and not floating point.
	function calculation($A, $AdditionsToA, $X, $FactorOfX, $LoopLimit) {
		
		$result = null; 	#declairing result variable for comparisons

		#This for loop will limit itself by the LoopLimit variable, and will either end at that number or break once a result has been found
		for ($i = 1; $i < $LoopLimit; $i++) {
			$result = ($A+$AdditionsToA) * $i;

			if ($result == ($X * $FactorOfX))	{
				break;
				#return $i;
			}
		}
 		

		#If the result equals the factor of X, the print will report that the calculation was possible and return true.
		if ($result == ($X * $FactorOfX))	{
			print ("\nCalculation Success: A($A+$AdditionsToA) muiiplied by $i equals X($X x $FactorOfX = $result)");
			return true;
		}

 		#If the loop limit was reached, the print will report that the calculation was not possible and return false
		if ($i == $LoopLimit)	{
			print ("\nCalculation Fail: A($A+$AdditionsToA) could not be multiplied to result X($X x $FactorOfX = $result)");
			return false;
		}
	}


?>