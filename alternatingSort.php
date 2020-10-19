<?php

$a = [1, 100, 95, 64];
function alternatingSort( $a ) {
    $total_a = count( $a );
    echo floor( $total_a / 2 );
    $new_a = [];
    for ( $i = 0, $j = $total_a - 1; $i <= $j; $i++, $j-- ) {
        array_push( $new_a, $a[$i] );
        if ( $i != $j ) {
            array_push( $new_a, $a[$j] );
        }
    }
    echo '<pre>';
    print_r( $new_a );
    echo '</pre>';
    $total_new_a = count( $new_a );
    $result = [];
    for ( $i = 0; $i < $total_new_a - 1; $i++ ) {
        if ( $new_a[$i + 1] - $new_a[$i] <= 0 ) {
            array_push( $result, 'not' );
        } else {
            array_push( $result, 'yes' );
        }
    }
    echo '<pre>';
    print_r( $result );
    echo '</pre>';
    if ( in_array( 'not', $result ) ) {
        return false;
    } else {
        return true;
    }
}
echo '<pre>';
$result = alternatingSort( $a );
var_dump( $result );
echo '</pre>';