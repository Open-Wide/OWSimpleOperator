<?php

class ExampleOperator extends OWSimpleOperator
{
    
    /*!
     * Return the sum of two numbers
     */
    function example_sum( $number1, $number2 )
    {
        echo $number1.'+'.$number2.PHP_EOL.'<br>';
        return ( $number1 + $number2 );
    }
    
}