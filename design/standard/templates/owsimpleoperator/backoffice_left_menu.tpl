<div class="box-header">
    <h4>Available Example</h4>
</div>

<div class="box-content">
    <ul>
        {foreach ezini( 'OperatorExample', 'OperatorExampleAvailable', 'owsimpleoperator.ini') as $operator_name}
            <li>
                <div>
                    <a href={concat( 'OWSimpleOperator/example/', $operator_name )|ezurl()}>
                        {$operator_name|upfirst()}
                    </a>
                </div>
            </li>
        {/foreach}
    </ul>
</div>
