# PHP Homework Assignment 2 
This assignment is due 5/22/2021

# Indexed Arrays
Consider the statement.

```php
   $month = array ('January', 'February', 'March', 'April',
                   'May', 'June', 'July', 'August',
                   'September', 'October', 'November', 'December'); 
 ```
Steps for this Lab
Include the above $month assignment statement in a HTML/PHP script. With 12 elements in the array, the months can retrieved as $month[0], ..., $month[12]. Write a for loop that prints these months in order.

Place the months in alphabetical order with the statement

```php
   sort($month)
and print the months $month[0], ..., $month[12] again in a loop.
```
# The foreach Statement
The foreach statement provides another way to cycle through the values in an array, when the index of each item is not of particular interest:

```php
   foreach ($month as $item) {
      echo $item ;
      echo "<br>";
   }
   ```
# More Steps
Add the above foreach statement to your HTML/PHP script.

Associative Arrays
Consider the following array initializations:

```php
   $monthDays = array ('January'   => 31, 'February' => 28,
                       'March'     => 31, 'April'    => 30,
                       'May'       => 31, 'June'     => 30, 
                       'July'      => 31, 'August'   => 31,
                       'September' => 30, 'October'  => 31, 
                       'November'  => 30, 'December' => 31); 
  ```                     
# More Steps
Print the elements of this array with the loop:

```php
   foreach ($monthDays as $item => $days) {
      echo $item . ":" . $days;
      echo "<br>";
   }
```
