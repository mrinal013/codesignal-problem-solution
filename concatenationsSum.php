<?php
function concatenationsSum( $a ) {
    $array_length = count( $a );
    $result_array = [];
    for ( $i = 0; $i < $array_length; $i++ ) {
        for ( $j = 0; $j < $array_length; $j++ ) {
            array_push( $result_array, $a[$i] . $a[$j] );
        }
    }
    echo '<pre>';
    print_r( $result_array );
    echo '</pre>';
    return array_sum( $result_array );
}
$a = [10, 2];
echo concatenationsSum( $a );