<?php

/*New features in PHP 7.0*/
/*Scalar Type Declarations*/

/*Q: What are Scalar type declarations in PHP?

A: Type declarations are what allows the function to require certain types of parameters at call time. There are two types Scalar type declarations: one is coercive or you can say it default and other is strict.

Type parameters: strings (string), integers (int), floating-point numbers (float), and booleans (bool).*/

/*EXAMPLE*/

/*
function returnsum(float $x, float $y) 
	{
		return $x + $y;
	}
echo returnsum(6, "8 days");
//output float(14)
echo returnsum(4.1, "4.2");
//output float(8.3)

*/

declare(strict_types = 1);
function returnsum(float $a, float $b)
	{
		return $a + $b;
	}
echo returnsum(3.1, 2.1);
// output float(5.2)
echo returnsum(3, "2 days");
// Fatal error