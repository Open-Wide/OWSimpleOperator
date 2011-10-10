<?php

class ExampleOperator extends OWSimpleOperator
{
    
    /*!
     * Return the sum of two numbers
     */
    public function example_sum( $number1, $number2 )
    {
        echo $number1.'+'.$number2.PHP_EOL.'<br>';
        return ( $number1 + $number2 );
    }
    
}