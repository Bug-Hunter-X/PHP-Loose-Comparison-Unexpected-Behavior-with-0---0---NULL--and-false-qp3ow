# PHP Loose Comparison Bug

This repository demonstrates a common, yet subtle, bug in PHP related to loose comparison using the '==' operator.  Loose comparison does not perform strict type checking, leading to unexpected results in certain scenarios.  This example highlights the issue with comparisons involving 0, '0', NULL, and false.

## Setup

1. Clone the repository.
2. Run `php bug.php` to see the unexpected behavior.
3. Run `php bugSolution.php` to see how to fix this by using strict comparison.

## Bug
The `bug.php` file contains a function that uses loose comparison ('==').  When comparing 0 and '0', or NULL and false, the function returns false even though these values are considered loosely equal in some contexts. This can lead to unpredictable program behavior.

## Solution
The `bugSolution.php` file demonstrates the solution, which is to use strict comparison ('===') instead of loose comparison.  Strict comparison ensures both value and type are checked for equality, which avoids the unexpected results. 