        Assignment Date - Tue June 21/22 - Wed June 22/22
Table Of Contents 
- [Arrays In PHP](#arrays-in-php)
  - [Types of Arrays in PHP](#types-of-arrays-in-php)
    - [VIEW ARRAYS](#view-arrays)
  - [PHP Sorting Arrays](#php-sorting-arrays)
    - [PHP Functions For Sorting Arrays](#php-functions-for-sorting-arrays)
    - [Sorting Indexed Arrays in Descending Order](#sorting-indexed-arrays-in-descending-order)

# Arrays In PHP

Arrays are complex variables that allow us to store more than one value or a group of values under a single variable name. Let's suppose you want to store colors in your PHP script. Storing the colors one by one in a variable could look something like this:
    ```PHP
    <?php
    $color1 = "Red";
    $color2 = "Green";
    $color3 = "Blue";
    ?>
    ```

## Types of Arrays in PHP

- Indexed array — An array with a numeric key.

    ```PHP
    <?php
    $colors[0] = "Red"; 
    $colors[1] = "Green"; 
    $colors[2] = "Blue"; 
    ?>
    ```

- Associative array — An array where each key has its own specific value.
