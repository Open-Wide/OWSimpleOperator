<?php

// Initialisation
$ini = eZIni::instance( 'owsimpleoperator.ini' );
$tpl = eZTemplate::factory();
$operator_name = $Params[ 'Parameters' ][ 0 ];

// Which operator
if ( empty( $operator_name ) )
{
    $operator_name = 'example_sum';
}
$tpl->setVariable( 'operator_name', $operator_name );

// Find test
$operator_test_available = $ini->variable( 'OperatorExample', 'OperatorExampleAvailable' );
if ( is_array( $operator_test_available ) && in_array( $operator_name, $operator_test_available ) )
{
    $tpl->setVariable( 'content_template_path', 'owsimpleoperator/' . $operator_name . '.tpl' );
}
else
{
    $tpl->setVariable( 'content_template_path', 'owsimpleoperator/backoffice_operator_not_found.tpl' );
}

// Result
$Result = array( );
$Result[ 'left_menu' ] = 'design:owsimpleoperator/backoffice_left_menu.tpl';
$Result[ 'content' ] = $tpl->fetch( 'design:owsimpleoperator/backoffice_content.tpl' );

?>
