<?php

function countTinyPairs( $a, $b, $k ) {
    $tiny = [];
    $array_length = count( $a );
    for ( $i = 0; $i < $array_length; $i++ ) {
        $concatenation = $a[$i] . $b[$array_length - ( $i + 1 )];
        if ( $concatenation < $k ) {
            $tiny[] = 'tiny';
        }

    }
    $tiny_total = count( $tiny );
    return $tiny_total;
}
$a = [1, 2, 3];
$b = [1, 2, 3];
$k = 32;
echo countTinyPairs( $a, $b, $k );