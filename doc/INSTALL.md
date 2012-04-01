OW Simple Operator INSTALL
=====================

Template operators of eZ Publish are really powerfull !

But sometimes you want to create some simples template operators, which don't need power.

In this case, you can use OWSimpleOperator. You will save time and you will have more readable and maintainable operators.

This extension was made by [Open Wide](http://openwide.fr)


Installation Instructions
   ------------

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
        public function example_sum( $number1, $number2 )
        {
            return ( $number1 + $number2 );
        }
    }


Step 4 : Register your operator or function
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


PHP Functions must be enabled via settings
-------
If you want to use a PHP Function as a template operator it must be enabled within owsimpleoperator.ini.append.php:[PHPFunctions] PermittedFunctionList[]

Example from owsimpleoperator.ini.append.php

[PHPFunctions]
PermittedFunctionList[]
PermittedFunctionList[]=time
PermittedFunctionList[]=mktime
PermittedFunctionList[]=getdate
PermittedFunctionList[]=str_replace
PermittedFunctionList[]=ereg_replace
PermittedFunctionList[]=str_rot13
PermittedFunctionList[]=file_get_contents


Step 5 : Use it in your template
-------
You already can use it in your template.

Like that :

    {example_sum(1, 2)}

Or like that :

    {1|example_sum(2)}


Cache
-------

Warning! Remember to use cache-block tags to ensure operator and function results are not cached incorrectly.

See: http://doc.ez.no/eZ-Publish/Technical-manual/4.x/Reference/Template-functions/Miscellaneous/cache-block

From example template override: extension/exampleprojectdesign/design/exampleprojectdesign/override/templates/full/article.tpl

{set-block scope=global variable=cache_ttl}0{/set-block}

<!-- snip -->

{cache-block keys=currentdate()}
<hr />
{time()}
<hr />
{getdate()|attribute(show,1)}
<hr />
{/cache-block}


Troubleshooting
-------

1. Remember template results are cached
   ------------

Warning! Remember to use cache-block tags to ensure operator and function results are not cached incorrectly.

See: http://doc.ez.no/eZ-Publish/Technical-manual/4.x/Reference/Template-functions/Miscellaneous/cache-block

From example template override: extension/exampleprojectdesign/design/exampleprojectdesign/override/templates/full/article.tpl

{set-block scope=global variable=cache_ttl}0{/set-block}

<!-- snip -->

{cache-block keys=currentdate()}
<hr />
{time()}
<hr />
{getdate()|attribute(show,1)}
<hr />
{/cache-block}


2. Read the README.md
   ------------

   Some problems are more common than others.

   The most common ones are listed in the the README.md
