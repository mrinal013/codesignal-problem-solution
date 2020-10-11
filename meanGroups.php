<?php

function meanGroups( $a ) {
    $mean = $result = [];

    foreach ( $a as $k => $v ) {
        foreach ( $v as $key => $val ) {
            $average = array_sum( $v ) / count( $v );
            $mean[$k] = strval( $average );
        }
    }

    $means = array_count_values( $mean );

    foreach ( $means as $k => $v ) {
        if ( $v > 1 ) {
            foreach ( $mean as $key => $val ) {
                if ( $k == $val ) {
                    $keys = array_keys( $mean, $val );
                    if ( !in_array( $keys, $result ) ) {
                        array_push( $result, $keys );
                    }
                }
            }
        } else {
            $single_val = array_search( $k, $mean );
            array_push( $result, [$single_val] );
        }
    }
    return $result;
}
$a = [
    [3, 3, 4, 2],
    [4, 4],
    [4, 0, 3, 3],
    [2, 3],
    [3, 3, 3],
];
echo '<pre>';
print_r( meanGroups( $a ) );
echo '</pre>';