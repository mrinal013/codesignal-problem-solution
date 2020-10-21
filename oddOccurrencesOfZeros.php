<?php
function oddOccurrencesOfZeros( $a ) {
    $result_array = [];
    for ( $i = 0; $i < count( $a ); $i++ ) {

        // $is_ten_multiplier = ( $a[$i] % 10 ) == 0 ? true : false;
        // var_dump( $is_ten_multiplier );
        // if ( $is_ten_multiplier ) {
        $_number = str_split( $a[$i] );
        // echo '<pre>';
        // print_r( $_number );
        // echo '</pre>';
        $_number_values = array_count_values( $_number );
        // echo '<pre>';
        // print_r( $_number_values );
        // echo '</pre>';
        if ( isset( $_number_values[0] ) ) {
            $is_odd = ( $_number_values[0] % 2 ) == 0 ? false : true;
            var_dump( $is_odd );
            if ( $is_odd ) {
                array_push( $result_array, 'odd' );
            }

        }
        // }
        echo '<br/>';
    }
    echo '<pre>';
    print_r( $result_array );
    echo '</pre>';
    return count( $result_array );
}
$a = [7, 5017];
$result = oddOccurrencesOfZeros( $a );
echo '<pre>';
print_r( $result );
echo '</pre>';