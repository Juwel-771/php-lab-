<?php 
    // *** - Comparison operators are used to compare two values. They return either TRUE OR FALSE

    // ==	Equal to
    // ===	Identical
    // !=	Not equal
    // <>	Not equal (alt)
    // !==	Not identical
    // >	Greater than
    // <	Less than
    // >=	Greater than or equal
    // <=	Less than or equal

    $x = 10;
    $y = "10";
    $z = 20;

    var_dump($x == $y);   // true  (value is equal)
    var_dump($x === $y);  // false (type is different)
    var_dump($x != $z);   // true
    var_dump($x < $z);    // true
    var_dump($x >= $y);   // true


?>