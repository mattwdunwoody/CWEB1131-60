<?php 

$exampleNum = 3;
$exampleNum2 = 4;
$exampleArray = array(1, 2, 3, 4, 5);

//If statement:
if($exampleNum == 3)
{
	echo "<p>Hello World!</p>";
}
//=============================



//If.. Else statement:
if($exampleNum == 0)
{
	echo "this should never print.";
}

else
{
	echo "<p>Hello from the else statement!</p>";
}
//===============================================



//If elseif else statement:
if($exampleNum == 0)
{
	echo "this statement should never print.";
}

elseif($exampleNum == 1)
{
	echo "this statement should also never print.";
}

else
{
	echo "<p>Hello from the if, elseif, else statement!</p>";
}
//===========================================================



//Nested if statement
if($exampleNum == 3)
{
	if($exampleNum2 ==4)
	{
		echo "<p>Hello from the nested if statement!</p>";
	}
}
//========================================================



//Switch statement:
switch($exampleNum)
{
	case(0):
		echo "this statement should never print.";
	case(1):
		echo "this statement should never print.";
	case(2):
		echo "this statement should never print.";
	case(3):
		echo "<p>Hello from the switch statement!</p>";
}
//=====================================================



//while loop:
while($exampleNum > 0)
{
	$exampleNum --;
}
echo "<p>while loop concluded.</p>";
//==================================



//do-while loop:
do {$exampleNum ++;} while ($exampleNum < 10);
echo "<p>do-while loop concluded.</p>";
//===========================================



//for loop;
echo "<p>Beginning for loop!</p>";
for($exampleNum = 0; $exampleNum <= 10; $exampleNum ++)
{
	echo "$exampleNum <br>";
}
echo "<p>For loop concluded!</p>";
//=====================================================



//foreach:
echo "<p>Beginning foreach loop!</p>";
foreach($exampleArray as $x)
{
	echo "$x <br>";
}
echo "<p>Foreach loop concluded!</p>";
//====================================



//for loop with break:
echo "<p>Beginning for loop!</p>";
for($exampleNum = 0; $exampleNum <= 10; $exampleNum ++)
{
	echo "$exampleNum <br>";
	if($exampleNum == 5)
	{
		echo "condition matched! breaking...";
		break;
	}
}
echo "<p>For loop concluded!</p>";
//=====================================================



//for loop with continue:
echo "<p>Beginning for loop!</p>";
for($exampleNum = 0; $exampleNum <= 10; $exampleNum ++)
{
	if($exampleNum == 5)
	{
		echo "condition matched! skipping... <br>";
		continue;
	}
	echo "$exampleNum <br>";
}
echo "<p>For loop concluded!</p>";
//=====================================================



//create array: see line 5.

//Access arrays:
echo "Value of index 0 of example array is: $exampleArray[0] <br>";

//Update arrays:
echo "<p>Beginning foreach loop!</p>";
foreach($exampleArray as $index)
{
}

?>