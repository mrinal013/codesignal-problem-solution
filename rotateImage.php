<?php

function rotateImage( $a ) {
    // Step 1: swap the elements diagonally
    $diagonal_array = [];
    $length = count( $a );
    for ( $i = 0; $i < $length; $i++ ) {
        for ( $j = 0; $j < $length; $j++ ) {
            $_temp = $a[$i][$j];
            $diagonal_array[$i][$j] = $a[$j][$i];
            $diagonal_array[$j][$i] = $_temp;
            // echo $i . ' ' . $j . '<br/>';
        }
    }
    // echo '<pre>';
    // print_r( $diagonal_array );
    // echo '</pre>';
    // Step 2: swap the elements horizontally
    $horizontal_array = [];
    for ( $i = 0; $i < $length; $i++ ) {
        for ( $j = 0; $j < ( $length / 2 ); $j++ ) {
            $_temp = $diagonal_array[$i][$j];
            $horizontal_array[$i][$j] = $diagonal_array[$i][$length - 1 - $j];
            $horizontal_array[$i][$length - 1 - $j] = $_temp;
            // echo $_temp . '<br/>';
        }
    }
    $result = [];
    foreach ( $diagonal_array as $key => $value ) {
        // echo '<pre>';
        // print_r( array_reverse( $value ) );
        // echo '</pre>';
        $result[] = array_reverse( $value );
    }
    echo '<pre>';
    print_r( $result );
    echo '</pre>';
    // return $a;
}

$a = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

echo '<pre>';
// print_r( $a );
print_r( rotateImage( $a ) );
echo '</pre>';