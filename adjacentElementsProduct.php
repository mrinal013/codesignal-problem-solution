<?php
function adjacentElementsProduct( $inputArray ) {
    $values = [];
    for ( $i = 0; $i < count( $inputArray ) - 1; $i++ ) {
        array_push( $values, $inputArray[$i] * $inputArray[$i + 1] );
    }
    return max( $values );
}

$inputArray = [-23, 4, -3, 8, -12];
echo adjacentElementsProduct( $inputArray );