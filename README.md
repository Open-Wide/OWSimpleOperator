OW Simple Operator README
=====================

Template operators of eZ Publish are really powerfull !

But sometimes you want to create some simples template operators, which don't need power.

In this case, you can use OWSimpleOperator. You will save time and you will have more readable and maintainable operators.

This extension was made by [Open Wide](http://openwide.fr)

# Install
   ------------

For installation instructions please read the doc/INSTALL.md


# Features
   ------------

The OWSimpleOperator provides also a lot of utils methods for your PHP code :

* Call any PHP Function as a template operator
* String manipulation
* eZ Object Attribute Manipulation
* Object type Control
* Output manipulation


# Constraints
   ------------

If an operator argument is optional, you have to set the default value to null.

If you want more than 10 arguments for your operator, you have to override the $max_operator_parameter attribute.

If you want to use a PHP Function as a template operator it must be enabled within owsimpleoperator.ini.append.php:[PHPFunctions] PermittedFunctionList[]


# Copyright
   ------------

OW Simple Operator is copyright 1999-2012 OPEN WIDE

See: doc/COPYRIGHT.md for more information on the terms of the copyright and license


# License
   ------------

OW Simple Operator is licensed under the GNU General Public License.

The complete license agreement is included in the doc/LICENSE file.

OW Simple Operator is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

OW Simple Operator is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

The GNU GPL gives you the right to use, modify and redistribute
OW Simple Operator under certain conditions. The GNU GPL license
is distributed with the software, see the file doc/LICENSE.

It is also available at http://www.gnu.org/licenses/gpl.txt

You should have received a copy of the GNU General Public License
along with OW Simple Operator in doc/LICENSE.  If not, see http://www.gnu.org/licenses/.

Using OW Simple Operator under the terms of the GNU GPL is free (as in freedom).


# Troubleshooting
   ------------

* Remember template results are cached
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

   ------------

* Read the doc/INSTALL.md
   ------------
