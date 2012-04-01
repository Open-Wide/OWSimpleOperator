<?php

$eZTemplateOperatorArray = array(
     array(
        'script' => 'extension/owsimpleoperator/autoloads/exampleoperator.php',
        'class' => 'ExampleOperator',
        'operator_names' => array(
            'example_sum'
        ) ),
     array(
        'script' => 'extension/owsimpleoperator/autoloads/phpfunctionoperator.php',
        'class' => 'PHPFunctionOperator',
        'operator_names' => eZINI::instance('owsimpleoperator.ini')->variable( 'PHPFunctions', 'PermittedFunctionList' )
        )
);

?>