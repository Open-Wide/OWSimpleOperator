OW Simple Operator
=====================

Template operators of eZ Publish are really powerfull ! 

But sometimes you want to create some simples template operators, which don't need power.

In this case, you can use OWSimpleOperator. You will save time and you will have more readable and maintainable operators.

This extension was made by [Open Wide](http://openwide.fr)


Step 1 : Install
-------
Add the OWSimpleOperator extension to your project.

This extension will provide to you the "OWSimpleOperator" class.
So you have to regenerate the extension autoloads.


Step 2 : Template Operators Class 
-------
In your own extension, create a template operators class in the following path :

    /extension/myextension/autoloads/mytemplateoperator.php

It must extends the OWSimpleOperator :

    class ExampleOperator extends OWSimpleOperator
    {
    }


Step 3 : Code your operator
-------
Add the implementation of your operator.
For example for a sum operator :

    class ExampleOperator extends OWSimpleOperator
    {
        /*!
         * Return the sum of two numbers
         */
        function example_sum( $number1, $number2 )
        {
            return ( $number1 + $number2 );
        }
    }


Step 4 : Register your operator
-------
Register your operator in the eztemplateautoload.php file :

    /extension/myextension/autoloads/eztemplateautoload.php

The content of this file have to look like that :

    $eZTemplateOperatorArray = array(
         array(
            'script' => 'extension/owsimpleoperator/autoloads/exampleoperator.php',
            'class' => 'ExampleOperator',
            'operator_names' => array(
                'example_sum' ,
            )
         )
    );
    

Step 5 : Use it in your template
-------
You already can use it in your template.

Like that :

    {example_sum(1, 2)}
    
Or like that :

    {1|example_sum(2)}
    
    
Bonus
-------
The OWSimpleOperator provides also a lot of utils methods for your PHP code :

* String manipulation
* eZ Object Attribute Manipulation
* Object type Control
* Output manipulation 


Contraints
-------
If an operator argument is optional, you have to set the default value to null.

If you want more than 10 arguments for yout operator, you have to override the $max_operator_parameter attribute.