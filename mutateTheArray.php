<?php
function mutateTheArray( $n, $a ) {
    $b = [];
    for ( $i = 0; $i < $n; $i++ ) {
        $if_exist = isset( $a[$i - 1] ) && isset( $a[$i + 1] ) ? true : false;
        if ( $if_exist ) {
            $b[$i] = $a[$i - 1] + $a[$i] + $a[$i + 1];
        } else {
            $first_a = isset( $a[$i - 1] ) ? $a[$i - 1] : 0;
            $third_a = isset( $a[$i + 1] ) ? $a[$i + 1] : 0;
            $b[$i] = $first_a + $a[$i] + $third_a;
        }
    }
    return $b;
}
$a = [4, 5, -1, 2, 3];
$n = 5;
$b = mutateTheArray( $n, $a );
echo '<pre>';
print_r( $b );
echo '</pre>';
