<?php
function firstDuplicate( $a ) {
    $has_duplicate = false;
    $array_count = array_count_values( $a );
    foreach ( $array_count as $k => $v ) {
        if ( $v > 1 ) {
            $has_duplicate = true;
            break;
        }
    }
    if ( $has_duplicate ) {
        $non_duplicate_array = [];
        $duplicate_values = [];
        $array_count = array_count_values( $a );
        foreach ( $array_count as $k => $v ) {
            if ( $v == 1 ) {
                $non_duplicate_array[] = $k;
            } else {
                $duplicate_values[] = $k;
            }
        }
        $duplicate_array = array_diff( $a, $non_duplicate_array );
        $dup_values = [];
        foreach ( $duplicate_values as $k => $v ) {
            $dup_values[] = array_keys( $duplicate_array, $v )[1];
        }
        $min_duplicate = min( $dup_values );
        return $a[$min_duplicate];
    } else {
        return -1;
    }
}
$a = [2, 1, 3, 5, 3, 2];
echo firstDuplicate( $a );