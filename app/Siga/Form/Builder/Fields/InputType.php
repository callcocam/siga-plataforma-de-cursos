<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Siga\Form\Builder\Fields;


class InputType extends FormField
{

    /**
     * @inheritdoc
     */
    protected function getTemplate()
    {
        return 'text';
    }

}
