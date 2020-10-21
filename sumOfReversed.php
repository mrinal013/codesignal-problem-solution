<?php
function sumOfReversed( $arr ) {
    $result_array = [];
    foreach ( $arr as $key => $value ) {
        $_reverse_number = strrev( $value );
        // echo $_reverse_number;
        // echo '<br/>';
        // echo intval( $_reverse_number );

        $is_leading_zeros = ( strlen( $_reverse_number ) == strlen( intval( $_reverse_number ) ) ) ? false : true;
        var_dump( $is_leading_zeros );
        if ( $is_leading_zeros ) {
            $zeros = strlen( $_reverse_number ) - strlen( intval( $_reverse_number ) );
            // echo $zeros;
            $zeros_str = substr( 10 ** $zeros, 1 );
            echo $zeros_str;
            $zero_after = intval( $_reverse_number ) . $zeros_str;
            echo $zero_after;
            array_push( $result_array, $zero_after );
        } else {
            array_push( $result_array, $_reverse_number );
        }

        // echo '<br/>';
    }
    echo '<pre>';
    print_r( $result_array );
    echo '</pre>';
    return array_sum( $result_array );
}
$arr = [7, 234, 58100];
$arr = [0, 100, 220];
// $result =
echo $result = sumOfReversed( $arr );
