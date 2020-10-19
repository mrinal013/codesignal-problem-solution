<?php

function firstNotRepeatingCharacter( $s ) {
    $string_to_array = str_split( $s );
    $get_array_values = array_count_values( $string_to_array );
    $array_search = array_search( 1, $get_array_values );
    $result = !empty( $array_search ) ? $array_search : '_';
    return $result;
    echo '<pre>';
    print_r( $string_to_array );
    print_r( $get_array_values );
    print_r( $array_search );
    echo '</pre>';
    // return $string_to_array;
}

$s = 'abacabaabacaba';
echo '<pre>';
print_r( firstNotRepeatingCharacter( $s ) );
echo '</pre>';
// firstNotRepeatingCharacter( $s );